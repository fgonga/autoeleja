<?php require_once("../../controlador/resumo/index.php")?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <?php require_once("components/cabecalho.php")?>
  <title>AutaEleja</title>

</head>

<body>

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
            <h4 class="page-title">Inicio</h4>
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
<div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            <a href="/app/visao/admin/processos/lista.php" class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-view-dashboard"></i>
                  </h1>
                  <h6 class="text-white">Processos</h6>
                </div>
              </div>
            </a>
            <!-- Column -->
            <a href="/app/visao/admin/processos/resultados.php" class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-chart-areaspline"></i>
                  </h1>
                  <h6 class="text-white">Resultados</h6>
                </div>
              </div>
            </a>
            <!-- Column -->
            <a href="/app/visao/admin/eleitores/lista.php" class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-collage"></i>
                  </h1>
                  <h6 class="text-white">Eleitores</h6>
                </div>
              </div>
            </a>
            <!-- Column -->
            <a href="/app/visao/admin/candidatos/lista.php" class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-border-outside"></i>
                  </h1>
                  <h6 class="text-white">Candidatos</h6>
                </div>
              </div>
            </a>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-arrow-all"></i>
                  </h1>
                  <h6 class="text-white">Ajuda</h6>
                </div>
              </div>
            </div>

          </div>
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Analise de votos</h4>
                      <h5 class="card-subtitle">Votos este mês</h5>
                    </div>
                  </div>
                  <div class="row">
                    <!-- column -->
                    <div class="col-lg-9">
                      <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-line-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="1108" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 886.9px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 283px; left: 24px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 283px; left: 94px; text-align: center;">1</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 283px; left: 165px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 283px; left: 236px; text-align: center;">3</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 283px; left: 307px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 283px; left: 378px; text-align: center;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 283px; left: 449px; text-align: center;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 283px; left: 520px; text-align: center;">7</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 283px; left: 591px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 283px; left: 662px; text-align: center;">9</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 283px; left: 730px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 283px; left: 801px; text-align: center;">11</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 246px; left: 0px; text-align: right;">-1.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 190px; left: 0px; text-align: right;">-0.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 134px; left: 5px; text-align: right;">0.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 78px; left: 5px; text-align: right;">0.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 23px; left: 5px; text-align: right;">1.0</div></div></div><canvas class="flot-overlay" width="1108" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 886.9px; height: 300px;"></canvas><div class="legend"><div style="position: absolute; width: 48.9px; height: 38.975px; top: 14px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:14px;right:13px;;font-size:smaller;color:#AFAFAF"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(238,121,81);overflow:hidden"></div></div></td><td class="legendLabel">sin(x)</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(79,185,240);overflow:hidden"></div></div></td><td class="legendLabel">cos(x)</td></tr></tbody></table></div></div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row">
                        <div class="col-6">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1"><?php echo $tc;?></h5>
                            <small class="font-light">Total candidatos</small>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-plus fs-3 font-16"></i>
                            <h5 class="mb-0 mt-1"><?php echo $te;?></h5>
                            <small class="font-light">Total de eleitores</small>
                          </div>
                        </div>
                        <div class="col-6 mt-3">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-cart fs-3 mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1"><?php echo $tp;?></h5>
                            <small class="font-light">Total processos</small>
                          </div>
                        </div>
                        <div class="col-6 mt-3">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-tag fs-3 mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1"><?php echo $tv;?></h5>
                            <small class="font-light">Total votos</small>
                          </div>
                        </div>
                        <div class="col-6 mt-3">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-table fs-3 mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1"><?php echo $tu;?></h5>
                            <small class="font-light">Total utilizadores</small>
                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- column -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->

          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
        </div>
      </div>
      <?php require_once("components/rodape.php")?>

    </body>

    </html>
