<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
class CategoryController extends Controller
{
    //
    public function index (){
        $categories = Category::all();
        return response() -> json (
            [
                'success'=> true,
                'categories'=> $categories
            ]
            );
    }
}
