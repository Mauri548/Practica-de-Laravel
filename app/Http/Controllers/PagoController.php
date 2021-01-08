<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagos;
use App\Models\Cliente;
use Illuminate\Support\Facades\Log;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pagos::get();

        return view('pagos.pagoindex', compact('pagos'));
    }

    public function create($id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('pagos.crear', compact('cliente'));
    }

    public function store(Cliente $cliente)
    {

        Pagos::create([
            'cliente_id' => $cliente->id,
            'valor' => request('valor'),
            'description' => request('description'),
        ]);

        $cliente->cont_pago += 1;
        $cliente->total_pago += request('valor');
        $cliente->save(); 

        return redirect()->route('pago.index');
    }

    public function edit($id)
    {
        $pago = Pagos::findOrFail($id);

        return view('pagos.editar', compact('pago'));
    }

    public function update(Pagos $pago)
    {
        $pago->update([
            'valor' => request('valor'),
            'description' => request('description')
        ]);

        $cliente = Cliente::findOrFail($pago->cliente_id);

        // $total = Pagos::find()->where([
        //     'cliente_id' => $pago->cliente_id
        // ]);

        $total = Pagos::where('cliente_id', $pago->cliente_id)->get();

        $suma = 0;
        $cantidad = 0;
        foreach ($total as $row) {
            $suma+= $row->valor;
            $cantidad+= 1;
        }

        $cliente->cont_pago = $cantidad;
        $cliente->total_pago = $suma;
        $cliente->save();

        return redirect()->route('pago.index');
    }

    public function destroy(Pagos $pago)
    {
        $cliente = Cliente::findOrFail($pago->cliente_id);

        $cliente->cont_pago -= 1;
        $cliente->total_pago -= $pago->valor;
        $cliente->save();

        $pago->delete();

        return redirect()->route('pago.index');
    }
}
