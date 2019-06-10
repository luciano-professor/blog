@extends('principal')

@section('conteudo-principal')

<h2>Adicionar Post</h2>
<hr />

<form method="post" action="{{url('/posts/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input value="{{old('titulo')}}" id="titulo" class="form-control" name="titulo" type="text">

        @error('titulo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="form-group">
        <label for="texto">Texto</label>
        <textarea id="texto" class="form-control" rows="3" name="texto">{{old('texto')}}</textarea>

        @error('texto')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
