@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Novo Cliente</strong>
    </div>
    <div class="card-body">
        <form id="form-create">
            @include('clients.form')

            <div class="text-end">
                <a href="/" class="btn btn-secondary">Cancelar</a>
                <button type="button" id="btn-save" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/clients/create.js') }}"></script>
<script src="{{ asset('js/clients/masks.js') }}"></script>
@endpush
