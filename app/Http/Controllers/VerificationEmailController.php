<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class VerificationEmailController extends Controller
{
    public function VerifiesEmail($token,$name,$email)
    {
        // Check data email has record in database
        if(DB::table('users')->where('email','=', $email)->doesntExist())
        {
            return redirect()->route('confirmFail',['token' => $token, 'name' => $name, 'email' => $email])->with('failed','Your activation link has expired');
        }


        if(DB::table('users')->where('remember_token','=', $token)->doesntExist())
        {
            return redirect()->route('confirmFail',['token' => $token, 'name' => $name, 'email' => $email])->with('failed','Your activation link has expired');
        }

        // Store record
        try 
        {
            User::where('email',$email)
                ->whereNull('email_verified_at')
                ->update([
                    'email_verified_at' => now(),
                    'remember_token' => null
                ]);
            
            return redirect()->route('confirm',['token' => $token, 'name' => $name, 'email' => $email])->with('success','Your account has been activated you can login now');
        } catch (Exception $e)
        {
            return \response(['status' => false, 'errors' => $e->getMessage()]);
        }
    }

    public function show($token,$name)
    {
        return view('auth.emailverify', ['name' => $name]);
    }
}
