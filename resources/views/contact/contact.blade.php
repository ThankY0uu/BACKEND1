@extends('layouts.app')

@section('inhoud')
    <h1>Contact</h1>

    @if(session('succes'))
        <p class="succesmelding">{{ session('succes') }}</p>
    @endif

    <form action="/contact" method="POST">
        @csrf
        <div>
            <label>Naam:</label><br>
            <input type="text" name="naam" required>
        </div>
        <br>
        <div>
            <label>Email:</label><br>
            <input type="email" name="email" required>
        </div>
        <br>
        <div>
            <label>Bericht:</label><br>
            <textarea name="bericht" rows="5" required></textarea>
        </div>
        <br>
        <button type="submit">Versturen</button>
    </form>
@endsection
