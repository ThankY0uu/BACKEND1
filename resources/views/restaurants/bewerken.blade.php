<h1>Restaurant Bewerken</h1>

<form action="/restaurants/{{ $restaurant->id }}/update" method="POST">
    @csrf
    <div>
        <label>Naam:</label><br>
        <input type="text" name="naam" value="{{ $restaurant->naam }}">
    </div>
    <div>
        <label>Keuken:</label><br>
        <input type="text" name="keuken" value="{{ $restaurant->keuken }}">
    </div>
    <div>
        <label>Adres:</label><br>
        <input type="text" name="adres" value="{{ $restaurant->adres }}">
    </div>
    <br>
    <button type="submit">Wijzigingen Opslaan</button>
</form>
