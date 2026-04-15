<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Menukaart</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

<h1>Menukaart</h1>

<a href="/gerechten/toevoegen" style="background: orange; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">
    + Nieuw Gerecht Toevoegen
</a>

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
                    <button type="submit" style="color: red; background: none; border: none; cursor: pointer; text-decoration: underline;">
                        Verwijderen
                    </button>
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

</body>
</html>
