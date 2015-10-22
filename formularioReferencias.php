<?php 
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Estudio SocioEconomico</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <!-- Alertify -->
    <script src="alertifyjs/alertify.js"></script>
    <link rel="stylesheet" href="alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="alertifyjs/css/themes/bootstrap.css">
    <!-- Alertif -->
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
	<script type="text/javascript">
    $(document).ready(function(){
    	$('#insertar').click(function() {
    		if ($('#telefono').val().length != 10 || isNaN($('#telefono').val())) {
              $('#telefono').css('border-color','#FF0000');
               alertify.alert('Campo incorrecto!','El número de teléfono tiene que tener 10 numeros.');
              return false;
            }
        });
    });
	</script>
	<script type="text/javascript">//REFERENCIAS
        var uniqueId = 1;
        $(function() {
             $('.addRow').click(function() {
             
                 var copy = $("#cosponsors").clone(true).appendTo("#myForm");
                 var cosponsorDivId = 'cosponsors_' + uniqueId;
                 copy.attr('id', cosponsorDivId );

                 var deleteLink = $("<input type='button' class='btn btn-danger' value='Elimiar' /><br>");
                 deleteLink.appendTo(copy);
                 deleteLink.click(function(){
                     copy.remove();
                 });
                 
                 $('#myForm div:last').find('input').each(function(){
                    $(this).attr('id', $(this).attr('id') + ''+ uniqueId); 
                    $(this).attr('name', $(this).attr('name') + ''+ uniqueId);                      
                 });

                  $('#myForm div:last').find('select').each(function(){
                    $(this).attr('id', $(this).attr('id') + ''+ uniqueId); 
                    $(this).attr('name', $(this).attr('name') + ''+ uniqueId);                      
                 });
                
                 uniqueId++;  
             });
        });
    </script>
   </head>

  <body>
	<div class="menu-area">
			<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="index.html">Principal</a>
							</li>
							<li><a href="formularioIdentificacion.php">Comenzar...</a></li>
						</ul>
					</div><!-- /dl-menuwrapper -->
	</div>	
	  
	 <!-- Altas -->
	  <section id="contact" class="home-section bg-white">
	  	<div class="container">
			<div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>ESTUDIO SOCIOECONOMICO</h2>
					 <p><label>REFERENCIAS PERSONALES</label></p>
					 <p>CANDIDATO: <label><?php echo $_SESSION["clave"]; ?></label></p>
					</div>
				  </div>
			</div>

	  		<div class="row">
	  			<div class="col-md-offset-1 col-md-10">
					<form action="models/modeloReferencias.php" method="post" class="form-horizontal" role="form">
					  <input type="hidden" class="form-control" id="inputClave" placeholder="Clave" name="clave" required value="<?php echo $_SESSION["clave"]; ?>">

					 <div class="form-group" id="container">
                        <div class="col-md-offset-2 col-md-8" id="myForm">
                              <div id="cosponsors">
									<br><table class="table table-bordered">
										<tr class="active">
											<td colspan="2"><label>Nombre:</label></td>
											<td colspan="2"><label>Ocupacion:</label></td>
										</tr>
										<tr>
											<td colspan="2"><input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" required></td>
											<td colspan="2"><input type="text" class="form-control" id="ocupacion" placeholder="Ocupacion" name="ocupacion" required></td>
										</tr>
										<tr>
											<td><label>Tipo de relacion</label></td>
											<td><select type="text" class="form-control" id="tipo" placeholder="Tipo de relacion" name="tipo" required>
												  	<option selected value="">Seleccione relacion.</option>
												  	<option value="Amigo">Amigo</option>
												  	<option value="Familiar">Familiar</option>
												  	<option value="Antiguo Jefe">Antiguo Jefe</option>
												  	<option value="Compañero de trabajo">Compañero de trabajo</option>
							                    </select></td>
											<td><label>Tiempo de conocerlo</label></td>
											<td><input type="text" class="form-control" id="tiempo" placeholder="Tiempo de conocerlo" name="tiempo" required></td>
										</tr>
										<tr class="active">
											<td colspan="2"><label>Direccion</label></td>
											<td colspan="2"><label>Telefono</label></td>
										</tr>
										<tr>
											<td colspan="2"><input type="text" class="form-control" id="direccion" placeholder="Direccion" name="direccion" required></td>
											<td colspan="2"><input type="tel"  class="form-control" id="telefono" placeholder="Telefono" name="telefono" required></td>
										</tr>
										<tr class="active">
											<td><label>Comentarios</label></td>
											<td colspan="3"><input type="text" class="form-control" id="comentarios" placeholder="Comentarios" name="comentario" required></td>
										</tr>
									</table>
	                                <br><input type="button" class="addRow btn btn-success" value="Agregar Referencia" />
                              </div>
                        </div>
                    </div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
						<br><input type="submit" id="insertar" value="SIGUIENTE..." name="guardar" class="btn btn-theme btn-lg btn-block">
	                    <input type="reset" id="cancelar" value="CANCELAR" name="cancelar" class="btn btn-theme btn-lg btn-block">
						</div>
					  </div>
					</form>
	            </div>
		    </div>

			<div class="row mar-top30 ">
				<div class="col-md-offset-2 col-md-8">
					<h5>Tienes dudas contactanos por nuestras redes sociales.</h5>
					<ul class="social-network">
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
					</ul>
				</div>				
			</div>

	  	</div>
	  </section>  

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy;2015 <a href="http://corseprin.com.mx/">Corseprin </a></p>
					<p>Copyright &copy;2015 <a href="Login-ajax/index.php">INGRESAR AL SISTEMA</a></p>
				</div>
			</div>		
		</div>	
	</footer>
	 
	 <!-- js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
  	
</html>