<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Thuisbezorgd - Overzicht</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

<h1>Onze Restaurants</h1>
<p>Hieronder zie je de restaurants die al zijn aangemeld.</p>

<a href="/restaurants/nieuw" style="background: orange; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">
    + Nieuw Restaurant Toevoegen
</a>

<br><br>

<table>
    <thead>
    <tr>
        <th>Naam</th>
        <th>Keuken</th>
        <th>Adres</th>
        <th>Aangemeld op</th>
        <th>aanpassen</th>
        <th>Verwijderen</th>
    </tr>
    </thead>
    <tbody>
    @forelse($lijst as $r)
        <tr>
            <td>{{ $r->naam }}</td>
            <td>{{ $r->keuken }}</td>
            <td>{{ $r->adres }}</td>
            <td>{{ $r->created_at ? $r->created_at->format('d-m-Y') : 'Onbekend' }}</td>
            <td>
                <a href="/restaurants/{{ $r->id }}/bewerken">Aanpassen</a>
            </td>
            <td>
                <form action="/restaurants/{{ $r->id }}/verwijderen" method="POST" onsubmit="return confirm('Weet je zeker dat je {{ $r->naam }} wilt verwijderen?')">
                    @csrf
                    <button type="submit" style="color: red; background: none; border: none; cursor: pointer; text-decoration: underline;">
                        Verwijderen
                    </button>
                </form>
            </td></tr>
    @empty
        <tr>
            <td colspan="4">Er zijn nog geen restaurants gevonden. Voeg er snel eentje toe!</td>
        </tr>
    @endforelse
    </tbody>
</table>

</body>
</html>
