<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){

    return view('backend.pages.customer.list');
        
    }
    
    public function form(){

        return view('backend.pages.customer.form');
            
        }
        public function store(Request $request){
        
            Customer::create([
    
                'customer_name'=>$request->customer_name,
                // 'customer_email'=>$request->customer_email,
                'password'=>$request->password
            ]);
            return view('backend.pages.customer.list');
        }
}
