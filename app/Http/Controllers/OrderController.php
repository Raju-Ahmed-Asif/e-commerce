<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list() {

        return view('backend.pages.order.list');

    }
    public function form() {

        return view('backend.pages.order.form');

    }
}
