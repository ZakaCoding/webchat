<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        try
        {
            Mail::send('email', ['name' => $request->nama, 'message' => $request->message], function ($message) use ($request)
            {
                $message->subject($request->judul);
                $message->from('donotreply@mail.com', 'Devs');
                $message->to($request->email);
            });
            return back()->with('alert-success','Mail has been sent');
        }
        catch (Exception $e)
        {
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }
}
