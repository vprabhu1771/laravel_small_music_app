<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    
    public function index()
    {
        
        $brand = Brand::orderby('name','asc')->get();

        return response()->json(['data' => $brand],200);
    }
    
}
