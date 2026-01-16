<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Enums\StateEnum;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class ClientController extends Controller
{
    /**
     * Lista os clientes.
     *
     * Retorna a view de listagem com paginação.
     *
     * @return View
     */
    public function index(): View
    {
        $clients = Client::paginate(30);

        return view('clients.index', compact('clients'));
    }

    /**
     * Exibe o formulário de criação de cliente.
     *
     * Carrega os estados a partir do Enum.
     *
     * @return View
     */
    public function create(): View
    {
        $states = array_map(
            fn ($state) => $state->value,
            StateEnum::cases()
        );

        return view('clients.create', compact('states'));
    }

    /**
     * Armazena um novo cliente.
     *
     * Retorno em JSON para consumo via AJAX.
     *
     * @return JsonResponse
     */
    public function store(StoreClientRequest $request): JsonResponse
    {
        $client = Client::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Cliente cadastrado com sucesso',
            'data'    => $client,
        ]);
    }

    /**
     * Exibe os detalhes de um cliente específico.
     *
     * @return View
     */
    public function show(Client $client): View
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Exibe o formulário de edição do cliente.
     *
     * @return View
     */
    public function edit(Client $client): View
    {
        $states = array_map(
            fn ($state) => $state->value,
            StateEnum::cases()
        );

        return view('clients.edit', compact('client', 'states'));
    }

    /**
     * Atualiza os dados de um cliente.
     *
     * Retorno em JSON para consumo via AJAX.
     *
     * @return JsonResponse
     */
    public function update(UpdateClientRequest $request, Client $client): JsonResponse
    {
        $client->update($request->except('cpf'));

        return response()->json([
            'success' => true,
            'message' => 'Cliente atualizado com sucesso',
        ]);
    }

    /**
     * Remove um cliente.
     *
     * Retorno em JSON para consumo via AJAX.
     *
     * @return JsonResponse
     */
    public function destroy(Client $client): JsonResponse
    {
        $client->delete();

        return response()->json([
            'success' => true,
            'message' => 'Cliente excluído com sucesso',
        ]);
    }
}
