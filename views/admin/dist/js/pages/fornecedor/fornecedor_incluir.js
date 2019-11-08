$(function(){
    'use strict';

    var tipoDocumento = $("#divTipoDocumento");
    var nomeRazaoSocial = $("#divNomeRazaoSocial");
    var divNomeFantasia = $("#divNomeFantasia");
    var inscricaoEstadual = $("#divInscricaoEstadual");

    tipoDocumento.hide();
    nomeRazaoSocial.hide();
    divNomeFantasia.hide();
    inscricaoEstadual.hide();

    $(document).on('click', 'input[type=radio]', function() {
        var id = $(this).prop('id');
        motrarInput(id);
    });



    function motrarInput(id){
        switch (id) {
            case 'pf':
                $('#divTipoDocumento label').text('CPF').prop('for', 'cpf');
                $('#divTipoDocumento label').prop('name','cpf').prop('id', 'cpf');

                tipoDocumento.show();

                $("#divNomeRazaoSocial label").text('Nome').prop('for','nome');
                $("#divNomeRazaoSocial label").prop('name','nome').prop('id', 'nome');
                nomeRazaoSocial.show();
                divNomeFantasia.hide();
                inscricaoEstadual.hide();
                break;

            case 'pj':
                    $('#divTipoDocumento label').text('CNPJ')
                    $('#divTipoDocumento label').prop('name', 'cnpj');
                    $('#divTipoDocumento label').prop('id','cnpj');
                    tipoDocumento.show();
                    $('#divNomeRazaoSocial label').text('Razao Social');
                    $('#divNomeRazaoSocial label').prop('for', 'razaoSocial');
                    $('#divNomeRazaoSocial label').prop('name','razaoSocial');
                    $('#divNomeRazaoSocial label').prop('id','razaoSocial');
                    nomeRazaoSocial.show();                    
                    $('#divNomeFantasia label').text('Nome Fantasia');
                    $('#divNomeFantasia label').prop('for', 'nomeFantasia');
                    $('#divNomeFantasia label').prop('name', 'nomeFantasia');
                    $('#divNomeFantasia label').prop('id', 'nomeFantasia');
                    divNomeFantasia.show();
                    $('#divInscricaoEstadual label').text('Inscrição Estadual');
                    $('#divInscricaoEstadual label').prop('for', 'inscricaoEstadual');
                    $('#divInscricaoEstadual label').prop('name', 'inscricaoEstadual');
                    $('#divInscricaoEstadual label').prop('id', 'inscricaoEstadual');
                    inscricaoEstadual.show();
                    break;

            default:

                break;
        }
    }
});