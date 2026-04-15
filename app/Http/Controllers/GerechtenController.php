<?php


namespace App\Http\Controllers;

use App\Models\Gerecht;  // <-- deze regel is belangrijk!
use Illuminate\Http\Request;
class GerechtenController extends Controller
{
    // Toon alle gerechten
    public function index()
    {
        $gerechten = \App\Models\Gerecht::all();
        return view('admin.crud.overzicht', ['gerechten' => $gerechten]);
    }

    // Toon het formulier om een gerecht toe te voegen
    public function create()
    {
        return view('admin.crud.toevoegen');
    }

    // Sla het nieuwe gerecht op
    public function store(Request $request)
    {
        Gerecht::create([
            'naam'        => $request->naam,
            'omschrijving' => $request->omschrijving,
            'prijs'       => $request->prijs,
        ]);

        return redirect('/gerechten');
    }

    // Toon het formulier om een gerecht te bewerken
    public function edit($id)
    {
        $gerecht = Gerecht::findOrFail($id);
        return view('admin.crud.bewerken', ['gerecht' => $gerecht]);
    }

    // Sla de wijzigingen op
    public function update(Request $request, $id)
    {
        $gerecht = Gerecht::findOrFail($id);

        $gerecht->update([
            'naam'        => $request->naam,
            'omschrijving' => $request->omschrijving,
            'prijs'       => $request->prijs,
        ]);

        return redirect('/gerechten');
    }

    // Verwijder een gerecht
    public function destroy($id)
    {
        $gerecht = Gerecht::findOrFail($id);
        $gerecht->delete();

        return redirect('/gerechten');
    }
}
