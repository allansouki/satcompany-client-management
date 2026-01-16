function alertSwal(icon, title, text ,showCancel = false) {
    return Swal.fire({
        icon: icon,
        title: title,
        html: text,
        showCancelButton: showCancel,
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Cancelar',
        reverseButtons: true
    });
}


$(document).on('click', '.btn-delete', function () {

    const clientId = $(this).data('id');
    const row = $(this).closest('tr');

    alertSwal(
        'warning',
        'Confirmar exclusão?',
        'Esta ação não poderá ser desfeita.',
        true // exibe botão Cancelar
    ).then((result) => {

        if (!result.isConfirmed) {
            return; // clicou em Cancelar ou fechou o modal
        }

        $.ajax({
            url: '/clients/' + clientId,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function () {

                row.fadeOut(300, function () {
                    $(this).remove();
                });

                alertSwal(
                    'success',
                    'Excluído!',
                    'Cliente removido com sucesso.'
                );
            },
            error: function () {
                alertSwal(
                    'error',
                    'Erro',
                    'Erro ao excluir o cliente.'
                );
            }
        });
    });
});



$('#clients-table').DataTable({
    paging: true,
    pageLength: 10,
    responsive: true,
    order: [[0, 'asc']],
    dom: 'Bfrtip', // habilita os botões
    buttons: [
        {
            extend: 'copy',
            text: 'Copiar'
        },
        {
            extend: 'excel',
            text: 'Excel'
        },
        {
            extend: 'csv',
            text: 'CSV'
        },
        {
            extend: 'pdf',
            text: 'PDF'
        },
        {
            extend: 'print',
            text: 'Imprimir'
        }
    ],
    language: {
        search: "Buscar:",
        info: "Exibindo _START_ até _END_ de _TOTAL_ registros",
        zeroRecords: "Nenhum registro encontrado",
        paginate: {
            next: "Próximo",
            previous: "Anterior"
        }
    }
});


