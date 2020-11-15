<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Traits\RegisterUser; 

class RegistrationController extends Controller
{
    use RegisterUser;

    public function show()
    {
        return view('register');
    }

    public function register(RegistrationRequest $requestFields)
    {
        $user = $this->registerUser($requestFields);
        return redirect('/login');
    }
}
