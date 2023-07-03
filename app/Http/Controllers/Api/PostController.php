<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Project;
class PostController extends Controller
{
    //x ottenere info Request $request 
    public function index( Request $request){

    //     if($request->has('category_id')){
    //         $post = Project::with('category','tecnologies')->where('category_id', $request->category_id)->paginate(4);
    //     }
    //     else{
    //         $post = Project::with('category','tecnologies')->paginate(4);
    //     }


    //    // $post = Project::with('category','tecnologies')->get();
      
    //     return response()->json([
    //         'success'=> true,
    //         'post'=> $post
    //     ]);


        $query =  Project::with('category','tecnologies');
       
        if($request->has('category_id')){
            $query->where('category_id', $request->category_id);
        }

        if($request->has('tecnol_ids')){
            $tecnoIds = explode( ',',$request->tecnol_ids);
            // tecnologies si referishe al function che ce su model many to many
            $query->whereHas('tecnologies',function ($query) use ($tecnoIds) {
                
                $query->whereIn('id',$tecnoIds);
            });
        }
        $post = $query->paginate(4);

        return response()->json([
                     'success'=> true,
                     'post'=> $post
                 ]);
    }

}