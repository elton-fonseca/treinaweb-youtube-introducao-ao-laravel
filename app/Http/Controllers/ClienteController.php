<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Client::get();

        return view('clientes.index', [
            'clientes' => $clientes
        ]);
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => ['required', 'min:2'],
            'email' => ['required', 'email']
        ]);

        $cliente = new Client;
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->save();

        return redirect()->route('clientes.index');
    }

    public function edit(int $client)
    {
        $cliente = Client::find($client);

        return view('clientes.edit', [
            'cliente' => $cliente
        ]);
    }

    public function update(int $client, Request $request)
    {
         $request->validate([
            'nome' => ['required', 'min:2'],
            'email' => ['required', 'email']
        ]);
        
        $cliente = Client::find($client);
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->save();

        return redirect()->route('clientes.index');
    }
}
