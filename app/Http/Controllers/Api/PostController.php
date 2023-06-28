<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Project;
class PostController extends Controller
{
    //
    public function index(){
       // $post = Project::with('category','tecnologies')->get();
        $post = Project::with('category','tecnologies')->paginate(4);
        return response()->json([
            'success'=> true,
            'post'=> $post
        ]);
    }
}