<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;
use Illuminate\Support\Facades\DB;

class VerificationEmailController extends Controller
{
    public function VerifiesEmail($token,$name,$email)
    {
        // Check data email has record in database
        if(DB::table('users')->where('email','=', $email)->exists())
        {
            if(DB::table('users')->where('remember_token','=', $token)->exists())
            {
                
            }
        }
        else{

        }
    }
}
