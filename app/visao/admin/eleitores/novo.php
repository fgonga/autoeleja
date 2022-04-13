<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php require_once("../components/cabecalho.php")?>
    <title>AutaEleja</title>

</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->

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
                    <h4 class="page-title">Novo Eleitor</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Processos</a></li>
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
                    <form class="form-horizontal" method="POST" action="/app/controlador/processos/novo.php">
                        <div class="card-body">
                            <h5 class="card-title">Informações do eleitor</h5>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="fname" class="">BI</label>

                                    <div class="input-group">

                                        <input type="text" class="form-control" placeholder="Bilhete de identidade" aria-label="Username" aria-describedby="basic-addon1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="fname" class="">Telefone</label>

                                    <div class="input-group">

                                        <input  type="text" class="form-control" placeholder="9xx xxx xxx" aria-label="Username" aria-describedby="basic-addon1">
                                        <div class="input-group-prepend" title="Enviar codigo de confirmação">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-paper-plane"></i></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group col-md-3">
                                    <label for="fname" class="">Código de aprovação</label>
                                    <input type="number" class="form-control" id="lname" placeholder="Código">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="lname" class="">Residencia</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lname" class="">Género</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Masculino</option>
                                        <option value="">Feminino</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lname" class="">Estado civil</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Solteiro</option>
                                        <option value="">Casado</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lname" class="">Data de nascimento</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lname" class="">Pai</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lname" class="">Mae</label>
                                    <input type="text" class="form-control">
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
