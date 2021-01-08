<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateClienteRequest;
use Illuminate\Http\Request;
use App\Models\Cliente;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource. Listar recursos
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //guarda los datos de la tabla en la variable $clientes para mostrar.
        $clientes = Cliente::get();

        return view('clientes.cliente', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource. Formulario para Crear Recursos
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.crear');
    }

    /**
     * Store a newly created resource in storage. Guarda el recurso en la base de datos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClienteRequest $request)
    {

        // if ($request->get('phone') == '') {
        //     $phone = 'sin telefono';
        // } else {
        //     $phone = $request->get('phone');
        // }

        Cliente::create($request->validated());

        return redirect()->route('cliente.index');


    }

    /**
     * Display the specified resource. Muestra un item especifico
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('clientes.detalle', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource. Edita un recurso
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('clientes.editar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage. Guarda los cambios del formulario en el Edit
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateClienteRequest $request,Cliente $cliente)
    {

        $cliente->update($request->validated());
        return redirect()->route('cliente.detalle', $cliente);
    }

    /**
     * Remove the specified resource from storage. Elimina un elemento
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('cliente.index');
    }
}
