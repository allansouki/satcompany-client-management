function alertSwal(icon, title, text) {
    return Swal.fire({
        icon: icon,
        title: title,
        html: text
    });
}

$('#btn-edit').on('click', function () {

    let data = $('#form-edit').serialize();

    $.ajax({
        url: '/clients/' + CLIENT_ID,
        type: 'PUT',
        data: data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },

        success: function (response) {
            alertSwal(
                'success','Sucesso','Cliente atualizado com sucesso'
            ).then(() => {
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

                alertSwal(
                    'error','Erro de validação',errorMessages
                );

            } else {
                alertSwal(
                    'error','Erro','Ocorreu um erro inesperado.'
                );
            }
        }
    });
});
