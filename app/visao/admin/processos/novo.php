<?php
require_once("../../../controlador/candidato/listar.php");
require_once "../../../controlador/utilizador/logado.php";
?>

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
                    <h4 class="page-title">Novo processo de votação</h4>
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
                    <form class="form-horizontal" method="POST" action="/app/controlador/processo/novo.php">
                        <div class="card-body">
                            <h5 class="card-title">Informações do processo</h5>
                            <hr>
                            <?php
                            @$mensagem = $_GET['mensagem'];
                            @$erro = $_GET['erro'];
                            if ( $erro == 'nao') {
                                echo "
                                    <div class='alert alert-success' role='alert'>
                                    $mensagem
                                    </div>";
                            }elseif( $erro == 'sim'){
                                echo "
                                 <div class='alert alert-danger' role='alert'>
                                 $mensagem
                                 </div>";
                            }

                            ?>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="nome" class="">Nome</label>

                                    <input required type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inicio" class="">Inicio</label>

                                    <input required type="date" name="inicio" class="form-control" id="inicio" placeholder="First Name Here">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="fim" class="">Fim</label>

                                    <input required type="date" name="fim" class="form-control" id="fim" placeholder="Last Name Here">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="lname" class="">Província</label>
                                    <select required name="provincia" id="provincia_input" class="form-control">
                                        <option value="" disabled selected>Selecione uma provincia</option>
                                        <option value="Benguela">Benguela</option>
                                        <option value="Bie">Bie</option>
                                        <option value="Cabinda">Cabinda</option>
                                        <option value="Cuando Cubango">Cuando Cubango</option>
                                        <option value="Cuanza-Norte">Cuanza-Norte</option>
                                        <option value="Cuanza-Sul">Cuanza-Sul</option>
                                        <option value="Cunene">Cunene</option>
                                        <option value="Huambo">Huambo</option>
                                        <option value="Huila">Huila</option>
                                        <option value="Luanda">Luanda</option>
                                        <option value="Luanda-Norte">Luanda-Norte</option>
                                        <option value="Luanda-Sul">Luanda-Sul</option>
                                        <option value="Malange">Malange</option>
                                        <option value="Moxico">Moxico</option>
                                        <option value="Namibe">Namibe</option>
                                        <option value="Uige">Uige</option>
                                        <option value="Zaire">Zaire</option>

                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="email1" class="">Município</label>
                                    <select id="municipios_input" required name="municipio" class="form-control">
                                        <option value="" disabled selected>Selecione um municipio</option>
                                    </select>

                                </div>
                                <div class="col-md-12">
                                    <h5>Candidatos que vão concorrer</h5>
                                    <hr>
                                    <table class="table  table-sm table-striped table-bordered">
                                        <thead>
                                        <tr class="bg-default">
                                            <th>#</th>

                                            <th>Nome</th>
                                            <th>BI</th>
                                            <th>Proposta eleitorar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php while($candidato = mysqli_fetch_array($candidatos)):?>
                                            <tr>
                                                <td class="col-1">
                                                    <input type="hidden" name="" value="<?php echo $candidato['id'];?>">

                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox"  id="candidato_<?php echo $candidato['id'];?>" name="candidato[<?php echo $candidato['id'];?>]" class="custom-control-input" >

                                                        <label class="custom-control-label" for="candidato_<?php echo $candidato['id'];?>"></label>
                                                    </div>
                                                </td>

                                                <td><?php echo $candidato["nome"];?></td>
                                                <td><?php echo $candidato["bi"]?></td>
                                                <td>

                                                    <textarea class="form-control" name="proposta[<?php echo $candidato['id'];?>]" placeholder="Proposta eleitoral" name="" id="" cols="30" rows="1"></textarea>
                                                </td>


                                            </tr>
                                        <?php endwhile;?>

                                        </tbody>
                                    </table>
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
