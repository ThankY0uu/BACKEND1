@extends('layouts.app')

@section('inhoud')
    <h1>Gerecht Bewerken</h1>

    <form action="/gerechten/{{ $gerecht->id }}/update" method="POST">
        @csrf
        <div>
            <label>Naam:</label><br>
            <input type="text" name="naam" value="{{ $gerecht->naam }}" required>
        </div>
        <br>
        <div>
            <label>Omschrijving:</label><br>
            <textarea name="omschrijving" required>{{ $gerecht->omschrijving }}</textarea>
        </div>
        <br>
        <div>
            <label>Prijs:</label><br>
            <input type="number" name="prijs" step="0.01" value="{{ $gerecht->prijs }}" required>
        </div>
        <br>
        <button type="submit" class="knop">Wijzigingen Opslaan</button>
    </form>

    <br>
    <a href="/gerechten">Terug naar overzicht</a>
@endsection
