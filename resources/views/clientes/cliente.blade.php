@extends('layout')

@section('content')
    <h1>Cliente</h1>
    <a href="{{ route('cliente.create') }}">Agregar Cliente</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                {{-- <th scope="col">Creado</th> --}}
                <th scope="col">Nombre</th>
                <th scope="col">Documento</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Cantidad Pago</th>
                <th scope="col">Total</th>  
                <th scope="col">Acciones</th>  
            </tr>
        </thead>
        <tbody>
            @if ($clientes)
                @foreach ($clientes as $clienteItem)
                    <tr>
                        <th scope="row">{{$clienteItem->id}}</th>
                        {{-- <td>{{$clienteItem->created_at}}</td> --}}
                        <td>{{$clienteItem->name}} {{$clienteItem->lastname}}</td>
                        <td>{{$clienteItem->document}}</td>
                        <td>{{$clienteItem->email}}</td>
                        <td>{{$clienteItem->phone}}</td>
                        <td>{{$clienteItem->cont_pago}}</td>
                        <td>{{$clienteItem->total_pago}}</td>
                        <td><a href="{{ route('cliente.show', $clienteItem)}}">Ver</a></td>
                    </tr>
                @endforeach
            @else
                <li>No hay clientes para mostrar</li>
            @endif
        </tbody>
    </table>

@endsection