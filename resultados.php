<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="IPAG">
    <title>INICIO</title>
    <!-- Bootstrap core CSS -->
    <link href="./publico/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/publico/css/album.css" rel="stylesheet">
</head>

<body>
<?php require_once("components/menu.php"); ?>

<main role="main">


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Votar na: Tainara Mita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fname" class="">Telefone</label>

                            <div class="input-group">

                                <input  type="text" class="form-control" placeholder="9xx xxx xxx" aria-label="Username" aria-describedby="basic-addon1">
                                <div class="input-group-prepend" title="Enviar codigo de confirmação">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-paper-plane"></i></span>
                                </div>
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="fname" class="">Código de aprovação</label>
                            <input type="number" class="form-control" id="lname" placeholder="Código">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Finalizar voto</button>
                </div>
            </div>
        </div>
    </div>
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Local para visualizar resultado</h1>
            <div class="form-group d-flex ">
                <select name="" id="" class="form-control mr-2">
                    <option value="#" disabled >Província</option>
                    <option value="Bengo">Bengo</option>
                    <option value="Benguela" selected>Benguela</option>
                    <option value="Bié">Bié</option>
                    <option value="Cabinda">Cabinda</option>
                    <option value="Cuando-Cubango">Cuando-Cubango</option>
                    <option value="Cuanza-Norte">Cuanza-Norte</option>
                    <option value="Cuanza-Sul">Cuanza-Sul</option>
                    <option value="Cunene">Cunene</option>
                    <option value="Huambo">Huambo</option>
                    <option value="Huíla">Huíla</option>
                    <option value="Luanda">Luanda</option>
                    <option value="Lunda-Norte">Lunda-Norte</option>
                    <option value="Lunda-Sul">Lunda-Sul</option>
                    <option value="Malanje">Malanje</option>
                    <option value="Moxico">Moxico</option>
                    <option value="Namibe">Namibe</option>
                    <option value="Uíge">Uíge</option>
                    <option value="Zaire">Zaire</option>
                </select>
                <select name="" id="" class="form-control">
                    <option value="#" disabled selected>Município</option>
                    <option value="Balombo">Balombo</option>
                    <option value="Bocoio">Bocoio</option>
                    <option value="Caimbambo">Caimbambo</option>
                    <option value="Catumbela">Catumbela</option>
                    <option value="Ganda">Ganda</option>
                    <option value="Chongoroi">Chongoroi</option>
                    <option value="Lobito" selected>Lobito</option>
                    <option value="">Cunene</option>
                    <option value="">Huambo</option>
                    <option value="">Huíla</option>
                </select>
            </div>
            <p>

                <a href="#" class="btn btn-primary my-2">Escolher município</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <h3 class="text-left">Eleições 2022 Benguela/Lobito </h3>
            <hr>
            <div class="d-flex justify-content-left">
                <div class="col-md-4">
                    <div class="card bg-warning mb-4 box-shadow">
                        <img class="card-img-top" height="300" src="/publico/candidato2.png" data-src="/publico/candidato2.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Lutar pelos direitos das mulheres, igualdade de género proporcionando um ambiente de equidade..</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-primary">Vencedor</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" height="300" src="/publico/candidato1.png" data-src="/publico/candidato1.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Combater a corrupção na provincia , apostando na educação e saúde para promoção de um ambiente propero.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-default">2 Classificado</button>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div></main>

<?php require_once("components/rodape.php"); ?>


</body>
</html>
