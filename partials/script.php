<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- PACE -->
<script src="bower_components/PACE/pace.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: '#', success: function (result) {
        $('.ajax-content').html('<hr>Ajax Request Completed !')
      }
    })
  })

</script>


<script>
   $.ajax({
        method: "GET",
        url: "/controller/SessionController.php",
      }).done(function(resposta) {
        console.log(resposta)
        console.log(resposta)
        // if(resposta['status'] == 1){
        //   alert('entrei')
        // } else {
        //   window.location.replace('/login.php')
        // }
      }).fail(function() {
        console.log('falha ao Carregar Tabela');
        mostraDialogo('Login e/ou Senha errados', 'alert-danger');
      });
</script>