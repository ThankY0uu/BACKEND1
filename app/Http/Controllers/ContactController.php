<?php

namespace App\Http\Controllers;

use App\Models\Bericht;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Toon het contactformulier
    public function index()
    {
        return view('contact.contact');
    }

    // Sla het bericht op
    public function store(Request $request)
    {
        Bericht::create([
            'naam'    => $request->naam,
            'email'   => $request->email,
            'bericht' => $request->bericht,
        ]);

        return redirect('/contact')->with('succes', 'Je bericht is verstuurd!');
    }

    // Toon alle berichten in het admin paneel
    public function berichten()
    {
        $berichten = Bericht::all();
        return view('admin.berichten', ['berichten' => $berichten]);
    }
}
