<!--@extends('laravel-usp-theme::master')-->


@section('javascript_head')
    <script type="text/javascript" src="{{ asset('js/telefone.js') }}"></script>
@endsection
@section('flash')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection

