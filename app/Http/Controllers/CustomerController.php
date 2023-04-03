<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){

    return view('backend.pages.customer.list');
        
    }
    
    public function form(){

        return view('backend.pages.customer.form');
            
        }
}
