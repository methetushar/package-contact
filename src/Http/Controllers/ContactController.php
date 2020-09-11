<?php

namespace tusharahmed\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function ContactForm()
    {
        return view('contact::contact-form');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
           'name' => 'required |min: 4',
           'email' => 'required |unique:Contact',
        ]);
        return $request;
    }
}
