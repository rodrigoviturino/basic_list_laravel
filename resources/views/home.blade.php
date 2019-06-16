<h1>Lista de Tarefas</h1>

Todos os itens:

@if(count($lista) > 0 )
    <ul>
        @foreach ($lista as $item)
            <li>{{ $item->item }} - <a href="delete/{{ $item->id }}">X</a></li>   
        @endforeach
    </ul>
@else
    <h4>Não há Itens!</h4>
@endif

<hr>

<form method="POST">
    {{ csrf_field() }} <!-- método para evitar ataques -->
    <input type="text" name="item">
    <input type="submit" value="+">
</form>