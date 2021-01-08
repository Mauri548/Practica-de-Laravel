@extends('layout')

@section('content')
    <h1>Pagos</h1>
    {{-- <a href="{{ route('cliente.create') }}">Agregar Cliente</a> --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID Cliente</th>
                {{-- <th scope="col">Nombre</th> --}}
                <th scope="col">valor</th>
                <th scope="col">descripcion</th>  
                <th scope="col">Creado</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @if ($pagos)
                @foreach ($pagos as $pagoItem)
                    <tr>
                        <th scope="row">{{$pagoItem->id}}</th>
                        <td>{{$pagoItem->cliente_id}}</td>
                        {{-- <td>{{$pagoItem->cliente->name}}</td> --}}
                        <td>{{$pagoItem->valor}}</td>
                        <td>{{$pagoItem->description}}</td>
                        <td>{{$pagoItem->created_at}}</td>
                        <td>
                            <a href="{{ route('pago.edit', $pagoItem) }}">Editar</a>
                            <form method="POST" action="{{ route('pago.destroy', $pagoItem) }}">
                                @csrf @method('DELETE')
                                <button class="btn-link">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <li>No hay pagos para mostrar</li>
            @endif
        </tbody>
    </table>

@endsection