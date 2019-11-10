<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth/register');
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
        // $validateData = $request->validate([
        //     'name' => 'bail|required|unique:posts:min:2|max:100',
        //     'email' => 'required|email:rfc,dns',
        //     'password' => 'required|min:8'
        // ]);

        // from model
        $register = new Register();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = Hash::make($request->password);
        $register->remember_token = Str::random(60);
        $register->save();

        dd("This");
    }
}
