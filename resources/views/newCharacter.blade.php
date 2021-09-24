@extends('layouts.base')

@section('Les bandes dessinées', 'Ajouter un nouveau personnage')
@section('css', 'newCharacter')


@section('content')
<h1>Ajouter votre personnage</h1>

<div class="form">
    <form action="./newCharacter" method="post">
    @csrf
            <label for="name">Nom du personnage : </label><br>
            <input type="text" id="name" name="name" value=""><br>
            <label for="creation">Année de création : </label><br>
            <input type="number" id="creation" name="creation" value=""><br>
            <label for="bdName">Nom de sa BD : </label><br>
            <input type="text" id="bdName" name="bdName" value=""><br>
            <label for="drawer">Son déssinateur : </label><br>
            <input type="text" id="drawer_id" name="drawer_id" value=""><br>
            <input class="bouton"type="submit" value="Ajouter">        </form>
</div>
@endsection

