<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php require_once("../components/cabecalho.php");
    require_once "../../../controlador/utilizador/logado.php";?>
    <title>AutaEleja</title>

</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">


    <?php require_once("../components/menuesquerdo.php")?>
    <?php require_once("../components/menusuperior.php")?>

    <div class="page-wrapper">



        <div class="container-fluid">
            <div class="col-12">
                <div class=" border">
                    <form class=" d-flex justify-content-center flex-wrap align-items-center" method="POST" action="/app/controlador/eleitor/verificacao.php">
                        <div class="col-12">
                            <div id="mensagem">

                                <?php
                                @$mensagem = $_GET['mensagem'];
                                if (@$_GET['erro'] == 'nao') {
                                    echo "
                                    <div class='alert alert-success' role='alert'>
                                    $mensagem
                                    </div>";
                                }elseif(@$_GET['erro'] == 'sim'){
                                    echo "
                                 <div class='alert alert-danger' role='alert'>
                                 $mensagem
                                 </div>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-12"> <h5 class="card-title text-center">Verificar telefone <br></h5></div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="form-group d-flex justify-content-center flex-wrap ">
                                <input name="telefone" type="number"  value="<?php echo @$_REQUEST["telefone"];?>"  placeholder="Telefone"  class="form-control">
                                <input name="codigo" type="number" autofocus  placeholder="Codigo de verificação"  class="form-control mt-2">
                                <div>
                                   <button type="submit" class="btn btn-primary mt-2">Verificar</button>
                                   <a href="novo.php" type="submit" class="btn btn-secondary mt-2">Cancelar</a>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>
        <?php require_once("../components/rodape.php")?>

</body>

</html>
