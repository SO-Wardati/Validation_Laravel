@extends('layouts.base')

@section('Les personnages', 'Mettre à jour')
@section('css', 'update')

@section('content')
<h1>Modifier les informations du personnage</h1>
<div class="form">
    <form action="/updateCharacter" method="post">
    @csrf

        <input type="hidden" name="id" value={{$character->id}}>
        <label for="name">Nom : </label><br>
        <input type="text" id="name" name="name" value="{{$character->name}}"><br>
        <label for="creation">Année de création : </label><br>
        <input type="number" id="creation" name="creation" value="{{$character->creation}}"><br>
        <label for="bdName">Nom de la BD : </label><br>
        <input type="text" id="bdName" name="publication" value="{{$character->bdName}}"><br>
        <label for="drawer">Déssinateur : </label><br>
        <div>
            <select name="drawer_id">
                @foreach ($drawers as $drawer)
                    <option value="{{ $drawer->id }}">{{ $drawer->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="bouton" type="submit" value ="Modifier"></button>

        </form>
</div>
@endsection
