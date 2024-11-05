<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    // Método index para mostrar la lista de pokemons
    public function index() {
        return view('pokemon.index',
            [
                'lipokemon' => 'active',
                'pokemons' => Pokemon::orderBy('id', 'asc')->get()
            ]);
    }

    // Método create para mostrar el formulario de creación de pokemons
    public function create() {
        return view('pokemon.create', ['lipokemon' => 'active']);
    }

    // Método store para guardar un nuevo pokemon
    public function store(Request $request) {
        $pokemon = new Pokemon($request->all());
    try {
        $pokemon->save();
        return redirect('pokemon')->with(['message' => 'The pokemon has been added.']);
    } catch (\Exception $e) {
        return back()->withInput()->withErrors(['message' => 'The pokemon has not been added. Error: ' . $e->getMessage()]);
    }
    }

    // Método show para mostrar un pokemon
    public function show($id) {
        $pokemon = Pokemon::find($id);
        if ($pokemon == null) {
            abort(404);
        }
        return view('pokemon.show',
            [
                'lipokemon' => 'active',
                'pokemon' => $pokemon
            ]);
    }

    // Método edit para mostrar el formulario de edición de pokemons
    public function edit(Pokemon $pokemon) {
        return view('pokemon.edit',
            [
                'lipokemon' => 'active',
                'pokemon' => $pokemon
            ]);
    }

    // Método update para actualizar un pokemon
    public function update(Request $request, Pokemon $pokemon) {
        $validated = $request->validate([
            'name' => 'required|max:100|min:2',
            'weight' => 'required|numeric|gte:0|lte:99999.99',
            'height' => 'required|numeric|gte:0|lte:99999.99',
            'type' => 'required|in:normal,fire,water,grass,electric,ice,fighting,poison,ground,flying,psychic,bug,rock,ghost,dragon,dark,steel,fairy',
            'evolution' => 'required|integer|gte:1|lte:5'
        ]);
        try {
            $pokemon->update($request->all());
            return redirect('pokemon')->with(['message' => 'The pokemon has been updated.']);
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['message' => 'The pokemon has not been updated.']);
        }
    }

    // Método destroy para eliminar un pokemon
    public function destroy(Pokemon $pokemon) {
        try {
            $pokemon->delete();
            return redirect('pokemon')->with(['message' => 'The pokemon has been deleted.']);
        } catch (\Exception $e) {
            return back()->withErrors(['message' => 'The pokemon has not been deleted.']);
        }
    }
}
