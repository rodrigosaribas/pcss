@extends('layouts.app')
@section('title', 'teste controller')

@section('content')

{{$greeting}}
@foreach ( $users as $user )
    <div>{{ $user->id .' => '.  $user->name}} </div>
@endforeach
<p>index</p>
{{ dd($users )}}
@endsection 
