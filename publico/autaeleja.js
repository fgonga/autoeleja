$(".procurar_bi").on("click", function() {
    const value = $("#bi").val().toUpperCase();
    $.ajax({
        url: '/app/controlador/api/consultar.php',
        type: 'GET',
        data: {bi: value},
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

