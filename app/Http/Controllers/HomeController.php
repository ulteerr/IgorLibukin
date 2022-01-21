<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $session = $request->session()->get('locale');
        if($session === 'en' ) {
            return view('en.index');
        } else {
            return view('ru.index');
        }
    }
}
