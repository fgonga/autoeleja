
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
                    <h4 class="page-title">Lista de eleitores</h4>
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
                            <th scope="col" class="text-white">Telefone</th>
                            <th scope="col" class="text-white">Idade</th>
                            <th scope="col" class="text-white">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Felizardo buta</td>
                            <td>+244 935934923</td>
                            <td>18</td>
                            <td>  <a href="" class="btn btn-default btn-sm"> <i class="fa fa-eye"> </i> Visualizar</a>
                                <a href="" class="btn btn-default btn-sm"> <i class="fa fa-eye"> </i> Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Maria francisca</td>
                            <td>+244 935934923</td>
                            <td>25</td>
                            <td>  <a href="" class="btn btn-default btn-sm"> <i class="fa fa-eye"> </i> Visualizar</a>
                                <a href="" class="btn btn-default btn-sm"> <i class="fa fa-eye"> </i> Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Fatima dos Santos</td>
                            <td>+244 935934923</td>
                            <td>40</td>
                            <td>  <a href="" class="btn btn-default btn-sm"> <i class="fa fa-eye"> </i> Visualizar</a>
                                <a href="" class="btn btn-default btn-sm"> <i class="fa fa-eye"> </i> Editar</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php require_once("../components/rodape.php")?>

</body>

</html>
