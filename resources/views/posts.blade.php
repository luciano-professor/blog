
@extends('principal')

@section('conteudo-principal')
{{-- Vai pegar o conteudo que estiver dentro da
    section e jogar dentro do yield
--}}
<h2>Posts</h2>
<table class="table table-dark">
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Texto</th>
        <th>Data</th>
        <th>Opções</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Teste</td>
        <td>Lorem ipsum dolor sit amet consectetur.</td>
        <td>19/09/2001</td>
        <td>Editar Excluir</td>
    </tr>
</table>
@endsection
