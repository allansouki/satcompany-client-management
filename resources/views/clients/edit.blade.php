@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Editar Cliente</strong>
    </div>
    <div class="card-body">
        <form>
            @include('clients.form')

            <div class="text-end">
                <a href="/" class="btn btn-secondary">Cancelar</a>
                <button class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection
