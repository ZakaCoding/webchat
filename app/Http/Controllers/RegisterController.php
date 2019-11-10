<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Mail;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth/register');
    }

    public function sendEmail($request = array())
    {
        try
        {
            Mail::send('mail', ['name' => $request['name'], 'email' => $request['email'], 'link' => $request['link']], function ($message) use ($request)
            {
                $message->subject('Confirmation your account');
                $message->from('donotreply@devs.com', 'Devs');
                $message->to($request['email']);
            });
            return back()->with('success',"You have successfully created your account. Please check your email for confirmation");
        }
        catch (Exception $e)
        {
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }

    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validation form Request
        $this->validate($request, [
            'name' => 'required|min:2|max:100',
            'email' => 'required|unique:users,email|email'
        ]);

        // from model
        $register = new Register();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = Hash::make($request->password);
        $remember_token = Str::random(60);
        $register->remember_token = $remember_token;
        $register->save();
        
        // Redirect to email confirmation page
        return $this->sendEmail([
            'name' => $request->name,
            'email' => $request->email,
            'link' => "http://localhost:8000/confirmation/$remember_token/$request->name&$request->email"
        ]);
    }
}
