<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function register(RegistrationRequest $requestFields)
    {
        \App\User::create($requestFields);  

        return redirect('/login');
    }
}
