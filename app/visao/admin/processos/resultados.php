<?php require_once("../../../controlador/processo/listar.php")?>
<?php require_once("../../../controlador/processo/resultados.php")?>
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
                    <h4 class="page-title">Resultados</h4>
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
                    <h6>Selecione processo</h6>
                    <form action="" onchange="this.submit()">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <select name="id" class="form-control" >
                                    <?php while($processo = mysqli_fetch_array($processos)):?>
                                        <option <?php echo $processo["id"] == $_GET["id"] ? "selected":""; ?> value="<?php echo $processo["id"]?>"><?php echo $processo["nome"]?></option>
                                    <?php endwhile;?>
                                </select>
                            </div>
                        </div>
                    </form>
                    <input type="text" class="form-control mb-2" placeholder="Pesquisar processo">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="bg-primary">
                            <th scope="col" class="text-white">Id</th>
                            <th scope="col" class="text-white">Nome</th>
                            <th scope="col" class="text-white">Votos</th>
                            <th scope="col" class="text-white">Posição</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Tainara Mita</td>
                            <td>2</td>
                            <td><label for="" class="badge badge-primary">1 - Lugar</label>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Tarcio Rebelo</td>
                            <td>1</td>
                            <td><label for="" class="badge badge-secondary">2 - Lugar</label>
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
