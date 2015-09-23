<!DOCTYPE html>
<html lang="es">
  
<head>
    <meta charset="utf-8">
    <title>Acceso administradores.</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.7.2.min.js"></script>
  <script> 
    $(function(){
      $('#login-form').submit(function(e){
        e.preventDefault();
        $('#login-form #alert').remove();
        $('#load').show();

        $.post('ajax.php', $(this).serialize(), function(resp) {
          if (!resp.error){
              $('#login-form #alert').remove();
              $('#load').hide();

              var ok = '<p id="alert" class="alert alert-success" align="left"><b>¡Bienvenido!, en unos segundos se redireccionara</b></p>';
              setTimeout('window.location.href="../Administrador.php"', 1500);


              $('.login-actions').before(ok);
            }
            else{
              $('#login-form #alert').remove();
              $('#load').hide();
              var error = '<p id="alert" class="alert alert-error" align="left"><b>¡Email/Contraseña no validos!</b></p>';

              $('.login-actions').before(error);

            };          
        },'json');
      });
    });
  </script>

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				Panel de Administrador			
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="signup.html" class="">
							¿Aún no tienes una cuenta?
						</a>
						
					</li>
					
					<li class="">						
						<a href="/index.html" class="">
							<i class="icon-chevron-left"></i>
							Regresar a la pagina principal
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->

<div class="account-container">
	
	<div class="content clearfix">
		
		<form id="login-form" action="" method="post">
		
			<h1>Acceso a miembros</h1>		
			
			<div class="login-fields">
				
				<p>Por favor proporcione sus datos</p>
				
				<div class="field">
					<label for="email">Username</label>
					<input type="email" id="email" name="email" value="" placeholder="Correo Electronico" class="login username-field" required/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Contraseña:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field" required/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions"  id="msj">
                    <div align="left">
                    <img src="loading.gif" alt="Cargando" class="hide" id="load" />
                    </div>
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Mantenerme conectado</label>
				</span>
				<input type="submit" Value="Ingresar" class="button btn btn-success btn-large">
				<!--<button class="button btn btn-success btn-large">Sign In</button>-->
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->



<div class="login-extra">
	<a href="#">Reestablecer contraseña</a>
</div> <!-- /login-extra -->


<script src="js/bootstrap.js"></script>
<!--<script src="js/signin.js"></script>-->


</body>

</html>
