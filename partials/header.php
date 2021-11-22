<style>

.nav-link[data-toggle].collapsed:after {
    content: " ▾";
}
.nav-link[data-toggle]:not(.collapsed):after {
    content: " ▴";
}
</style>

<!-- Main Header -->
<header class="main-header">

<!-- Logo -->
<a href="index.html" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini">SANNAS</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg">SANNAS</span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- The user image in the navbar-->
          <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs">Fulano Junior</span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
            <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">

            <p>
              Fulano Junior
              <small>fulano@hcode.com.br</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Perfil</a>
            </div>
            <div class="pull-right">
              <a href="#" class="btn btn-default btn-flat">Sair</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Fulano Junior</p>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU</li>
    <!-- Optionally, you can add icons to the links -->
    <li id="menu01">
      <a href="index.php">
        <i class="fa fa-home"></i>
        <span>Tela Inicial</span>
      </a>
    </li>
    <li id="menu02">
      <a href="cliente.php">
        <i class="fa fa-user"></i>
        <span>Clientes</span>
      </a>
    </li>
    <li id="menu03">
      <a href="produtos.php">
        <i class="fa fa-calendar-check-o"></i>
        <span>Produtos</span>
      </a>
    </li>
    <li id="menu04">
      <a href="Servicos.php">
        <i class="fa fa-comments"></i>
        <span>serviços</span>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed text-truncate" id="MenuCadastro" href="#submenu1" data-toggle="collapse" data-target="#submenu1">
          <i class="fa fa-plus"></i> 
          <span class="d-none d-sm-inline">Demais Cadastros</span>
        </a>
        <div class="collapse" id="submenu1" aria-expanded="false">
            <ul  class="sidebar-menu">
            <li id="menu05">
                  <a style="padding-left: 25px;" href="Setor.php">
                    <i class="fa fa-users"></i>
                    <span>Setor</span>
                  </a>
                </li>
                <li id="menu06">
                  <a style="padding-left: 25px;" href="funcionario.php">
                    <i class="fa fa-users"></i>
                    <span>Funcionario</span>
                  </a>
                </li>
                <li id="menu07">
                  <a style="padding-left: 25px;" href="users.php">
                    <i class="fa fa-users"></i>
                    <span>Usuário</span>
                  </a>
                </li>
            </ul>
        </div>
      </li>
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>
