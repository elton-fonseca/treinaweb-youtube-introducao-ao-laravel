<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = [
            (object)['nome' => 'João da silva', 'email' => 'asdasd@asd', 'id' => 1],
            (object)['nome' => 'Maria', 'email' => 'asdasd@asd', 'id' => 2],
            (object)['nome' => 'Pedro', 'email' => 'asdasd@asd', 'id' => 3],
        ];

        return view('clientes.index', [
            'clientes' => $clientes
        ]);
    }
}
