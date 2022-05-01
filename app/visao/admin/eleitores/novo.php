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

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Novo eleitor</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Candidatos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Novo </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="/app/controlador/eleitor/novo.php">
                        <div class="card-body">
                            <h5 class="card-title">Informações do eleitor</h5>
                            <hr>
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

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="fname">BI</label>

                                    <div class="input-group">
                                        <input autofocus required type="text" name="bi" id="bi" class="form-control " placeholder="Bilhete de identidade" aria-label="Username" aria-describedby="basic-addon1">
                                        <div class="input-group-prepend">
                                            <span  class="input-group-text btn procurar_bi" title="Buscar informações" id="basic-addon1">
                                                <div class="loader bi_loader" role="status"></div>
                                                <i class="fa fa-search bi_icon"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="fname">Telefone</label>

                                    <div class="input-group">
                                        <input   type="text" name="telefone" id="numero" class="form-control" placeholder="9xx xxx xxx" aria-label="Username" aria-describedby="basic-addon1">

                                    </div>

                                </div>

                                <div class="form-group col-md-3">
                                    <label for="nome" >Nome</label>
                                    <input required type="text"  id="nome" name="nome" class="form-control">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="residencia" >Residência</label>
                                    <input required id="residencia" type="text"  name="residencia" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="genero" >Género</label>
                                    <select  required name="genero" id="genero" class="form-control">
                                        <option value="Masculino"  selected>Masculino</option>
                                        <option value="Femenino" >Feminino</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="estado_civil" >Estado civil</label>
                                    <select  required name="estado_civil" id="estado_civil" class="form-control">
                                        <option value="Solteiro" selected>Solteiro</option>
                                        <option value="Solteira">Solteira</option>
                                        <option value="Casado" >Casado</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nascimento">Data de nascimento</label>
                                    <input required type="date" class="form-control" id="nascimento"  name="nascimento">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="provincia">Província</label>
                                    <select  required  id="provincia" class="form-control" name="provincia">
                                        <option value="Benguela">Benguela</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="municipio">Município</label>
                                    <select  required  id="municipio" class="form-control" name="municipio">
                                        <option value="Lobito">Lobito</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="pai">Pai</label>
                                    <input required type="text" name="pai" id="pai" class="form-control">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="mae">Mae</label>
                                    <input required type="text" name="mae" id="mae" class="form-control">
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                    </form>
                </div>

            </div>
        </div>
        <?php require_once("../components/rodape.php")?>

</body>

</html>
