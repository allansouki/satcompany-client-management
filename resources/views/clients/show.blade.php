@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <strong>Detalhes do Cliente</strong>

            @if ($client->status === 'ativo')
                <span class="badge bg-success">Ativo</span>
            @else
                <span class="badge bg-danger">Inativo</span>
            @endif
        </div>

        <div class="card-body">

            <div class="row g-4">

                {{-- ======================
                     DADOS DO CLIENTE
                ====================== --}}
                <div class="col-md-6">
                    <div class="card h-100 border">
                        <div class="card-header bg-light">
                            <strong>Dados do Cliente</strong>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <small class="text-muted">Nome</small><br>
                                <strong>{{ $client->name }}</strong>
                            </li>

                            <li class="list-group-item">
                                <small class="text-muted">CPF</small><br>
                                <span class="badge bg-secondary">
                                    {{ $client->cpf }}
                                </span>
                            </li>

                            <li class="list-group-item">
                                <small class="text-muted">Email</small><br>
                                <span class="text-break">
                                    {{ $client->email }}
                                </span>
                            </li>

                            <li class="list-group-item">
                                <small class="text-muted">Telefone</small><br>
                                {{ $client->phone ?? '-' }}
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- ======================
                     ENDEREÇO
                ====================== --}}
                <div class="col-md-6">
                    <div class="card h-100 border">
                        <div class="card-header bg-light">
                            <strong>Endereço</strong>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <small class="text-muted">CEP</small><br>
                                {{ $client->cep }}
                            </li>

                            <li class="list-group-item">
                                <small class="text-muted">Rua</small><br>
                                {{ $client->street }}, {{ $client->number }}
                            </li>

                            <li class="list-group-item">
                                <small class="text-muted">Bairro</small><br>
                                {{ $client->neighborhood }}
                            </li>

                            <li class="list-group-item">
                                <small class="text-muted">Cidade</small><br>
                                {{ $client->city }}
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <small class="text-muted">UF</small><br>
                                    {{ $client->state }}
                                </div>

                                <span class="badge bg-info text-dark">
                                    {{ $client->state }}
                                </span>
                            </li>

                            @if ($client->complement)
                                <li class="list-group-item">
                                    <small class="text-muted">Complemento</small><br>
                                    {{ $client->complement }}
                                </li>
                            @endif
                        </ul>

                    </div>
                </div>

            </div>

            {{-- ======================
                 AÇÕES
            ====================== --}}
            <div class="mt-4 d-flex justify-content-end">
                <a href="{{ route('clients.index') }}" class="btn btn-outline-secondary">
                    Voltar
                </a>
            </div>

        </div>
    </div>

</div>
@endsection
