<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()

    {
        return view ('dashboard.contact');
    }

    public function store(Request $request)

    {


        $Contact=new Contact();
        $Contact->name=$request->name;
        $Contact->email=$request->email;
        $Contact->subject=$request->subject;
        $Contact->message=$request->message;
        $Contact->save();
    

       return back()->with('post_created','Message has been created sucessfully');
    }
}
