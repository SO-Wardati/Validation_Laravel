@extends('layouts.base')

@section('Les bandes dessinées', 'La liste des personnages')
@section('css', 'characters')

@section('content')
<h1>La liste des personnages</h1>

<div class="liste">
    <table>
        <tr>
            <th>ID</th>
            <th>Nom du personnage</th>
            <th>Année de création</th>
            <th>Nom de la BD</th>
            <th>Dessinateur</th>
            <th>Supprimer</th>
            <th>Mettre à jour</th>
        </tr>

        @foreach ($characters as $character)
            <tr>
                <td>{{$character->id}}</td>
                <td>{{$character->name}}</td>
                <td>{{$character->creation}}</td>
                <td>{{$character->bdName}}</td>
                <td>{{$character->drawer->name}}</td>
                <td>
                    <form action="/delete" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $character->id }}">
                        <button class="btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
                <td>
                    <form action="/update" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $character->id }}">
                        <button class="btn-warning" type="submit"><i class="fas fa-pen"></i></button>
                    </form>
                </td>



            </tr>
        @endforeach
    </table>
</div>

@endsection
