<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        return view('en.blog');
//        $session = $request->session()->get('locale');
//        if($session === 'en' ) {
//            return view('en.blog');
//        } else {
//            return view('ru.blog');
//        }
    }
}
