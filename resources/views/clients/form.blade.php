<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Nome completo</label>
        <input
            type="text"
            name="name"
            class="form-control"
            value="{{ old('name', $client->name ?? '') }}"
        >
    </div>

    <div class="col-md-3 mb-3">
        <label class="form-label">CPF</label>
        <input
            type="text"
            name="cpf"
            id="cpf"
            class="form-control"
            value="{{ old('cpf', $client->cpf ?? '') }}"
            {{ isset($client) ? 'readonly' : '' }}>
    </div>

    <div class="col-md-3 mb-3">
        <label class="form-label">Telefone</label>
        <input
            type="text"
            name="phone"
            id="phone"
            class="form-control"
            value="{{ old('phone', $client->phone ?? '') }}"
        >
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Email</label>
        <input
            type="email"
            name="email"
            class="form-control"
            value="{{ old('email', $client->email ?? '') }}"
        >
    </div>
</div>

<hr>

<h6>Endereço</h6>

<div class="row">
    <div class="col-md-3 mb-3">
        <label class="form-label">CEP</label>
        <input
            type="text"
            name="cep"
            id="cep"
            class="form-control"
            value="{{ old('cep', $client->cep ?? '') }}"
        >
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Rua</label>
        <input
            type="text"
            name="street"
            class="form-control"
            value="{{ old('street', $client->street ?? '') }}"
        >
    </div>

    <div class="col-md-3 mb-3">
        <label class="form-label">Número</label>
        <input
            type="text"
            name="number"
            class="form-control"
            value="{{ old('number', $client->number ?? '') }}"
        >
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Bairro</label>
        <input
            type="text"
            name="neighborhood"
            class="form-control"
            value="{{ old('neighborhood', $client->neighborhood ?? '') }}"
        >
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Cidade</label>
        <input
            type="text"
            name="city"
            class="form-control"
            value="{{ old('city', $client->city ?? '') }}"
        >
    </div>

    <div class="col-md-2 mb-3">
        <label class="form-label">UF</label>
        <select name="state" class="form-select">
            <option value="">Selecione</option>
            @foreach ($states as $state)
                <option value="{{ $state }}"
                    {{ old('state', $client->state ?? '') === $state ? 'selected' : '' }}>
                    {{ $state }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Complemento</label>
        <input
            type="text"
            name="complement"
            class="form-control"
            value="{{ old('complement', $client->complement ?? '') }}"
        >
    </div>
</div>

<div class="row">
    <div class="col-md-3 mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select">
            <option value="ativo"
                {{ old('status', $client->status ?? 'ativo') === 'ativo' ? 'selected' : '' }}>
                🟢 Ativo
            </option>
            <option value="inativo"
                {{ old('status', $client->status ?? '') === 'inativo' ? 'selected' : '' }}>
                🔴 Inativo
            </option>
        </select>
    </div>
</div>
