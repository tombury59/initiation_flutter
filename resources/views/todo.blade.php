@extends('layouts.base')

@section('title', 'Controlleur de Todo')

@section('content')
    <div class="title m-b-md">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Texte</th>
                <th>Créé le</th>
                <th>Modifié le</th>
                <th>Terminé</th>
            </tr>
            </thead>
            <tbody>
            @forelse($todos as $todo)
                <tr>
                    <td>{{$todo->id}}</td>
                    <td>{{$todo->texte}}</td>
                    <td>{{$todo->created_at}}</td>
                    <td>{{$todo->updated_at}}</td>
                    <td>{{$todo->termine}}</td>
                </tr>

            @empty
                <tr>
                    <td colspan="5">Aucune data</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
