<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonApiController extends Controller
{
    static $url = "https://pokeapi.co/api/v2/pokemon/";   


    public function index(Request $request)
    {
        $searchName = $request->input('pokemon_name');
        $response = Http::get(self::$url . '?limit=2000&offset=0');
        $data = $response->json();
        $datos_pokemon = [];
        foreach ($data['results'] as $pokemons){
            if(strstr($pokemons['name'], $searchName)){
                // array_push($all,  ['nombre' => $pokemons['name']]);
                $new_response = Http::get($pokemons['url']);
                $new_data = $new_response->json();
                array_push($datos_pokemon, [
                    'name' => $new_data['name'],
                    'img' => $new_data['sprites']['front_default']
                ]);
            }
        }
        echo '<pre>';
        print_r($datos_pokemon);
        return view('welcome', ['datos' => $datos_pokemon]);
    }
}
