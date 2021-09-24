<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class ActionController extends Controller
{
    public function newCharacter(Request $request)
    {
        $character = new Character;
        $character->name = $request->name;
        $character->creation = $request->creation;
        $character->bdName = $request->bdName;
        $character->drawer_id = $request->drawer_id;
        $character->save();
        return redirect('/newCharacter');
    }
    public function updateCharacter(Request $request)
    {
        $character = Character::findOrFail($request->id);
        $character->name = $request->name;
        $character->creation = $request->creation;
        $character->bdName = $request->bdName;
        $character->drawer_id = $request->drawer_id;
        $character->save();
        return redirect('/Les_Personnages');
    }

    public function delete(Request $request)
    {
        $character = Character::find($request->id);
        return redirect('/Les_Personnages');
    }
}
