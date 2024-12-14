@extends('layouts.app')
@section('title', 'Usuário {{$user->name}}' )


@section('content')
  <h1>Mostrar Usuário: {{$user->name }}</h1>

    {{ dd($user )}}
@endsection