<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\character;
use App\Models\drawer;


class NavController extends Controller
{

    public function welcome()
    {
        return view('home');
    }

    public function characters()
    {
        $characters = Character::all();
        return view('characters', ['characters' => $characters]);
    }

    public function newCharacter()
    {
        return view('newCharacter');
    }

    public function update(Request $request)
    {
        $character = Character::findOrFail($request->id);
        $drawers = Drawer::all()->sortBy('name');
        return view('update', [
            'book' => $character,
            'drawers' => $drawers,
        ]);
    }
}
