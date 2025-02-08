<?php

namespace App\Http\Controllers;

use App\Models\BookTable;
use App\Mail\BookTableMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookTableController extends Controller
{
    public function BookTableStore(Request $request)
    {
        $TableData = [
            'name' => $request->name,
            'mobile' => $request->mobile,
            'date' => $request->date,
            'time_slot' => $request->time_slot,
            'guest' => $request->guest,
            'message' => $request->message
        ];

        // send email to admin
        Mail::to('robi.cnits@gmail.com')->send(new BookTableMail($TableData));
        BookTable::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);
        return redirect('/consgratulation-message');
    }


}
