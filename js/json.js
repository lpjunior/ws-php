$(function () {

    $(document).ready(function () {

        var url = 'http://localhost/ws/consultas.php?alunos';

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

            var url = 'http://localhost/ws/consultas.php?alunos=' + matricula;

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
});