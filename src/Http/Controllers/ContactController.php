<?php

namespace monjur\contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use monjur\contact\Mail\ContactMailable;
use monjur\contact\Models\contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function store(Request $request)
    {
        Mail::to(config('contact.send_to_mail'))->send(new ContactMailable($request->message, $request->name));
        // Mail::to($request->email)->send(new ContactMailable($request->message, $request->name));
        contact::create($request->all());
        return redirect()->back();
    }
}
