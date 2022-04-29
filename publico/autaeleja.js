
function toTitleCase(str) {
    return str.toLowerCase().split(' ').map(function (word) {
        return (word.charAt(0).toUpperCase() + word.slice(1));
    }).join(' ');
}



$(".bi_loader").hide();
$(".bi_icon").show();
$(".procurar_bi").on("click", function() {
    const value = $("#bi").val().toUpperCase();
    $(".bi_loader").show();
    $(".bi_icon").hide();
    $.ajax({
        url: '/app/controlador/api/consultar.php',
        type: 'GET',
        data: {bi: value},
        success: function(data){
            $(".bi_loader").hide();
            $(".bi_icon").show();
            let dados = JSON.parse(data);
            if (!dados.sucesso){
                $("#mensagem").html(` <div class='alert alert-danger' role='alert'>
                                 ${dados.erro.mensagem}
                                 </div>`);
            }else{

                $("#nome").val(toTitleCase(dados.dados.nome));
                $("#mae").val(toTitleCase(dados.dados.mae));
                $("#pai").val(toTitleCase(dados.dados.pai));
                $("#estado_civil").val(dados.dados.estado_civil);
                $("#genero").val(dados.dados.genero);
                $("#nascimento").val(dados.dados.nascimento);
                $("#mensagem").html(` <div class='alert alert-success' role='alert'>
                                Dados preechidos com sucesso
                                 </div>`);

            }
        }
    });
});


$(".enviar_codigo").on("click", function() {
    const numero = $("#numero").val().toUpperCase();
    const codigo = $("#codigo").val().toUpperCase();
    $.ajax({
        url: '/app/controlador/api/mensagem.php',
        type: 'GET',
        data: {numero: numero,mensagem:`Codigo de verificação: ${codigo}`},
        success: function(data){
            let dados = JSON.parse(data);
            if (!dados.sucesso){
                $("#mensagem").html(` <div class='alert alert-danger' role='alert'>
                                 ${dados.erro.mensagem}
                                 </div>`);
            }
        }
    });
});

