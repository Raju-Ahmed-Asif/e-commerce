<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){

        return view('backend.pages.product.list');
    }

    
    public function form(){

       return view('backend.pages.product.form');

    }

    
}
