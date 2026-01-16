@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Editar Cliente</strong>
    </div>
    <div class="card-body">
        <form id="form-edit">
            @include('clients.form', ['client' => $client, 'states' => $states])
            <div class="text-end">
                <a href="/" class="btn btn-secondary">Cancelar</a>
                <button type="button" id="btn-edit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection




@push('scripts')
<script>  const CLIENT_ID = {{ $client->id }}; </script>
<script src="{{ asset('js/clients/edit.js') }}"></script>
<script src="{{ asset('js/clients/masks.js') }}"></script>
@endpush
