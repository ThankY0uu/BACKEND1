<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Berichten</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

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

</body>
</html>
