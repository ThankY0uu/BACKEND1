@extends('layouts.app')

@section('inhoud')
    <div class="hero">
        <div class="hero-tekst">
            <h1>Selamat Datang bij Kampung Makan! 🇲🇾</h1>
            <p>Welkom bij ons authentieke Maleisische restaurant in Nijmegen.</p>
            <p>Geniet van traditionele gerechten zoals Nasi Lemak, Rendang en Satay.</p>
            <a href="/menu">Bekijk ons menu</a>
        </div>
        <div class="hero-fotos">
            <img class="slide actief" src="/img/charkt.jpg" alt="Gerecht 1">
            <img class="slide" src="/img/chendol-abc.jpg" alt="Gerecht 2">
            <img class="slide" src="/img/roti.canai.jpg" alt="Gerecht 3">
        </div>
    </div>

    <script>
        let huidig = 0;
        const slides = document.querySelectorAll('.slide');

        setInterval(() => {
            slides[huidig].classList.remove('actief');
            huidig = (huidig + 1) % slides.length;
            slides[huidig].classList.add('actief');
        }, 3000);
    </script>
@endsection
