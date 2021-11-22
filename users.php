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
          Usuários
        </h1>
        <ol class="breadcrumb">
          <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Usuários</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Lista</h3>
            <a href="#" class="btn btn-xs pull-right btn-success" data-toggle="modal" data-target="#modal-create"><i class="fa fa-plus"></i> Novo</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nome</th>
                  <th>Login</th>
                  <th style="min-width: 134px;">Ações</th>
                </tr>
              </thead>
              <tbody id="CorpoTabela">
                <tr>
                  <td>1.</td>
                  <td>Hcode</td>
                  <td>contato@hcode.com.br</td>
                  <td>
                    <button type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-update"><i class="fa fa-pencil"></i> Editar</button>&nbsp;
                    <button type="button" class="btn btn-xs btn-warning btn-update" data-toggle="modal" data-target="#modal-update-password">
                      <i class="fa fa-lock"></i> Alterar Senha</button>&nbsp;
                    <button type="button" class="btn btn-xs btn-danger btn-delete"><i class="fa fa-trash"></i> Excluir</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <div class="modal fade" id="modal-update-password">
      <div class="modal-dialog">
        <div class="modal-content" style="border-top: 3px solid #f39c12;">
          <form method="post">
            <input type="hidden" name="id">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title">Alterar Senha</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="inputPassword">Nova Senha</label>
                <input type="password" class="form-control" id="inputPassword" name="password">
              </div>
              <div class="form-group">
                <label for="inputPasswordConfirm">Confirmar Senha</label>
                <input type="password" class="form-control" id="inputPasswordConfirm" name="passwordConfirm">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-warning">Salvar</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-create">
      <div class="modal-dialog">
        <div class="modal-content" style="border-top: 3px solid #00a65a;">
          <form method="post">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title">Novo Usuário</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="inputNameCreate">CPF / CNPJ</label>
                <input type="text" class="form-control" id="NCPF" name="name">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">ID Colaborador</label>
                <input type="text" class="form-control" id="NID" name="name" readonly="readonly">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Nome</label>
                <input type="text" class="form-control" id="NNOME" name="name" readonly="readonly">
              </div>
              <div class="form-group">
                <label for="inputEmailCreate">Login</label>
                <input type="email" class="form-control" id="NEMAIL" name="email">
              </div>
              <div class="form-group">
                <label for="inputPasswordCreate">Senha</label>
                <input type="password" class="form-control" id="NSENHA" name="password">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="FecharModal" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
              <button type="button" id="SalvarUser" class="btn btn-success">Salvar</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-update">
      <div class="modal-dialog">
        <div class="modal-content" style="border-top: 3px solid #00c0ef;">
          <form method="post">
            <input type="hidden" name="id">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title">Editar Usuário</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="inputNameUpdate">ID</label>
                <input type="text" class="form-control" id="EId" name="name" readonly="readonly">
              </div>
              <div class="form-group">
                <label for="inputNameUpdate">Nome</label>
                <input type="text" class="form-control" id="ENome" name="name" readonly="readonly">
              </div>
              <div class="form-group">
                <label for="inputEmailUpdate">Login</label>
                <input type="text" class="form-control" id="EEmail" name="email">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="FecharModalE" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
              <button type="button" id="EditarSetor" class="btn btn-info">Salvar</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-delete">
      <div class="modal-dialog">
        <div class="modal-content" style="border-top: 3px solid #DD4839;">
          <form method="post">
            <input type="hidden" name="id">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title">Editar Usuário</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="inputNameUpdate">ID</label>
                <input type="text" class="form-control" id="DId" name="name" readonly="readonly">
              </div>
              <div class="form-group">
                <label for="inputNameUpdate">Nome</label>
                <input type="text" class="form-control" id="DNome" name="name" readonly="readonly">
              </div>
              <div class="form-group">
                <label for="inputEmailUpdate">Login</label>
                <input type="text" class="form-control" id="DEmail" name="email" readonly="readonly">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="FecharModalD" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
              <button type="button" id="DeletarSetor" class="btn btn-danger">Excluir</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <?php
    include_once dirname(__FILE__) . '/partials/footer.php';
    ?>

  </div>

  <?php
  include_once dirname(__FILE__) . '/partials/script.php';
  ?>

  <script>
    function GerarTabela() {


      $('#CorpoTabela').empty(); //Limpando a tabela
      $.ajax({
        method: "GET",
        url: "/controller/UserController.php",
        data: {
          tipoGet: 'SelectTodos'
        }
      }).done(function(resposta) {
        resposta = JSON.parse(resposta);
        console.log(resposta)
        for (var i = 0; resposta.length > i; i++) {
          //Adicionando registros retornados na tabela
          $('#CorpoTabela').append('<tr id="tr' + resposta[i]["idusuario"] + '">' +
            '<td scope="col" >' + resposta[i]["idusuario"] + '</td>' +
            '<td scope="col" >' + resposta[i]["nome"] + '</td>' +
            '<td scope="col">' + resposta[i]["email"] + '</td>' +
            '<td scope="col">' +
            '<button type="button" class="btn btn-xs btn-info abrirModalEditar" data-toggle="modal" data-target="#modal-update"><i class="fa fa-pencil"></i> Editar</button>&nbsp;' +
            '<button type="button" class="btn btn-xs btn-danger btn-delete abrirModalDelete" data-toggle="modal" data-target="#modal-delete"><i class="fa fa-trash"></i> Excluir</button>' +
            '</td></tr>');
        }
      }).fail(function() {
        console.log('falha ao Carregar Tabela');
        mostraDialogo('falha ao Carregar Tabela', 'alert-danger');
      });

    }

    function MudaLinha(cod) {
      $.ajax({
        method: "GET",
        url: "/controller/UserController.php",
        data: {
          tipoGet: 'Select',
          cod: cod
        }
      }).done(function(resposta) {
        resposta = JSON.parse(resposta);
        $('#tr' + cod).html('' +
          '<td scope="col" >' + resposta[0]["idusuario"] + '</td>' +
          '<td scope="col" >' + resposta[0]["nome"] + '</td>' +
          '<td scope="col">' + resposta[0]["email"] + '</td>' +
          '<td scope="col">' +
          '<button type="button" class="btn btn-xs btn-info abrirModalEditar" data-toggle="modal" data-target="#modal-update"><i class="fa fa-pencil"></i> Editar</button>&nbsp;' +
          '<button type="button" class="btn btn-xs btn-danger btn-delete abrirModalDelete" data-toggle="modal" data-target="#modal-delete"><i class="fa fa-trash"></i> Excluir</button>' +
          '</td></tr>');
      }).fail(function() {
        console.log('falha ao Procurar');
      });
    }

    GerarTabela()

    $('#NCPF').on('keydown', function(event) {
      if (event.keyCode == 13 || event.keyCode == 9) {
        var NCPF = $("#NCPF").val();

        $.ajax({
          method: "GET",
          url: "/controller/FuncionarioController.php",
          data: {
            cpf: NCPF,
            tipoGet: 'selectNovoUser'
          }
        }).done(function(resposta) {
          console.log(resposta);
          resposta = JSON.parse(resposta);
          $('#NID').val(resposta[0]["idcolaborador"]);
          $('#NNOME').val(resposta[0]["nome"]);
        }).fail(function() {
          $("#FecharModal").trigger('click');
          mostraDialogo('falha ao Procurar', 'alert-danger');
        });
      }

    });

    $('#SalvarUser').click(function() {

      var NID = $("#NID").val();
      var NEMAIL = $("#NEMAIL").val();
      var NSENHA = $("#NSENHA").val();

      $.ajax({
        method: "POST",
        url: "/controller/UserController.php",
        data: {
          id: NID,
          login: NEMAIL,
          senha: NSENHA,
        }
      }).done(function(resposta) {
        $("#FecharModal").trigger('click');
        GerarTabela();
        mostraDialogo(resposta, 'alert-success');
      }).fail(function() {
        $("#FecharModal").trigger('click');
        mostraDialogo('falha ao Salvar', 'alert-danger');
      });
    });

    $('#EditarSetor').click(function() {

      var EID = $("#EId").val();
      var EEmail = $("#EEmail").val();

      $.ajax({
        method: "PUT",
        url: "/controller/UserController.php",
        data: {
          EID: EID,
          EEmail: EEmail
        }
      }).done(function(resposta) {
        $("#FecharModalE").trigger('click');
        MudaLinha(EID);
        mostraDialogo(resposta, 'alert-success');
      }).fail(function() {
        $("#FecharModalE").trigger('click');
        mostraDialogo('falha ao Editar', 'alert-danger');
      });
    });

    $('#DeletarSetor').click(function() {

      var Dcod = $("#DId").val();

      $.ajax({
        method: "DELETE",
        url: "/controller/UserController.php",
        data: {
          cod: Dcod
        }
      }).done(function(resposta) {
        $("#FecharModalD").trigger('click');
        GerarTabela();
        mostraDialogo(resposta, 'alert-success');
      }).fail(function() {
        $("#FecharModalE").trigger('click');
        mostraDialogo('falha ao Deletar', 'alert-danger');
      });
    });


    $(function() {
      $(document).on('click', '.abrirModalEditar', function(e) {
        e.preventDefault;
        var tdobj = $(this).closest('tr').find('td');
        var EId = tdobj[0].innerHTML;
        var Enome = tdobj[1].innerHTML;
        var Eemail = tdobj[2].innerHTML;

        console.log(tdobj);

        $('#EId').val(EId);
        $('#ENome').val(Enome);
        $('#EEmail').val(Eemail);

      });
    });

    $(function() {
      $(document).on('click', '.abrirModalDelete', function(e) {
        e.preventDefault;
        var tdobj = $(this).closest('tr').find('td');
        var DId = tdobj[0].innerHTML;
        var Dnome = tdobj[1].innerHTML;
        var Demail = tdobj[2].innerHTML;

        console.log(tdobj);

        $('#DId').val(DId);
        $('#DNome').val(Dnome);
        $('#DEmail').val(Demail);

      });
    });
  </script>

  <script>
    document.getElementById("MenuCadastro").click();
    $("#menu07").addClass("active");


    function mostraDialogo(mensagem, tipo) {

      // se não setar o tempo, o padrão é 4.5 segundos
      var tempo = 4500;

      // monta o css da mensagem para que fique flutuando na frente de todos elementos da página
      var cssMessage = "display: block; position: fixed; top: 0; left: 20%; right: 20%; width: auto; padding-top: 10px; z-index: 9999";
      var cssInner = "margin: 0 auto; box-shadow: 1px 1px 5px black; text-align:center";

      // monta o html da mensagem com Bootstrap
      var dialogo = "";
      dialogo += '<div id="message" style="' + cssMessage + '">';
      dialogo += '    <div class="alert ' + tipo + ' alert-dismissable" style="' + cssInner + '">';
      dialogo += '    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
      dialogo += mensagem;
      dialogo += '    </div>';
      dialogo += '</div>';

      // adiciona ao body a mensagem com o efeito de fade
      $("body").append(dialogo);
      $("#message").hide();
      $("#message").fadeIn(200);

      // contador de tempo para a mensagem sumir
      setTimeout(function() {
        $('#message').fadeOut(300, function() {
          $(this).remove();
        });
      }, tempo); // milliseconds

    }
  </script>

</body>

</html>