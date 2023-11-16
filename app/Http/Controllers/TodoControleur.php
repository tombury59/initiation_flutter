<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoControleur extends Controller
{
    public function listTodo(Request $request){
        // Retourne à l'utilisateur le template nommés « monLayout » avec dedans une variable nommé `$todos` qui contiendra l'ensemble des éléments dans la table
        // Votre template devra utiliser cette variable avec par exemple un @foreach($todos as $todo) … @endforeach
        return view("todo", ["todos" => Todo::all()]);
    }
}
