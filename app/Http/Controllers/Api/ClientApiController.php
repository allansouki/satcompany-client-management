<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ClientApiController extends Controller
{
    /**
     * Listar clientes.
     *
     * Retorna a lista completa de clientes cadastrados.
     *
     * @return JsonResponse
     *
     * @response 200 [
     *   {
     *     "id": 1,
     *     "name": "João da Silva",
     *     "email": "joao@email.com"
     *   }
     * ]
     */
    public function index(): JsonResponse
    {
        return response()->json(Client::all(), 200);
    }

    /**
     * Cadastrar cliente.
     *
     * Cria um novo cliente com os dados validados.
     *
     * @return JsonResponse
     *
     * @response 201 {
     *   "id": 1,
     *   "name": "João da Silva",
     *   "email": "joao@email.com"
     * }
     */
    public function store(StoreClientRequest $request): JsonResponse
    {
        $client = Client::create($request->all());

        return response()->json($client, 201);
    }

    /**
     * Exibir cliente.
     *
     * Retorna os dados de um cliente específico.
     *
     * @return JsonResponse
     *
     * @response 200 {
     *   "id": 1,
     *   "name": "João da Silva",
     *   "email": "joao@email.com"
     * }
     */
    public function show(Client $client): JsonResponse
    {
        return response()->json($client, 200);
    }

    /**
     * Atualizar cliente.
     *
     * Atualiza os dados do cliente (exceto CPF).
     *
     * @return JsonResponse
     *
     * @response 200 {
     *   "id": 1,
     *   "name": "João Silva"
     * }
     */
    public function update(UpdateClientRequest $request, Client $client): JsonResponse
    {
        $client->update($request->except('cpf'));

        return response()->json($client, 200);
    }

    /**
     * Remover cliente.
     *
     * Remove o cliente do sistema.
     *
     * @return Response
     *
     * @response 204 {}
     */
    public function destroy(Client $client): Response
    {
        $client->delete();

        return response()->noContent();
    }
}
