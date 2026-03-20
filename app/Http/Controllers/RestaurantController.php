<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    // Toon alle restaurants
    public function index() {
        $alle_restaurants = Restaurant::all();
        return view('restaurants.overzicht', ['lijst' => $alle_restaurants]);
    }

    // Toon het formulier om een restaurant toe te voegen
    public function create() {
        return view('restaurants.toevoegen');
    }
    public function store(Request $request)
    {
        // 1. Sla de gegevens op in de database
        \App\Models\Restaurant::create([
            'naam'   => $request->naam,
            'keuken' => $request->keuken,
            'adres'  => $request->adres,
        ]);

        // 2. Ga terug naar het overzicht
        return redirect('/restaurants');
    }
    // 1. Het formulier tonen met de oude data
    public function edit($id) {
        $restaurant = \App\Models\Restaurant::findOrFail($id);
        return view('restaurants.bewerken', ['restaurant' => $restaurant]);
    }

// 2. De gewijzigde data opslaan
    public function update(Request $request, $id) {
        $restaurant = \App\Models\Restaurant::findOrFail($id);

        $restaurant->update([
            'naam'   => $request->naam,
            'keuken' => $request->keuken,
            'adres'  => $request->adres,
        ]);

        return redirect('/restaurants');
    }
    public function destroy($id) {
        $restaurant = \App\Models\Restaurant::findOrFail($id);
        $restaurant->delete();

        return redirect('/restaurants');
    }
}
