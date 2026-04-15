@extends('layouts.app')

@section('inhoud')
    <h1>Admin Dashboard</h1>

    <div class="dashboard">
        <div class="dashboard-kaart">
            <h2>Menu</h2>
            <p>Gerechten toevoegen, aanpassen en verwijderen.</p>
            <a href="/gerechten">Beheer Menu</a>
        </div>
        <div class="dashboard-kaart">
            <h2>Berichten</h2>
            <p>Bekijk alle berichten van klanten.</p>
            <a href="/admin/berichten">Bekijk Berichten</a>
        </div>
    </div>
@endsection
