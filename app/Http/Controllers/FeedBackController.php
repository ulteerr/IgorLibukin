<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use stdClass;
use App\Mail\FeedbackMailer;
use Illuminate\Support\Facades\Mail;

class FeedBackController extends Controller
{
    public function index(Request $request)
    {
        return view('en.feedback.feedback');
//        $session = $request->session()->get('locale');
//        if ($session === 'en') {
//            return view('en.feedback');
//        } else {
//            return view('ru.feedback');
//        }
    }

    public function send(Request $request)
    {

        $file = $request->file('file');
        if ($file) {
            $raw = $file->get();
            $ext = $file->extension();
        }
        $data = new stdClass();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->file = $raw ?? null;
        $data->ext = $ext ?? null;
        $data->message = $request->message;

        Mail::to('order@igorlibukin.ru')->send(new FeedbackMailer($data));
        return redirect()->route('contacts.index')
            ->with('success', 'Your message has been sent successfully');
    }

}
