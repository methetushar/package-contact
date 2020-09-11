<?php

namespace tusharahmed\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use tusharahmed\Contact\Model\Contact;

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
           'email' => 'required |email',
        ]);
        $data = $request->all();
        if ($validate){
            Contact::create($request->all());
            return 'Data has gitbeen stored!';
        }
    }
}
