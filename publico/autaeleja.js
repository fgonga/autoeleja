
function toTitleCase(str) {
    return str.toLowerCase().split(' ').map(function (word) {
        return (word.charAt(0).toUpperCase() + word.slice(1));
    }).join(' ');
}



$(".bi_loader").hide();
$(".bi_icon").show();

$(".sms_loader").hide();
$(".sms_icon").show();
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
                if (dados.erro.mensagem == 'Runtime Error'){
                    $("#mensagem").html(` <div class='alert alert-danger' role='alert'>
                    Serviço de consulta temporariamente indisponível, por favor tente mais tarde.
                                 </div>`);
                    return ;
                }
                $("#mensagem").html(` <div class='alert alert-danger' role='alert'>
                              Serviço de consulta temporariamente indisponível, por favor tente mais tarde.
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
    $(".sms_loader").show();
    $(".sms_icon").hide();
    if (numero.length === 9){
        const codigo = $("#codigo").val().toUpperCase();
        $.ajax({
            url: '/app/controlador/api/mensagem.php',
            type: 'GET',
            data: {numero: numero,mensagem:`Codigo de verificação: ${codigo}`},
            success: function(data){
                $(".sms_loader").hide();
                $(".sms_icon").show();
                let dados = JSON.parse(data);
                let mensagem =  $("#mensagem");
                if (!dados.sucesso){
                    mensagem.html(` <div class='alert alert-danger' role='alert'>
                                 ${dados.erro.mensagem}
                                 </div>`);
                    return;
                }
                mensagem.html(` <div class='alert alert-success' role='alert'>
                               Mensagem enviada com sucesso.
                                 </div>`);
            }
        });
        return;
    }
    $("#mensagem").html(` <div class='alert alert-danger' role='alert'>
                              Numero incorrecto
                                 </div>`);
});

$("#provincia_input").ready(function() {

    $( "#provincia_input" ).change(function() {
        for (let index in provincias){

            if (provincias[index].nome === $(this).val()){
                console.log("aqui");
                $("#municipios_input").html("");
                $("#municipios_input").append(`<option value="">Selecione um municipio</option>`);
                for (let municipio in provincias[index].municipios){
                    let mun =  provincias[index].municipios[municipio];
                    $("#municipios_input").append(`<option value="${mun}">${mun}</option>`);
                }
            }
        }
    });

});
const provincias = [

    {
        nome: 'Benguela',
        municipios: [
            'Lobito',
            'Balombo',
            'Baía',
            'Farta',
            'Benguela',
            'Bocoio',
            'Caimbambo',
            'Catumbela',
            'Chongorói',
            'Cubal',
            'Ganda',
        ],
    },
    {
        nome: 'Bie',
        municipios: [
            'Andulo',
            'Camacupa',
            'Catabola',
            'Chinguar',
            'Chitembo',
            'Cuemba',
            'Cunhinga',
            'Cuíto',
            'Nharea',
        ],
    },
    {
        nome: 'Cabinda',
        municipios: [
            'Belize',
            'Buco-Zau',
            'Cabinda',
            'Cacongo',
        ],
    },
    {
        nome: 'Cuando Cubango',
        municipios: [
            'Calai',
            'Cuangar',
            'Cuchi',
            'Cuito Cuanavale',
            'Dirico',
            'Mavinga',
            'Menongue',
            'Nancova',
            'Rivungo',
        ],
    },
    {
        nome: 'Cuanza-Norte',
        municipios: [
            'Ambaca',
            'Banga',
            'Bolongongo',
            'Cambambe',
            'Cazengo',
            'Golungo Alto',
            'Gonguembo',
            'Lucala',
            'Quiculungo',
            'Samba Caju',
        ],
    },
    {
        nome: 'Cuanza-Sul',
        municipios: [
            'Amboim',
            'Cassongue',
            'Cela',
            'Conda',
            'Ebo',
            'Libolo',
            'Mussende',
            'Porto Amboim',
            'Quibala',
            'Quilenda',
            'Seles',
            'Sumbe',
        ],
    },
    {
        nome: 'Cunene',
        municipios: [
            'Cahama',
            'Cuanhama',
            'Curoca',
            'Cuvelai',
            'Namacunde',
            'Ombadja',
        ],
    },
    {
        nome: 'Huambo',
        municipios: [
            'Bailundo',
            'Cachiungo',
            'Caála',
            'Ecunha',
            'Huambo',
            'Londuimbali',
            'Longonjo',
            'Mungo',
            'Chicala-Choloanga',
            'Chinjenje',
            'Ucuma',
        ],
    },
    {
        nome: 'Huila',
        municipios: [
            'Caconda',
            'Cacula',
            'Caluquembe',
            'Chiange',
            'Chibia',
            'Chicomba',
            'Chipindo',
            'Cuvango',
            'Humpata',
            'Jamba',
            'Lubango',
            'Matala',
            'Quilengues',
            'Quipungo',
        ],
    },
    {
        nome: 'Luanda',
        municipios: [
            'Belas',
            'Cacuaco',
            'Cazenga',
            'Ícolo e Bengo',
            'Luanda',
            'Quilamba Quiaxi',
            'Quissama',
            'Talatona',
            'Viana',
        ],
    },
    {
        nome: 'Luanda-Norte',
        municipios: [
            'Cambulo',
            'Capenda-Camulemba',
            'Caungula',
            'Chitato',
            'Cuango',
            'Cuílo',
            'Lóvua',
            'Lubalo',
            'Lucapa',
            'Xá-Muteba',
        ],
    },
    {
        nome: 'Luanda-Sul',
        municipios: [
            'Cacolo',
            'Dala',
            'Muconda',
            'Saurimo',
        ],
    },
    {
        nome: 'Malange',
        municipios: [
            'Cacuso',
            'Calandula',
            'Cambundi-Catembo',
            'Cangandala',
            'Caombo',
            'Cuaba Nzoji',
            'Cunda-Dia-Baze',
            'Luquembo',
            'Malanje',
            'Marimba',
            'Massango',
            'Mucari',
            'Quela',
            'Quirima',
        ],
    },
    {
        nome: 'Moxico',
        municipios: [
            'Alto Zambeze',
            'Bundas',
            'Camanongue',
            'Léua',
            'Luau',
            'Luacano',
            'Luchazes',
            'Cameia',
            'Moxico',
        ],
    },
    {
        nome: 'Namibe',
        municipios: [
            'Bibala',
            'Camucuio',
            'Moçâmedes',
            'Tômbua',
            'Virei',
        ],
    },
    {
        nome: 'Uige',
        municipios: [
            'Alto Cauale',
            'Ambuíla',
            'Bembe',
            'Buengas',
            'Bungo',
            'Damba',
            'Milunga',
            'Mucaba',
            'Negage',
            'Puri',
            'Quimbele',
            'Quitexe',
            'Sanza Pombo',
            'Songo',
            'Uíge',
            'Zombo',
        ],
    },
    {
        nome: 'Zaire',
        municipios: [
            'Cuimba',
            'Mabanza Congo',
            'Nóqui',
            'Nezeto',
            'Soio',
            'Tomboco',
        ],
    },
];



$("#escolher").click(function (el) {
    $("candidatos").fadeOut(1000);
    let provincia =  $("#provincia_input").val();
    let municipio =  $("#municipios_input").val();

    if (provincia === "" || provincia == null) {
        alert("Escolha uma província");
        return;
    }

    if (municipio === "" || municipio == null) {
        alert("Escolha um município");
        return;
    }
    $("#candidatos").html("<h1>Carregando candidatos....</h1>");
    $.ajax({
        url: '/app/controlador/api/candidadosparavotar.php',
        type: 'GET',
        data: {provincia: provincia,municipio: municipio},
        success: function(data){
            data = JSON.parse(data);
            if (data.sucesso === true) {
                let candidatos = data.dados.candidatos;

                $("#candidatos").html("");
                for (const index in candidatos) {
                    console.log();
                    $("#candidatos").append(`
                  
                           <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="/publico/${candidatos[index].foto}" data-holder-rendered="true">
                        <div class="card-body">
                        <h4 class="text-center"></h4>
                            <p class="card-text">${candidatos[index].proposta}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button  type="button" data-toggle="modal" data-target="#votar_${index}" class="btn btn-sm btn-outline-secondary">Votar no candidato</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
  <div class="modal fade" id="votar_${index}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Votar em ${candidatos[index].nome}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div id="mensagem_votar_${index}"></div>
                        <form class="row col-12"  action="#" method="POST" id="form_votar_${index}">
                          <input type="number" id="telefone_votar_${index}" name="telefone" class="form-control" placeholder="Numero de telefone">
                          <input type="number" name="codigo" class="form-control mt-2" placeholder="Codigo"> 
                          
                          <input type="hidden" value="${data.dados.id}" name="processo_id" class="form-control mt-2" placeholder="Codigo"> 
                          <input type="hidden" value="${candidatos[index].id}" name="candidato_id" class="form-control mt-2" placeholder="Codigo"> 
                  
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="enviar_codigo(this)" mensagem_class="#mensagem_votar_${index}"  telefone_class="#telefone_votar_${index}" class="btn btn-secondary btn-enviar-codigo">Enviar codigo</button>
                        <button type="button" onclick="enviar_voto(this)" mensagem_class="#mensagem_votar_${index}" form_class="#form_votar_${index}"  class="btn btn-primary btn-enviar-voto">Votar</button>
                    </div>
                </div>
            </div>
        </div>
                     `);
                }

            }else{
                $("#candidatos").html("<h1>Nenhum candidato encontrado</h1>");
            }
        }
    });
})


function enviar_codigo(el){

    let telefone_el = $(el).attr("telefone_class");

    let telefone = $(telefone_el).val();
    let mensagem = $(el).attr("mensagem_class");
    console.log(mensagem)
    if (telefone.length !== 9) {
        alert("Numero de telefone invalido");
        return;
    }
    $(mensagem).html("<div class='alert alert-info'>Enviando codigo...</div>");
    $.ajax({
        url: "/app/controlador/api/enviar_codigo_verificacao.php",
        method: "POST",
        data: {
            telefone: telefone
        },
        success: function (data) {
            data = JSON.parse(data);
            if (data.sucesso == false) {
                $(mensagem).html(` <div class='alert alert-danger' role='alert'>${data.erro.mensagem}</div>`);
            } else {
                $(mensagem).html(` <div class='alert alert-success' role='alert'>Codigo de verificação enviado com sucesso.</div>`);
            }
        }
    });
}
function enviar_voto(el){
    let formarray = $($(el).attr("form_class")).serializeArray();
    let formasend = $($(el).attr("form_class")).serialize();
    let mensagem = $(el).attr("mensagem_class");
    if (formarray[0].value.length !== 9) {
        $(mensagem).html(` <div class='alert alert-danger' role='alert'>Numero de telefone invalido</div>`);
        return;
    }
    if (formarray[1].value.length !== 6) {
        $(mensagem).html(` <div class='alert alert-danger' role='alert'>Código de verificação invalido</div>`);
        return;
    }
    $(mensagem).html(` <div class='alert alert-info' role='alert'>Votando....</div>`);
    $.ajax({
        url: "/app/controlador/api/votar.php",
        method: "POST",
        data: formasend,
        success: function (data) {
            data = JSON.parse(data);
            if (data.sucesso == false) {
                $(mensagem).html(` <div class='alert alert-danger' role='alert'>${data.erro.mensagem}</div>`);
            } else {
                $(mensagem).html(` <div class='alert alert-success' role='alert'>Seu voto foi registrado obrigado</div>`);
            }
        }
    });
}
