@extends('laravel-usp-theme::master')
@section('content')
@forelse ($telefones as $telefone)
    <li>{{ $telefone->id }}</li>
    <li>{{ $telefone->telefone }}</li>
    <li>{{ $telefone->responsa }}</li>
    <li>{{ $telefone->local }}</li>
    <li>{{ $telefone->divisa }}</li>
    <li>{{ $telefone->secao }}</li>
    <li><HR><BR></li>
@empty
    Não há telefones cadastrados para mostrar!
@endforelse 
@endsection