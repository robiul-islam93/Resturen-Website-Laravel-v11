<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function CotactStore(Request $request)
    {


        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // send email to admin
        Mail::to('robi.cnits@gmail.com')->send(new ContactUs($data));
        contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);
        return redirect('/consgratulation-message');
    }



    public function contactList()
    {

        $contact = contact::orderBy('id', 'desc')->paginate(5);

        return view('adminpanel.contact.contact-list', compact('contact'));
    }


    public function ContactdeleteRecord($id)
    {
        $record = contact::findOrFail($id);

        $record->delete();
        return redirect()->route('contact-list')->with('error', 'Record are deleted!');
    }


}
