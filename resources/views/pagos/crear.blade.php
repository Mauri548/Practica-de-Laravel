@extends('layout')

@section('content')
    
    <h1>Crear Nuevo Pago</h1>
    <form method="POST" action="{{ route('pago.store', $cliente) }}">
        @csrf
        <label for="cliente_id">Cliente: {{$cliente->id}}</label> <br>
        <label for="lastname">valor*:</label>
        <input type="number" name="valor"> {!! $errors->first('valor', '<small>:message</small>') !!}
        <br>
        <label for="document">Descripcion:</label>
        <input type="text" name="description"> {!! $errors->first('document', '<small>:message</small>') !!} <br>
        <br>
        
        <button>Guardar</button>
    </form>

@endsection