<?php
include_once dirname(__FILE__) . '/partials/head.php';
?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php
    include_once dirname(__FILE__) . '/partials/header.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tela Inicial
        </h1>
        <ol class="breadcrumb">
          <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Usuários</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box" onclick="window.location.href = '/reservations'" style="cursor:pointer">
              <span class="info-box-icon bg-aqua">
                <i class="ion ion-ios-calendar"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Reservas</span>
                <span class="info-box-number">90</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box" onclick="window.location.href = '/contacts'" style="cursor:pointer">
              <span class="info-box-icon bg-red">
                <i class="ion ion-ios-chatboxes"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Contatos</span>
                <span class="info-box-number">41</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box" onclick="window.location.href = '/menu'" style="cursor:pointer">
              <span class="info-box-icon bg-green">
                <i class="fa fa-cutlery"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Menu</span>
                <span class="info-box-number">3</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box" onclick="window.location.href = '/users'" style="cursor:pointer">
              <span class="info-box-icon bg-yellow">
                <i class="ion ion-ios-people-outline"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Usuários</span>
                <span class="info-box-number">2</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <?php
    include_once dirname(__FILE__) . '/partials/footer.php';
    ?>
  </div>

  <?php
  include_once dirname(__FILE__) . '/partials/script.php';
  ?>

<script>
    $("#menu01").addClass("active");
</script>

</body>

</html>