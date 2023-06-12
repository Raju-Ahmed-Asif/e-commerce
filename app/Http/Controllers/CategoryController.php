<?php


namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){

        return view('backend.pages.category.list');
    }

    public function form(){

        return view('backend.pages.category.form');
    }
   public function store(Request $request){
        
        Category::create([
 
            'category_name'=>$request->category_name,
            'description'=>$request->description
        ]);
        return view('backend.pages.category.list');

    }
}
