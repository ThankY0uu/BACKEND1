@extends('layouts.app')

@section('inhoud')
    <h1>Ons Menu</h1>

    @forelse($gerechten as $gerecht)
        <div class="gerecht">
            <div>
                <h3>{{ $gerecht->naam }}</h3>
                <p class="omschrijving">{{ $gerecht->omschrijving }}</p>
            </div>
            <p class="prijs">€ {{ number_format($gerecht->prijs, 2, ',', '.') }}</p>
        </div>
    @empty
        <p>Er staan nog geen gerechten op het menu.</p>
    @endforelse
@endsection
