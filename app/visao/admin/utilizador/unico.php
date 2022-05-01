<?php require_once("../../../controlador/utilizador/listar.php");
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
                    <h4 class="page-title">Gestão de utilizadores</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Utilizadores</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gestão </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12 my-0">


                    <?php
                    $mensagem = $_GET['mensagem'];
                    if ($_GET['erro'] == 'nao') {
                        echo "
                            <div class='alert alert-success ' role='alert'>
                            $mensagem
                            </div>";
                    }elseif($_GET['erro'] == 'sim'){
                        echo "
                           <div class='alert alert-danger ' role='alert'>
                           $mensagem
                           </div>";
                    }

                    ?>
                </div>
                <div class="col-md-4">
                    <form class="card p-4" action="/app/controlador/utilizador/novo.php" method="post">

                        <div class="row">
                            <div class="form-groud col-12">
                                <label for="nome">Nome</label>
                                <input required  id="nome" type="text" name="nome" placeholder="Nome do utilizador" class="form-control"/>
                            </div>
                            <div class="form-groud col-12 mt-2">
                                <label for="senha">Senha</label>
                                <input  required id="senha" type="password" name="senha" placeholder="Senha" class="form-control"/>
                            </div>
                            <div class="form-groud col-12 mt-2">
                                <label for="tipo">Tipo</label>
                                <select  required name="tipo" id="tipo" class="form-control">
                                    <option value="a">Administrador</option>
                                    <option value="b">Brigadista</option>
                                </select>
                            </div>
                            <div class="form-groud col-12 mt-2">
                                <button class="btn btn-primary"><i class="fa fa-save"></i> Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <div class="card p-4">
                        <label>
                            <input type="text" class="form-control mb-2" placeholder="Pesquisar utilizador">
                        </label>
                        <table class="table table-bordered table-sm">
                            <thead>
                            <tr class="bg-primary">
                                <th scope="col" class="text-white">Código</th>
                                <th scope="col" class="text-white">Nome</th>
                                <th scope="col" class="text-white">Tipo</th>
                                <th scope="col" class="text-white">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                           <?php while($utilizador = mysqli_fetch_array($utilizadores)):?>
                                  <tr>
                                      <td><?php echo $utilizador["id"];?></td>
                                      <td><?php echo $utilizador["nome"];?></td>
                                      <td><?php echo $utilizador["tipo"] == "a"? "Administrador":"Brigadista" ?></td>
                                      <td>
                                          <a href="/app/controlador/utilizador/eliminar.php?id=<?php echo $utilizador['id']?>" class="btn btn-danger btn-xs">
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
        </div>
        <?php require_once("../components/rodape.php")?>
</body>

</html>
