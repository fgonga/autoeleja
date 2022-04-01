<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <?php require_once("components/cabecalho.php")?>
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

 
    <?php require_once("components/menuesquerdo.php")?>
    <?php require_once("components/menusuperior.php")?>
  
    <div class="page-wrapper">
      
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard-2</h4>
            <div class="ml-auto text-right">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Introdução</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
     
      <div class="container-fluid">

      </div>
      <?php require_once("components/rodape.php")?>

    </body>

    </html>