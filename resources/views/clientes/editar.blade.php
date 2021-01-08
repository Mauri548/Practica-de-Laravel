@extends('layout')

@section('content')
    
    <h1>Editar Cliente</h1>
    <form method="POST" action="{{ route('cliente.update', $cliente) }}">
        @csrf @method("PATCH")
        <label for="name">Nombre*:</label>
        <input type="text" name="name" value="{{ old('name', $cliente->name ) }}"> {!! $errors->first('name', '<small>:message</small>') !!} <br>
        <br>
        <label for="lastname">Apellido*:</label>
        <input type="text" name="lastname" value="{{ old('lastname' ,$cliente->lastname) }}"> {!! $errors->first('lastname', '<small>:message</small>') !!} <br>
        <br>
        <label for="document">Documento*:</label>
        <input type="text" name="document" value="{{ old('document' ,$cliente->document) }}"> {!! $errors->first('document', '<small>:message</small>') !!} <br>
        <br>
        <label for="email">Email*:</label>
        <input type="text" name="email" value="{{ old('email' ,$cliente->email) }}"> {!! $errors->first('email', '<small>:message</small>') !!} <br>
        <br>
        <label for="phone">Telefono:</label>
        <input type="text" name="phone" value="{{ old('phone' ,$cliente->phone) }}"> <br>
        <button>Actualizar</button>
    </form>

@endsection