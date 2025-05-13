@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md max-w-full">
        <div class="overflow-x-auto">
            <div class="flex justify-between items-center mb-6 min-w-full">
                <h2 class="text-2xl font-bold text-gray-800">Lista de Clientes</h2>
                <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Novo Cliente
                </a>
            </div>

            @if ($message = Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 min-w-full" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @endif

            <table class="min-w-full bg-white">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-4 text-left">ID</th>
                        <th class="py-3 px-4 text-left">Nome</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-center">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td class="py-3 px-4">{{ $cliente->id }}</td>
                        <td class="py-3 px-4">{{ $cliente->nome }}</td>
                        <td class="py-3 px-4">{{ $cliente->email }}</td>
                        <td class="py-3 px-4 text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded text-sm">
                                    Editar
                                </a>
                                
                                <form action="" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-sm" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">
                                        Apagar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection