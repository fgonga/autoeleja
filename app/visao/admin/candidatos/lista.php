

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
                        <h4 class="page-title">Lista de candidatos</h4>
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
                       <input type="text" class="form-control mb-2" placeholder="Pesquisar candidato">
                       <table class="table table-bordered">
                          <thead>
                              <tr class="bg-primary">
                                  <th scope="col" class="text-white">Id</th>
                                  <th scope="col" class="text-white">Nome</th>
                                  <th scope="col" class="text-white">BI</th>
                                  <th scope="col" class="text-white">Genero</th>
                                  <th scope="col" class="text-white">Data de nascimento</th>
                                  <th scope="col" class="text-white">Telefone</th>
                                  <th scope="col" class="text-white">Ações</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php while($candidato = mysqli_fetch_array($candidatos)):?>
                                  <tr>
                                      <td><?php echo $candidato["id"];?></td>
                                      <td><?php echo $candidato["nome"];?></td>
                                      <td><?php echo $candidato["bi"];?></td>
                                      <td><?php echo $candidato["genero"]?></td>
                                      <td><?php echo $candidato["nascimento"]?></td>
                                      <td><?php echo $candidato["telefone"]?></td>

                                      <td>
                                          <button class="btn btn-primary btn-sm">
                                              <i class="fa fa-edit"></i> Editar
                                          </button>
                                          <a href="/app/controlador/candidato/eliminar.php?id=<?php echo $candidato['id']?>" class="btn btn-danger btn-sm">
                                              <i class="fa fa-trash"></i> Eliminar
                                          </a>
                                      </td>
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
