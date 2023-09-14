<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pokemon Finder</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

    </head>
    <body class="antialiased">
        <div class="container">
            <h1 class="title">Pokemon Finder</h1>
            <form action="{{ route('pokemonapi.index') }}" method="GET" class="search-form">
                @csrf <!-- Agrega el token CSRF para proteger el formulario -->
                <input type="text" name="pokemon_name" placeholder="Busca tu Pokémon" class="input_text">
                <button class="search-btn btn">Buscar</button>
            </form>
            @if(!empty($datos))
                <div class="pokemons">
                    @foreach($datos as $data)
                    <section class="item">
                        <h1>{{ $data['name'] }}</h1>
                        <img src="{{ $data['img'] }}" alt="{{ $data['name'] }}" class="img">
                    </section>
                    @endforeach
                </div>
            @endif
        </div>
    </body>
</html>
