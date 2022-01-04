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
        Categoria
        </h1>
        <ol class="breadcrumb">
          <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Categoria</li>
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
                  <th style="min-width: 134px;">Ações</th>
                </tr>
              </thead>
              <tbody id="CorpoTabela">
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <div class="modal fade" id="modal-create">
      <div class="modal-dialog">
        <div class="modal-content" style="border-top: 3px solid #00a65a;">
          <form>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title">Nova Categoria</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="inputNameCreate">Nome</label>
                <input type="text" class="form-control" id="NNome" name="name">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="FecharModal" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
              <button type="button" id="SalvarSetor" class="btn btn-success">Salvar</button>
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
          <form>
            <input type="hidden" name="id">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title">Editar Categoria</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="inputNameUpdate">#</label>
                <input type="text" class="form-control" id="Ecod" name="cod" readonly="readonly">
              </div>
              <div class="form-group">
                <label for="inputNameUpdate">Nome</label>
                <input type="text" class="form-control" id="Enome" name="name">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="FecharModalE" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
              <button type="button" id="EditarSetor" class="btn btn-info">Editar</button>
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
    $("#menu08").addClass("active");
  </script>

  <script>
    function GerarTabela() {


      $('#CorpoTabela').empty(); //Limpando a tabela
      $.ajax({
        method: "GET",
        url: "/controller/CategoriaController.php",
        data: {
          tipoGet: 'SelectTodos'
        }
      }).done(function(resposta) {
        console.log(resposta)
        resposta = JSON.parse(resposta);
        for (var i = 0; resposta.length > i; i++) {
          //Adicionando registros retornados na tabela
          $('#CorpoTabela').append('<tr id="tr' + resposta[i]["idsetor"] + '">' +
            '<td scope="col">' + resposta[i]["idcategoria"] + '</td>' +
            '<td scope="col">' + resposta[i]["descricao"] + '</td>' +
            '<td scope="col">' +
            '<button type="button" class="btn btn-xs btn-info abrirModalEditar" data-toggle="modal" data-target="#modal-update"><i class="fa fa-pencil"></i> Editar</button>&nbsp;' +
            '</td></tr>');
        }
      }).fail(function() {
        console.log('falha ao Carregar Tabela');
        mostraDialogo('falha ao Carregar Tabela', 'alert-danger');
      });
    }

    GerarTabela()

    $('#SalvarSetor').click(function() {

      var NNome = $("#NNome").val();

      $.ajax({
        method: "POST",
        url: "/controller/CategoriaController.php",
        data: {
          descricao: NNome
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

      var Ecod = $("#Ecod").val();
      var Enome = $("#Enome").val();

      $.ajax({
        method: "PUT",
        url: "/controller/CategoriaController.php",
        data: {
          cod: Ecod,
          descricao: Enome
        }
      }).done(function(resposta) {
        $("#FecharModalE").trigger('click');
        GerarTabela();
        mostraDialogo(resposta, 'alert-success');
      }).fail(function() {
        $("#FecharModalE").trigger('click');
        mostraDialogo('falha ao Editar', 'alert-danger');
      });
    });


    $(function() {
      $(document).on('click', '.abrirModalEditar', function(e) {
        e.preventDefault;
        var tdobj = $(this).closest('tr').find('td');
        var cod = tdobj[0].innerHTML;
        var nome = tdobj[1].innerHTML;

        $('#Ecod').val(cod);
        $('#Enome').val(nome);

      });
    });


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