@extends('layout')

@section('content')
    
    <h1>Crear Nuevo Cliente</h1>
    <form method="POST" action="{{ route('cliente.store') }}">
        @csrf
        <label for="name">Nombre*:</label>
        <input type="text" name="name" value="{{old('name')}}"> {!! $errors->first('name', '<small>:message</small>') !!} <br>
        <br>
        <label for="lastname">Apellido*:</label>
        <input type="text" name="lastname" value="{{old('lastname')}}"> {!! $errors->first('lastname', '<small>:message</small>') !!} <br>
        <br>
        <label for="document">Documento*:</label>
        <input type="text" name="document" value="{{old('document')}}"> {!! $errors->first('document', '<small>:message</small>') !!} <br>
        <br>
        <label for="email">Email*:</label>
        <input type="text" name="email" value="{{old('email')}}"> {!! $errors->first('email', '<small>:message</small>') !!} <br>
        <br>
        <label for="phone">Telefono:</label>
        <input type="text" name="phone" value="{{old('phone')}}"> <br>
        <button>Guardar</button>
    </form>

@endsection