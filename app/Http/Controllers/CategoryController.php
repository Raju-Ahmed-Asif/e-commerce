<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){

        return view('backend.pages.category.list');
    }

    public function form(){

        return view('backend.pages.category.form');
    }
}
