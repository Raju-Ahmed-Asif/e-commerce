<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function list(){

        return view('backend.pages.wishlist.list');
    }
    public function form(){

        return view('backend.pages.wishlist.form');
    }
}
