@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Detalhes do Cliente</strong>
    </div>

    <div class="card-body">
        <p><strong>Nome:</strong> João da Silva</p>
        <p><strong>CPF:</strong> 000.000.000-00</p>
        <p><strong>Email:</strong> joao@email.com</p>
        <p><strong>Telefone:</strong> (11) 99999-9999</p>

        <hr>

        <p><strong>Endereço:</strong></p>
        <p>Rua Exemplo, 123</p>
        <p>Bairro Centro</p>
        <p>São Paulo - SP</p>

        <a href="/" class="btn btn-secondary mt-3">Voltar</a>
    </div>
</div>
@endsection
