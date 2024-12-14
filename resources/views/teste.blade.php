@extends('layouts.app')
@section('title')

@section('content')
@php $nome = 'rodrigo'; @endphp
    @if ($nome == 'rodrigo')

        <p>Bom dia {{$nome }}, tudo bem?</p>
    @elseif ($nome == 'hugo')
        <p>Boa tarde {{$nome }}, tudo bem?</p>
    @else
        <p>Bem vindo {{$nome }}, tudo bem?</p>
        
    @endif
@endsection
