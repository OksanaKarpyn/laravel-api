<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Tecnology;
class TecnologyController extends Controller
{
    //
    public function index() {
        $queryTecnology = Tecnology::all();
        return response()->json([
            'success'=> true,
            'queryTecnology'=> $queryTecnology
        ]);
    }
}
