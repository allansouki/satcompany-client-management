@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Clientes</h4>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">
        Adicionar Cliente
    </a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped" id="clients-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>STATUS</th>
                    <th width="150">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->cpf }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->city ?? '-' }}</td>
                        <td>{{ $client->state ?? '-' }}</td>
                          <td class="text-center">
                    @if ($client->status === 'ativo')
                        <span class="badge bg-success">Ativo</span>
                    @else
                        <span class="badge bg-danger">Inativo</span>
                    @endif
            </td>
                        <td>
                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <a href="{{ route('clients.show', $client->id) }}" class="btn btn-sm btn-info">Ver</a>
                            <button class="btn btn-sm btn-danger btn-delete" data-id="{{ $client->id }}">Excluir</button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Paginação --}}

    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/clients/index.js') }}"></script>
@endpush
