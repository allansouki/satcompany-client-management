@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Clientes</h4>
    <a href="#" class="btn btn-primary">
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
                    <th width="150">Ações</th>
                </tr>
            </thead>
            <tbody>
                {{-- Dados via backend / AJAX --}}
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(function () {
        $('#clients-table').DataTable();
    });
</script>
@endpush
