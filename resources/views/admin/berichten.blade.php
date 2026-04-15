@extends('layouts.app')

@section('inhoud')
    <h1>Verstuurde Berichten</h1>

    <a href="/admin">Terug naar admin</a>

    <br><br>

    <table>
        <thead>
        <tr>
            <th>Naam</th>
            <th>Email</th>
            <th>Bericht</th>
            <th>Datum</th>
        </tr>
        </thead>
        <tbody>
        @forelse($berichten as $bericht)
            <tr>
                <td>{{ $bericht->naam }}</td>
                <td>{{ $bericht->email }}</td>
                <td>{{ $bericht->bericht }}</td>
                <td>{{ $bericht->created_at->format('d-m-Y') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Nog geen berichten ontvangen.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
