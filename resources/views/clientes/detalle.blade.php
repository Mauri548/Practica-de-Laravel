@extends('layout')

@section('content')
    <div class="container" >
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <table>
                    <tr>
                        <th><a href="{{ route('cliente.edit', $cliente)}} ">Editar</a></th>
                        <form method="POST" action="{{ route('cliente.destroy', $cliente) }}">
                            @csrf @method('DELETE')
                            <button>Eliminar</button>
                        </form>
                        <th><a href=" {{ route('pago.create', $cliente) }}">Agregar Pago</a></th>
                    </tr>
                    <tr>
                        <th>Nombre y Apellido:</th>
                        <td>{{$cliente->name}} {{$cliente->lastname}}</td>
                    </tr>
                    <tr>
                        <th>Documento:</th>
                        <td>{{$cliente->document}}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{$cliente->email}}</td>
                    </tr>
                    <tr>
                        <th>Telefono:</th>
                        <td>{{$cliente->phone}}</td>
                    </tr>
                    <tr>
                        <th>Cantidad de Pago:</th>
                        <td>{{$cliente->cont_pago}}</td>
                    </tr>
                    <tr>
                        <th>Total Pagado:</th>
                        <td>{{$cliente->total_pago}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    


@endsection
