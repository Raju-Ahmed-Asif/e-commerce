<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function list(){

        return view('backend.pages.brand.list');
    }
    public function form(){

        return view('backend.pages.brand.form');
    }
    public function store(Request $request){
        
        Brand::create([
 
            'brand_name'=>$request->brand_name,
            'size'=>$request->size
        ]);
         return view('backend.pages.brand.list');

    }

}
