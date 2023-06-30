<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Project;
class PostController extends Controller
{
    //x ottenere info Request $request 
    public function index( Request $request){

        if($request->has('category_id')){
            $post = Project::with('category','tecnologies')->where('category_id', $request->category_id)->paginate(4);
        }
        else{
            $post = Project::with('category','tecnologies')->paginate(4);
        }


       // $post = Project::with('category','tecnologies')->get();
      
        return response()->json([
            'success'=> true,
            'post'=> $post
        ]);
    }
}