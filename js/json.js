$(function() {

    $(document).ready(function () {

        var url = 'http://localhost/ws-php/consultas.php?aluno';

        $.getJSON(url, function (json) {

            var alunos = '';

            $.each(json, function (key, value) {
                alunos += '<tr>';
                alunos += '<td>' + value.matricula + '</td>';
                alunos += '<td>' + value.nome + '</td>';
                alunos += '<td>' + parseFloat(value.notaDeAvaliacao) + '</td>';
                alunos += '</tr>';
            });

            $('#tb_alunos').append(alunos);

        }).fail(function () {

            toastr.error("Ocorreu um erro!");
        });
    });

    $("#btn_buscar").click(function () {

        var matricula = $("#search_matricula").val().replace('.', '');
        matricula = matricula.replace('-', '');

        if (matricula !== "") {
            var url = 'http://localhost/ws-php/consultas.php?aluno=' + matricula;

            $.getJSON(url, function (json) {

                $("#matricula").val(json.matricula);
                $("#nome").val(json.nome);
                $("#notaDeAvaliacao").val(json.notaDeAvaliacao);

            }).fail(function () {

                $("#matricula").val("");
                $("#nome").val("");
                $("#notaDeAvaliacao").val("");
                toastr.error("Matricula incorreta ou inexistente!");
            });
        }
    });
    
    $("#btn_registrar").click(function () {

        var dados = {
            matricula: '',
            nome: '',
            notaDeAvaliacao: ''
        };

        dados.matricula = $("#matricula").val();
        dados.nome = $("#nome").val();
        dados.notaDeAvaliacao = $("#notaDeAvaliacao").val();

        if (dados !== "") {
            console.log(JSON.stringify(dados));
            $.ajax({
                url: "http://localhost/ws-php/consultas.php",
                type : 'post',
                data: JSON.stringify(dados),
                beforeSend : function () {
                    toastr.info("Enviando...");
                }
            })
            .done(function (msg) {
                console.log(msg);
                toastr.success(msg);
            })
            .fail(function (jqXHR, textStatus, msg) {
                toastr.error(msg);
            }); 
        }
    });
});