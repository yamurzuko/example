<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function get()
    {
        return view('signup');
    }

    public function post(Request $request)
    {
        $array['name'] = "required";
        $array['email'] = "required|email";
        $array['password'] = "required|min:4";

        $validated = $request->validate($array);
        print_r($validated);
        return view('signup');
    }
}
