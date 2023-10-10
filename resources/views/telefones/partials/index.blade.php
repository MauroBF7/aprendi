<!-- #### index.blade.php ### -->
@extends('main')
@section('content')
@foreelse($telefones as $telefone)
    @include('telefones.partials.fields')
    @empty
@endforelse
@endsection 
