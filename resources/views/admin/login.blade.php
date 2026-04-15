<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Inloggen</title>
</head>
<body>

<h1>Inloggen</h1>

@if(session('fout'))
    <p style="color: red;">{{ session('fout') }}</p>
@endif

<form action="/login" method="POST">
    @csrf
    <div>
        <label>Email:</label><br>
        <input type="email" name="email" required>
    </div>
    <br>
    <div>
        <label>Wachtwoord:</label><br>
        <input type="password" name="password" required>
    </div>
    <br>
    <button type="submit">Inloggen</button>
</form>

</body>
</html>
