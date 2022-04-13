<?php require_once("../../../controlador/processo/listar.php")?>
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
                    <h4 class="page-title">Lista de processos</h4>
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
                <div class="card p-4">
                    <input type="text" class="form-control mb-2" placeholder="Pesquisar processo">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="bg-primary">
                            <th scope="col" class="text-white">Id</th>
                            <th scope="col" class="text-white">Nome</th>
                            <th scope="col" class="text-white">Inicio</th>
                            <th scope="col" class="text-white">Fim</th>
                            <th scope="col" class="text-white">Província</th>
                            <th scope="col" class="text-white">Município</th>

                            <th scope="col" class="text-white">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while($processo = mysqli_fetch_array($processos)):?>
                            <tr>
                                <td ><?php echo $processo["id"];?></td>
                                <td ><?php echo $processo["nome"];?></td>
                                <td ><?php echo $processo["inicio"];?></td>
                                <td ><?php echo $processo["fim"];?></td>
                                <td ><?php echo $processo["provincia"];?></td>
                                <td ><?php echo $processo["municipio"];?></td>


                                <td> <a href="/app/visao/admin/processos/resultados.php?id=<?php echo $processo['id']?>" class="btn btn-default btn-sm"> <i class="fa fa-eye"> </i> Resultados</a></td>
                            </tr>
                        <?php endwhile;?>


                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <?php require_once("../components/rodape.php")?>

</body>

</html>
