$(document).ready(function(){
    $("#icep").change(function(){

        var cep = $(this).val().replace('-', '').replace('.', '');

        var url = 'https://viacep.com.br/ws/' + cep + '/json/';
        
        $.getJSON(url, function (json) {
            $("#ilogradouro").val(json.logradouro);
            $("#ibairro").val(json.bairro);
            $("#icidade").val(json.localidade);
            $("#iestado").val(json.uf);
            $("#icomplemento").val(json.complemento);
        });
    });
});