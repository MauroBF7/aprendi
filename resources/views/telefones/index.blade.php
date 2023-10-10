<!--@extends('laravel-usp-theme::master')-->
@extends('main')
@section('content')
    @forelse ($telefones as $telefone)
        @include('telefones.partials.fields')
    @empty
        Não há telefones cadastrados para mostrar!
    @endforelse 
@endsection