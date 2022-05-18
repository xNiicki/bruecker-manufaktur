<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brücker Manufraktur</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="assets/shortcut_icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>


<body class="bg-green">

<nav class="container">
    <div class="row">
        <div class="col-12 bg-green">
            <header
                class="d-flex flex-wrap align-items-center  justify-content-center justify-content-md-between border-bottom ">
                <ul class="nav col-12 col-md-auto justify-content-center mb-md-0 fg-white ">
                    <li><a class="nav-link px-2 link-dark" href="/">Home</a></li>
                    <li><a class="nav-link px-2 link-dark" href="/team">Team</a></li>
                    <li><a class="nav-link px-2 link-dark" href="/speisekarte">Speisekarte</a></li>
                    <li><a class="nav-link px-2 link-dark" href="/kontakt">Kontakt</a></li>
                    <li><a class="nav-link px-2 link-dark" href="/bilder">Bildergalerie</a></li>
                </ul>
            </header>
        </div>
    </div>
</nav>

<main class="container">

    <div class="row">
        <div class="col-12">
            <img class="w-100" src="assets/Header.png" border="0">
        </div>
    </div>


    <div class="row">
        <div class="col-12 bg-beige">

            {{ $slot  }}

        </div>
    </div>
</main>

<x-footer>

</x-footer>

<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
