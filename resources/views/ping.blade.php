@extends('layouts.base')

@section('title', 'Bienvenue')

@section('content')
    <div class="title m-b-md">
        <a href="/{{$pingpong}}">{{$pingpong}}</a>
    </div>

@endsection
