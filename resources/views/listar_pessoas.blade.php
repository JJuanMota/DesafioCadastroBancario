@extends('components.app')
@section('content')
<br><br>
<table>
    <tr>
        <th>Nome: </th>
        <th>CPF: </th>
        <th>Endereço: </th>
        <th>Editar: </th>
        <th>Remover: </th>

    </tr>
    @foreach($pessoas as $pessoa)
        <tr>
            <td>{{$pessoa->nome}}</td>
            <td>{{$pessoa->cpf}}</td>
            <td>{{$pessoa->endereco}}</td>
        </tr>
    @endforeach
</table>
@endsection
