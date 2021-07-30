<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
  
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(10);
        return view('guest.index', compact('posts'));
    }


    public function about()
    {
        $posts = Post::all();
        return view('guest.about', compact('posts'));
    }


    public function contacts()
    {
        $posts = Post::all();
        return view('guest.contacts', compact('posts'));
    }


    public function sendContactForm(Request $request)
    {

        $validatedData = $request->validate([
            "full_name" => "required",
            "email" => "required | email",
            "message" => "required"
        ]);

        Mail::to('admin@test.com')->send(new ContactFormMail($validatedData));
        return redirect()
        ->back()
        ->with('message', 'Success! Grazie per averci contattato, ti risponderemo entro 48 ore.');
    }

    public function userName(String $username)
    {
        $posts = Post::where('user_name', $username)->get();
        return view('guest.userName', compact('posts', 'username'));
    }
}
