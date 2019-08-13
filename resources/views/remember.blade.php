
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BolTour | Log in </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/adminlte/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/adminlte/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/adminlte/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('homeuser') }}"><b>Patrimonios</b>BOLIVIA</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Complete el Formulario de Validación Usuario</p>
   
    <form action="validation" method="post">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-book"></i></span>
                  <input type="text" class="form-control" name='name' placeholder=" Ingrese Nombres ">
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-book"></i></span>
                  <input type="text" class="form-control" name='last_name' placeholder=" Ingrese Apellido(s) ">
                </div>
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-clone"></i></span>
                  <input type="text" class="form-control" name='email' placeholder="Ingrese Email / Correo Electronico">
                </div>
                <br>
<!--
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-bus"></i></span>
                  <input type="password" class="form-control" name='password' placeholder="Clave o Password">
                </div>
                <br>
-->             

                <div class="row">
                  <div class="col-sm-6">
                  <!--<span class="input-group-addon"><i class="fa fa-book"></i></span>-->
                  
                  <input type="text" class="form-control" name='ident_card' placeholder=" Ingrese Numero de Identificación ">
                  </div>
                <!--</div>
                <br>
                
              <div class="input-group">-->
                <div class="col-sm-6">
                    <select class="form-control" name="born_in">
                      <option class="" value="">Selecione Ciudad</option>
                      <option class="Beni" value="Beni">Beni</option>
                      <option class="Chuquisaca" value="Chuquisaca">Chuquisaca</option>
                      <option class="Cochabamba" value="Cochabamba">Cochabamba</option>
                      <option class="La Paz" value="La Paz">La Paz</option>
                      <option class="Oruro" value="Oruro">Oruro</option>
                      <option class="Pando" value="Pando">Pando</option>
                      <option class="Potosi" value="Potosi">Potosi</option>
                      <option class="Santa Cruz" value="Santa Cruz">Santa Cruz</option>
                      <option class="Tarija" value="Tarija">Tarija</option>
                    </select>
                  </div>
                  <!--<span class="input-group-addon"><i class="fa fa-book"></i></span>
                  <input type="text" class="form-control" name='born_in' placeholder=" Extendido en Ciudad ">-->
                </div>
                <br>

              <div class="input-group date" date-provide="datepicker">
                    
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input class="date form-control" type="text" name="date_born" autocomplete="false">       
                </div>
                <br>



                <div class="box-footer">
                  <a href="{{url('user')}}" method="get" class="btn btn-danger " role="button" aria-pressed="true"><i class="fa fa-arrow-left"></i> Cancelar</a>
                          <button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Enviar</button>
                </div>

    </form>

 
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="/adminlte/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminlte/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{185329422138243}',
      cookie     : true,
      xfbml      : true,
      version    : '{latest-api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
</script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
</body>
</html>

