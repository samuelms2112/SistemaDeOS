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
          Mais Infos
        </h1>
        <ol class="breadcrumb">
          <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Cliente</li>
          <li class="active">Mais Infos</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Dados</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <form>
              <div class="modal-body">
                <div class="form-group">
                  <label for="inputNameCreate">CPF - CNPJ</label>
                  <input type="text" class="form-control" id="DCPF" name="DCPF" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="inputNameCreate">Nome</label>
                  <input type="text" class="form-control" id="DNome" name="DNome" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="inputNameCreate">Telfone</label>
                  <input type="text" class="form-control" id="DTelfone" name="DTelfone" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="inputNameCreate">E-mail</label>
                  <input type="text" class="form-control" id="DEmail" name="DEmail" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="inputNameCreate">Obs:</label>
                  <textarea rows="3" cols="30" class="form-control" id="DObs" name="DObs"></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" id="EditarOBS" class="btn btn-success EditarOBS" readonly="readonly">Salvar</button>
              </div>
            </form>
          </div>
          <!-- /.box-body -->
        </div>

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Endereço</h3>
            <a href="#" class="btn btn-xs pull-right btn-success" data-toggle="modal" data-target="#modal-create"><i class="fa fa-plus"></i> Novo</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Endereco</th>
                  <th>CEP</th>
                  <th>Numero</th>
                  <th>Bairro</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Complemento</th>
                  <th>Situacao</th>
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
              <h4 class="modal-title">Novo Endereco</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="inputNameCreate">CEP</label>
                <input type="text" class="form-control" id="NCEP" name="NCEP">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Endereco</label>
                <input type="text" class="form-control" id="NEndereco" name="NEndereco">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Numero</label>
                <input type="text" class="form-control" id="NNumero" name="NNumero">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Bairro</label>
                <input type="text" class="form-control" id="NBairro" name="NBairro">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Cidade</label>
                <input type="text" class="form-control" id="NCidade" name="NCidade">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">UF</label>
                <input type="text" class="form-control" id="NUF" name="NUF">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Complemento</label>
                <input type="text" class="form-control" id="NComplemento" name="NComplemento">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Situação</label>
                <select name="" class="form-control" id="NSituacao">[
                  <option value="">Selecione</option>
                  <option value="Atual">Atual</option>
                  <option value="Antigo">Antigo</option>
                  <option value="Secundário">Secundário</option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="FecharModalS" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
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
              <h4 class="modal-title">Editar Endereco</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="inputNameCreate">CEP</label>
                <input type="text" class="form-control" id="ECEP" name="ECEP">
                <input type="text" style="display: none;" class="form-control" id="EIdEndereco" name="EIdEndereco">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Endereco</label>
                <input type="text" class="form-control" id="EEndereco" name="EEndereco">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Numero</label>
                <input type="text" class="form-control" id="ENumero" name="ENumero">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Bairro</label>
                <input type="text" class="form-control" id="EBairro" name="EBairro">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Cidade</label>
                <input type="text" class="form-control" id="ECidade" name="ECidade">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">UF</label>
                <input type="text" class="form-control" id="EUF" name="EUF">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Complemento</label>
                <input type="text" class="form-control" id="EComplemento" name="EComplemento">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Situação</label>
                <select name="" class="form-control" id="ESituacao">[
                  <option value="">Selecione</option>
                  <option value="Atual">Atual</option>
                  <option value="Antigo">Antigo</option>
                  <option value="Secundário">Secundário</option>
                </select>
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
    $("#menu02").addClass("active");

    var url_string = window.location.href;
    var url = new URL(url_string);
    var data = url.searchParams.get("idcliente"); //pega o value

    function TrazerDados() {
      $.ajax({
        method: "GET",
        url: "/controller/ClienteController.php",
        data: {
          tipoGet: 'Select',
          cod: data
        }
      }).done(function(resposta) {
        console.log(resposta)
        resposta = JSON.parse(resposta);
        $('#DCPF').val(resposta[0]["cnpj_cpf"]);
        $('#DNome').val(resposta[0]["nome"]);
        $('#DTelfone').val(resposta[0]["fone"]);
        $('#DEmail').val(resposta[0]["email"]);
        $('#DObs').val(resposta[0]["obs"]);
      }).fail(function() {
        console.log('falha ao Carregar Tabela');
        mostraDialogo('falha ao Carregar Tabela', 'alert-danger');
      });
    }

    function GerarTabela() {


      $('#CorpoTabela').empty(); //Limpando a tabela
      $.ajax({
        method: "GET",
        url: "/controller/EnderecoController.php",
        data: {
          tipoGet: 'SelectTodos',
          data: data
        }
      }).done(function(resposta) {
        console.log("oiii")

        console.log(resposta)
        resposta = JSON.parse(resposta);

        for (var i = 0; resposta.length > i; i++) {
          //Adicionando registros retornados na tabela
          $('#CorpoTabela').append('<tr id="tr' + resposta[i]["idEndereco"] + '">' +
            '<td scope="col" style="display: none;">' + resposta[i]["idEndereco"] + '</td>' +
            '<td scope="col">' + resposta[i]["endereco"] + '</td>' +
            '<td scope="col">' + resposta[i]["cep"] + '</td>' +
            '<td scope="col">' + resposta[i]["numero"] + '</td>' +
            '<td scope="col">' + resposta[i]["bairro"] + '</td>' +
            '<td scope="col">' + resposta[i]["cidade"] + '</td>' +
            '<td scope="col">' + resposta[i]["estado"] + '</td>' +
            '<td scope="col">' + resposta[i]["complemento"] + '</td>' +
            '<td scope="col">' + resposta[i]["situacao"] + '</td>' +
            '<td scope="col">' +
            '<button type="button" class="btn btn-xs btn-info abrirModalEditar" data-toggle="modal" data-target="#modal-update"><i class="fa fa-pencil"></i> Editar</button>&nbsp;' +
            '</td></tr>');
        }
      }).fail(function() {
        console.log('falha ao Carregar Tabela');
        mostraDialogo('falha ao Carregar Tabela', 'alert-danger');
      });
    }

    TrazerDados()
    GerarTabela()

    $('#NCEP').on('keydown', function(event) {
      if (event.keyCode == 13 || event.keyCode == 9) {
        var NCEP = $("#NCEP").val();

        $.ajax({
          method: "GET",
          url: "https://viacep.com.br/ws/" + NCEP + "/json/"
        }).done(function(resposta) {
          console.log(resposta);
          console.log(resposta["cep"]);
          $('#NCEP').val(resposta["cep"]);
          $('#NEndereco').val(resposta["logradouro"]);
          $('#NBairro').val(resposta["bairro"]);
          $('#NUF').val(resposta["uf"]);
          $('#NCidade').val(resposta["localidade"]);
        }).fail(function() {
          $("#FecharModal").trigger('click');
          mostraDialogo('falha ao Procurar', 'alert-danger');
        });
      }

    });

    $('#ECEP').on('keydown', function(event) {
      if (event.keyCode == 13 || event.keyCode == 9) {
        var ECEP = $("#ECEP").val();

        $.ajax({
          method: "GET",
          url: "https://viacep.com.br/ws/" + ECEP + "/json/"
        }).done(function(resposta) {
          console.log(resposta);
          console.log(resposta["cep"]);
          $('#ECEP').val(resposta["cep"]);
          $('#EEndereco').val(resposta["logradouro"]);
          $('#EBairro').val(resposta["bairro"]);
          $('#EUF').val(resposta["uf"]);
          $('#ECidade').val(resposta["localidade"]);
        }).fail(function() {
          $("#FecharModal").trigger('click');
          mostraDialogo('falha ao Procurar', 'alert-danger');
        });
      }

    });

    $('#SalvarSetor').click(function() {

      var NCEP = $("#NCEP").val();
      var NEndereco = $("#NEndereco").val();
      var NNumero = $("#NNumero").val();
      var NBairro = $("#NBairro").val();
      var NCidade = $("#NCidade").val();
      var NUF = $("#NUF").val();
      var NComplemento = $("#NComplemento").val();
      var NSituacao = $("#NSituacao").val();
      var idPessoa = data

      $.ajax({
        method: "POST",
        url: "/controller/EnderecoController.php",
        data: {
          NCEP: NCEP,
          NEndereco: NEndereco,
          NNumero: NNumero,
          NBairro: NBairro,
          NCidade: NCidade,
          NUF: NUF,
          NComplemento: NComplemento,
          NSituacao: NSituacao,
          idPessoa: idPessoa,
        }
      }).done(function(resposta) {
        $(".FecharModalS").trigger('click');
        mostraDialogo(resposta, 'alert-success');
        GerarTabela()
      }).fail(function() {
        $(".FecharModal").trigger('click');
        mostraDialogo('falha ao Salvar', 'alert-danger');
      });
    });

    $('#EditarSetor').click(function() {

      var ECEP = $("#ECEP").val();
      var EIdEndereco = $("#EIdEndereco").val();
      var EEndereco = $("#EEndereco").val();
      var ENumero = $("#ENumero").val();
      var EBairro = $("#EBairro").val();
      var ECidade = $("#ECidade").val();
      var EUF = $("#EUF").val();
      var EComplemento = $("#EComplemento").val();
      var ESituacao = $("#ESituacao").val();
      var idPessoa = data

      $.ajax({
        method: "PUT",
        url: "/controller/EnderecoController.php",
        data: {
          ECEP: ECEP,
          EEndereco: EEndereco,
          ENumero: ENumero,
          EBairro: EBairro,
          ECidade: ECidade,
          EUF: EUF,
          EComplemento: EComplemento,
          ESituacao: ESituacao,
          idPessoa: idPessoa,
          EIdEndereco,
          EIdEndereco
        }
      }).done(function(resposta) {
        $(".FecharModalE").trigger('click');
        mostraDialogo(resposta, 'alert-success');
        GerarTabela()
      }).fail(function() {
        $(".FecharModalE").trigger('click');
        mostraDialogo('falha ao Salvar', 'alert-danger');
      });
    });

    $('#EditarOBS').click(function() {

      var DObs = $("#DObs").val();
      var idPessoa = data

      $.ajax({
        method: "PUT",
        url: "/controller/ClienteController.php",
        data: {
          DObs: DObs,
          idPessoa: idPessoa,
          tipoPut: 'editarOBS'
        }
      }).done(function(resposta) {
        $(".FecharModalE").trigger('click');
        mostraDialogo(resposta, 'alert-success');
        TrazerDados()
      }).fail(function() {
        $(".FecharModalE").trigger('click');
        mostraDialogo('falha ao Salvar', 'alert-danger');
      });
    });
  </script>

  <script>
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

    $(function() {
      $(document).on('click', '.abrirModalEditar', function(e) {
        e.preventDefault;
        var tdobj = $(this).closest('tr').find('td');
        var EIdEndereco = tdobj[0].innerHTML;
        var EEndereco = tdobj[1].innerHTML;
        var ECEP = tdobj[2].innerHTML;
        var ENumero = tdobj[3].innerHTML;
        var EBairro = tdobj[4].innerHTML;
        var ECidade = tdobj[5].innerHTML;
        var EUF = tdobj[6].innerHTML;
        var EComplemento = tdobj[7].innerHTML;
        var ESituacao = tdobj[8].innerHTML;

        console.log(tdobj);

        $('#EIdEndereco').val(EIdEndereco);
        $('#EEndereco').val(EEndereco);
        $('#ECEP').val(ECEP);
        $('#ENumero').val(ENumero);
        $('#EBairro').val(EBairro);
        $('#ECidade').val(ECidade);
        $('#EUF').val(EUF);
        $('#EComplemento').val(EComplemento);
        $('#ESituacao').val(ESituacao);

      });

    });
  </script>

</body>

</html>