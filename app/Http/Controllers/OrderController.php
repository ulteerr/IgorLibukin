<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index() {
        return view('en.order.order');
    }
    public function multiPage()
    {
        return view('en.order.multi-page');
    }
}
