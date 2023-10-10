<!-- ### partials/fields.blade.php #### -->
<ul>
    <li><a href="/telefones/{{$telefone->id}}">{{$telefone->telefone}}</a></li>
    <li>{{$telefone->responsa}}</li>
    <li>{{$telefone->local}}</li>
    <li>{{$telefone->divisa}}</li>
    <li>{{$telefone->secao}}</li>
    <li>
    <form action="/telefones/{{$telefone->id}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza');">Apagar</button>
    </form>
    </li>
</ul>
