<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    
    public function index()
    {
        $brands = Brand::orderby('name','asc')->get();
        
        $transformedBrands =$brands->map(function($brand){

            return [
                'id'=>$brand->id,
                'name'=>$brand->name,
                'image_path'=>$brand->GetLogoImage(),
            ];
        });


        return response()->json(['data' => $transformedBrands],200);
    }
    
}
