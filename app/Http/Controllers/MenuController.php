<?php

namespace App\Http\Controllers;

use App\Models\Gerecht;

class MenuController extends Controller
{
    public function index()
    {
        $gerechten = Gerecht::all();
        return view('klanten_view.menu', ['gerechten' => $gerechten]);
    }
}
