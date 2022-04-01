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
            <form class="form-horizontal" method="POST" action="/app/controlador/processos/novo.php">
              <div class="card-body">
                <h5 class="card-title">Informações do processo</h5>
                <hr>
                <div class="row">
                  
                 
                  <div class="form-group col-md-3">
                    <label for="fname" class="">Inicio</label>
                    
                    <input type="date" class="form-control" id="fname" placeholder="First Name Here">
                  </div>
                  
                  <div class="form-group col-md-3">
                    <label for="lname" class="">Fim</label>
                    
                    <input type="date" class="form-control" id="lname" placeholder="Last Name Here">
                  </div>
                  
                  <div class="form-group col-md-3">
                    <label for="lname" class="">Provincia</label>
                    
                    
                    <select name="" id="" class="form-control">
                     <option value=""></option>
                   </select>
                 </div>
                 
                 <div class="form-group col-md-3">
                  <label for="email1" class="">Municipio</label>
                  <select name="" id="" class="form-control">
                    <option value=""></option>
                  </select>
                  
                </div>
                <div class="col-md-12">
                  <h5>Candidatos que vão concorrer</h5>
                   <hr>
                  <table class="table  table-sm table-striped table-bordered">
                    <thead>
                      <tr class="bg-default">
                        <th>#</th>
                        <th>Id</th>
                        <th>Nome</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="form-control"></td>
                        <td>1</td>
                        <td>Tainara Mita</td>
                      </tr>
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