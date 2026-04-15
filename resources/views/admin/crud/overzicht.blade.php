@extends('layouts.app')

@section('inhoud')
    <h1>Menukaart</h1>

    <a href="/gerechten/toevoegen" class="knop">+ Nieuw Gerecht Toevoegen</a>

    <br><br>

    <table>
        <thead>
        <tr>
            <th>Naam</th>
            <th>Omschrijving</th>
            <th>Prijs</th>
            <th>Aanpassen</th>
            <th>Verwijderen</th>
        </tr>
        </thead>
        <tbody>
        @forelse($gerechten as $gerecht)
            <tr>
                <td>{{ $gerecht->naam }}</td>
                <td>{{ $gerecht->omschrijving }}</td>
                <td>€ {{ number_format($gerecht->prijs, 2, ',', '.') }}</td>
                <td>
                    <a href="/gerechten/{{ $gerecht->id }}/bewerken">Aanpassen</a>
                </td>
                <td>
                    <form action="/gerechten/{{ $gerecht->id }}/verwijderen" method="POST" onsubmit="return confirm('Weet je zeker dat je {{ $gerecht->naam }} wilt verwijderen?')">
                        @csrf
                        <button type="submit" class="verwijder-knop">Verwijderen</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Nog geen gerechten gevonden. Voeg er eentje toe!</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
