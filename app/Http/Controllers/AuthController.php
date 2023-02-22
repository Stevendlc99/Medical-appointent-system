<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'correo' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $usuario = Auth::user();
            if ($usuario->rol == 'paciente') {
                return view('paciente');
            } elseif ($usuario->rol == 'doctor') {
                return view('doctor');
            }
        }

        
    }
    
}