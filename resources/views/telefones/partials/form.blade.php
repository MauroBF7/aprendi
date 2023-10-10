<!-- #### partials/form.blade.php #### -->
Telefone: <input type="text" name="telefone" value="{{$telefone->telefone}}">
Responsavel: <input type="text" name="responsa" value="{{$telefone->responsa}}">
Local: <input type="text" name="local" value="{{$telefone->local }}">
Divisão: <input type="text" name="divisa" value="{{$telefone->divisa}}">
Seção: <input type="text" name="secao" value="{{$telefone->secao}}"><BR>
<center><button type="submit">Enviar</button></center>

@section('javascript_bottom')
@parent<script type="text/javascript" src="{{ asset('js/telefone.js') }}"></script>
@endsection