<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>HZ HBO-ICT</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
{{-- Navigation bar --}}
<nav class="navbar is-primary  has-text-white" >
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <strong><i class="fas fa-graduation-cap"></i> HZ</strong>
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="{{ route('home') }}"
                   class="navbar-item">
                    Home
                </a>
                <a href="{{ route('articles.index') }}"
                   class="navbar-item">
                    News
                </a>
                <a href="{{ route('bars.index') }}"
                   class="navbar-item">
                    Bars
                </a>
            </div>
        </div>
    </div>
</nav>
<div>
    <div class="content">
        <h1 class ="is-size-1 has-text-weight-bold has-text-centered has-text-primary mt-6">
            404
        </h1>
    </div>
    <h2 class =" is-size-4 has-text-weight-bold has-text-centered">pagina niet gevonden!</h2>
    <p class ="has-text-centered">De pagina waar u naar zoekt bestaat niet, is verwijderd of is van naam veranderd.</p>
    <p class ="has-text-centered"> Dit is een verandering of fout aan onze kant.</p>
    <p class ="has-text-centered"> Als u denkt dat dit niet hoord en de pagina berijkbaar moet zijn laat ons dat dan alstublieft weten.</p>
    <div class="box has-text-centered">
        <a role="button" class ="button has-background-primary has-text-white" href="javascript:history.go(-1)"> terug naar de vorige pagina</a>
    </div>
    <p class="has-text-centered">contact us: voorbeeldemail@gmail.com</p>
</div>
{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="columns is-multiline">

            <div class="column has-text-centered">
                <div>
                    <a href="/" class="link">Home</a>
                </div>
            </div>

            <div class="column has-text-centered">
                <div>
                    <a href="https://opensource.org/licenses/MIT" class="link">
                        <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                    </a>
                </div>
            </div>

        </div>

        <div class="content is-small has-text-centered">
            <p class="">Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> | adapted by <a href="https://github.com/dwaard">BugSlayer</a></p>
            <p>PROJECT FOOTER HERE</p>
        </div>
    </div>
</footer>

</body>
</html>

