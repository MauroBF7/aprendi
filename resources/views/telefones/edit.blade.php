@extends('layouts.app')
@extends('main')

@section('content')
<form method="post" action="/telefones/{{ $telefone->id }}">
    @csrf
    @method('patch')
    @include('telefones.partials.fields')
</form>
@endsection