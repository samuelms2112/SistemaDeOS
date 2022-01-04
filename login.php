<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <meta name="theme-color" content="#3c8dbc">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Admin</b>Sanas</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Acesso a Área Restrita</p>

      <form>
        <div class="form-group has-feedback">
          <input type="text" id="login" class="form-control" placeholder="Login">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="pass" class="form-control" placeholder="Senha">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="button" id="btnEntrar" class="btn btn-primary btn-block btn-flat">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <script>
    $('#btnEntrar').click(function() {
      var login = $('#login').val();
      var pass = $('#pass').val();

      $.ajax({
        method: "POST",
        url: "/controller/SessionController.php",
        data: {
          login: login,
          pass: pass
        }
      }).done(function(resposta) {
        alert(resposta)
        if (resposta == 1) {
          window.location.replace('/');
        } else if (resposta != 1) {
          mostraDialogo('Login e/ou Senha errados', 'alert-danger')
        }
      }).fail(function() {
        console.log('falha ao Carregar Tabela');
        mostraDialogo('Login e/ou Senha errados', 'alert-danger');
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