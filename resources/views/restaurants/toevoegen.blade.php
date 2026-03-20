<h1>Nieuw Restaurant Toevoegen</h1>

<form action="/restaurants" method="POST">
    @csrf <div>
        <label>Naam:</label><br>
        <input type="text" name="naam" required>
    </div>

    <div>
        <label>Keuken:</label><br>
        <input type="text" name="keuken" required>
    </div>

    <div>
        <label>Adres:</label><br>
        <input type="text" name="adres" required>
    </div>

    <br>
    <button type="submit">Opslaan</button>
</form>

<br>
<a href="/restaurants">Terug naar overzicht</a>
