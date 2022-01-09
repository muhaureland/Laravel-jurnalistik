<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(RegistrationRequest $request)
    {
        // $validatedData = $request->all();
        // $validatedData['password']  = bcrypt($validatedData['password']);
        // User::create($validatedData);

        User::create($request->all());
        return redirect('login')->with('status', 'Registrasi berhasil dilakukan');
    }
}
