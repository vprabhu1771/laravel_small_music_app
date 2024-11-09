<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {

        $genres = Genre::orderby('name','asc')->get();
        
        return response()->json(['data' => $genres],200);
    }
}
