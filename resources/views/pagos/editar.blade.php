@extends('layout')

@section('content')
    
    <h1>Editar Pago</h1>
    <form method="POST" action="{{ route('pago.update', $pago) }}">
        @csrf @method("PATCH")
        <label for="cliente_id">Cliente: {{$pago->cliente_id}}</label>
        <br>
        <label for="valor">Valor*:</label>
        <input type="number" name="valor" value="{{ old('valor', $pago->valor ) }}"> {!! $errors->first('valor', '<small>:message</small>') !!} <br>
        <br>
        <label for="description">Descripcion*:</label>
        <input type="text" name="description" value="{{ old('description' ,$pago->description) }}"> {!! $errors->first('description', '<small>:message</small>') !!} <br>
        <br>
        <button>Actualizar</button>
    </form>

@endsection