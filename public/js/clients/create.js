
function alertSwal(icon, title, text) {
    return Swal.fire({ icon, title, html: text });
}


$('#cep').on('blur', function () {

    let cep = $(this).val().replace(/\D/g, '');

    if (cep.length !== 8) {
        alertSwal('warning','CEP inválido','Informe um CEP com 8 dígitos.')
        return;
    }
    $.ajax({
        url: `https://viacep.com.br/ws/${cep}/json/`,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
              console.log(response);
            if (response.erro) {
                alertSwal('error','CEP não encontrado','Verifique o CEP informado.')
                return;
            }
            $('input[name="street"]').val(response.logradouro);
            $('input[name="neighborhood"]').val(response.bairro);
            $('input[name="city"]').val(response.localidade);
        },
        error: function () {
            alertSwal('error','Erro','Erro ao consultar o CEP.')
        }
    });
});


$('#btn-save').on('click', function () {

    let data = $('#form-create').serialize();

    $.ajax({
        url: '/clients',
        type: 'POST',
        data: data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            alertSwal('success', 'Sucesso', 'Dados cadastrados com sucesso')
        .then(() => {
            window.location.href = '/clients';
        });
        },
        error: function (xhr) {
            if (xhr.status === 422) {

        let errors = xhr.responseJSON.errors;
        let errorMessages = '';

        $.each(errors, function (field, messages) {
            messages.forEach(function (message) {
                errorMessages += message + '<br>';
            });
        });

        alertSwal('error','Erro de validação',errorMessages)

    } else {
        alertSwal('error','Erro','Ocorreu um erro inesperado.')
    }
        }
    });

});
