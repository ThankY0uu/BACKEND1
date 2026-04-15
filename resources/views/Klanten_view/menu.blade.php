<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Ons Menu</title>

</head>
<body>

<h1>Ons Menu</h1>

<a href="/">Terug naar home</a>

<br><br>

@forelse($gerechten as $gerecht)
    <div class="gerecht">
        <h3>{{ $gerecht->naam }}</h3>
        <p class="omschrijving">{{ $gerecht->omschrijving }}</p>
        <p class="prijs">€ {{ number_format($gerecht->prijs, 2, ',', '.') }}</p>
    </div>
@empty
    <p>Er staan nog geen gerechten op het menu.</p>
@endforelse

</body>
</html>
