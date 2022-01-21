<?php

namespace App\Http\Controllers;

use stdClass;
use App\Mail\FeedbackMailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FeedBackController extends Controller
{
    public function index(Request $request) {
        $session = $request->session()->get('locale');
        if ($session === 'en') {
            return view('en.feedback');
        } else {
            return view('ru.feedback');
        }
    }

    public function send(Request $request) {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|max:500',
        ]);

        $data = new stdClass();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        Mail::to($data->email)->send(new FeedbackMailer($data));
        $session = $request->session()->get('locale');
        if ($session === 'en') {
            return redirect()->route('en.feedback')
                ->with('success', 'Your message has been sent successfully');
        } else {
            return redirect()->route('ru.feedback')
                ->with('success', 'Ваше сообщение успешно отправлено');
        }
    }
}
