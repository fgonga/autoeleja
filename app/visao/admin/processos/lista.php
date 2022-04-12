
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php require_once("../components/cabecalho.php")?>
    <title>AutoEleja</title>

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
                            <th scope="col" class="text-white">Estado</th>
                            <th scope="col" class="text-white">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Eleições 2022 Benguela/Lobito</td>
                            <td>29/03/2022</td>
                            <td>30/03/2022</td>
                            <td>Benguela</td>
                            <td>Lobito</td>
                            <td><label for="" class="badge badge-primary">Normal</label>


                            </td>
                            <td>  <a href="" class="btn btn-default btn-sm"> <i class="fa fa-eye"> </i> Resultados</a></td>
                        </tr>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <?php require_once("../components/rodape.php")?>

</body>

</html>