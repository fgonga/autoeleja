<?php require_once("../../../controlador/candidato/listar.php")?>

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
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="nome" class="">Nome</label>

                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inicio" class="">Inicio</label>

                                        <input type="date" name="inicio" class="form-control" id="inicio" placeholder="First Name Here">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="fim" class="">Fim</label>

                                        <input type="date" name="fim" class="form-control" id="fim" placeholder="Last Name Here">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="lname" class="">Província</label>
                                        <select name="provincia" id="" class="form-control">
                                            <option value="Benguela">Benguela</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="email1" class="">Município</label>
                                        <select name="municipio" id="" class="form-control">
                                            <option value="Lobito">Lobito</option>
                                        </select>

                                    </div>
                                    <div class="col-md-12">
                                        <h5>Candidatos que vão concorrer</h5>
                                        <hr>
                                        <table class="table  table-sm table-striped table-bordered">
                                            <thead>
                                                <tr class="bg-default">
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>BI</th>
                                                    <th>Nome</th>
                                                    <th>Proposta eleitorar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php while($candidato = mysqli_fetch_array($candidatos)):?>
                                                  <tr>
                                                    <td class="col-1">
                                                        <input type="hidden" name="candidato[<?php echo $candidato['id'];?>][id]" value="<?php echo $candidato['id'];?>">

                                                        <div class="custom-control custom-checkbox mr-sm-2">
                                                          <input type="checkbox" id="candidato_<?php echo $candidato['id'];?>" name="candidato[<?php echo $candidato['id'];?>][select]" class="custom-control-input" value='1'>

                                                          <label class="custom-control-label" for="candidato_<?php echo $candidato['id'];?>"></label>
                                                      </div>
                                                  </td>
                                                  <td ><?php echo $candidato["id"];?></td>
                                                  <td><?php echo $candidato["bi"]?></td>
                                                  <td><?php echo $candidato["nome"];?></td>
                                                  <td>

                                                    <textarea class="form-control" name="candidato[<?php echo $candidato['id'];?>][proposta]" placeholder="Proposta eleitoral" name="" id="" cols="30" rows="1"></textarea>
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
