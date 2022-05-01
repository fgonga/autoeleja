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
                        <h4 class="page-title">Novo candidato</h4>
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
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="/app/controlador/candidato/novo.php">
                            <div class="card-body">
                                <h5 class="card-title">Informações do candidato</h5>
                                <hr>
                                <?php
                                $mensagem = $_GET['mensagem'];
                                if ($_GET['erro'] == 'nao') {
                                    echo "
                                    <div class='alert alert-success' role='alert'>
                                    $mensagem
                                    </div>";
                                }elseif($_GET['erro'] == 'sim'){
                                 echo "
                                 <div class='alert alert-danger' role='alert'>
                                 $mensagem
                                 </div>";
                             }

                             ?>
                             <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="fname" class="">BI</label>



                                        <input type="text" name="bi" class="form-control" placeholder="Bilhete de identidade" aria-label="Username" aria-describedby="basic-addon1">

                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nome"  class="">Nome</label>
                                    <input type="text" id="nome" name="nome" class="form-control">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="telefone"  class="">Telefone</label>
                                    <input type="number" id="telefone" name="telefone" class="form-control">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="foto" class="">Foto</label>
                                    <input type="file" name="foto" id="foto" class="form-control">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="residencia" >Residência</label>
                                    <input type="text" name="residencia" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="genero" >Género</label>
                                    <select name="genero" id="genero" class="form-control">
                                        <option value="Masculino"  selected>Masculino</option>
                                        <option value="Femenino" >Feminino</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="estado_civil" >Estado civil</label>
                                    <select name="estado_civil" id="estado_civil" class="form-control">
                                        <option value="Solteiro" selected>Solteiro</option>
                                        <option value="Casado" >Casado</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nascimento" class="">Data de nascimento</label>
                                    <input type="date" class="form-control"   name="nascimento" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="provincia" class="">Província</label>
                                    <select  id="provincia" class="form-control" name="provincia">
                                      <option value="Benguela">Benguela</option>
                                  </select>
                              </div>
                              <div class="form-group col-md-3">
                                <label for="municipio" class="">Município</label>
                                <select  id="municipio" class="form-control" name="municipio">
                                  <option value="Lobito">Lobito</option>
                              </select>
                          </div>

                          <div class="form-group col-md-3">
                            <label for="pai" class="">Pai</label>
                            <input type="text" name="pai" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="mae" class="">Mae</label>
                            <input type="text" name="mae" class="form-control">
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
