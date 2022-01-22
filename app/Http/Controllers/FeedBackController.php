<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedBackController extends Controller
{
    public function index(Request $request) {
        return view('en.feedback');
//        $session = $request->session()->get('locale');
//        if ($session === 'en') {
//            return view('en.feedback');
//        } else {
//            return view('ru.feedback');
//        }
    }

    public function send(Request $request) {


        $request->input('name');
        $request->input('email');
        $request->input('message');
        $request->file('file');
    }
}
