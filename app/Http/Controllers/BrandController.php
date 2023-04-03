<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function list(){

        return view('backend.pages.brand.list');
    }
    public function form(){

        return view('backend.pages.brand.form');
    }
    

}
