<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pokemon Finder</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <div>
            <h1>Pokemon Finder</h1>
            <form action="{{ route('pokemonapi.index') }}" method="GET">
                @csrf <!-- Agrega el token CSRF para proteger el formulario -->
                <input type="text" name="pokemon_name" placeholder="Busca tu Pokémon">
                <input type="submit" value="Buscar">
            </form>
            @if(!empty($datos))
                @foreach($datos as $data)
                    <h1> {{ $data['name'] }} </h1>
                    <img src="{{ $data['img'] }}" alt="{{$data['name']}}">
                    @endforeach
            @endif
        </div>
    </body>
</html>
