@extends('layouts.app')

@section('inhoud')
    <h1>Nieuw Gerecht Toevoegen</h1>

    <form action="/gerechten" method="POST">
        @csrf
        <div>
            <label>Naam:</label><br>
            <input type="text" name="naam" required>
        </div>
        <br>
        <div>
            <label>Omschrijving:</label><br>
            <textarea name="omschrijving" required></textarea>
        </div>
        <br>
        <div>
            <label>Prijs:</label><br>
            <input type="number" name="prijs" step="0.01" required>
        </div>
        <br>
        <button type="submit" class="knop">Opslaan</button>
    </form>

    <br>
    <a href="/gerechten">Terug naar overzicht</a>
@endsection
