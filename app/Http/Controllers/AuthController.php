<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Toon de loginpagina
    public function index()
    {
        return view('admin.login');
    }

    // Verwerk het loginformulier
    public function login(Request $request)
    {
        $gegevens = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($gegevens)) {
            // Inloggen gelukt, ga naar admin
            return redirect('/admin');
        }

        // Inloggen mislukt, terug naar login met foutmelding
        return redirect('/login')->with('fout', 'Email of wachtwoord klopt niet!');
    }

    // Uitloggen
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
