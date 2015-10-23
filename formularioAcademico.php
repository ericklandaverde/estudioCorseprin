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
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
    <script type="text/javascript">//ESTUDIOS
        var uniqueId = 1;
        $(function() {
             $('.addRowEstudio').click(function() {
             
                 var copy = $("#idEstudios").clone(true).appendTo("#estudios");
                 var cosponsorDivId = 'idEstudios_' + uniqueId;
                 copy.attr('id', cosponsorDivId );

                 var deleteLink = $("<input type='button' class='btn btn-danger' value='Elimiar'/>");
                 deleteLink.appendTo(copy);
                 deleteLink.click(function(){
                     copy.remove();
                 });
                 
                 $('#estudios div:last').find('input').each(function(){
                    $(this).attr('id', $(this).attr('id') + ''+ uniqueId); 
                    $(this).attr('name', $(this).attr('name') + ''+ uniqueId);                      
                 });

                  $('#estudios div:last').find('select').each(function(){
                    $(this).attr('id', $(this).attr('id') + ''+ uniqueId); 
                    $(this).attr('name', $(this).attr('name') + ''+ uniqueId);                      
                 });
                
                 uniqueId++;  
             });
        });
    </script>
    <script type="text/javascript">//CURSOS
        var uniqueId = 1;
        $(function() {
             $('.addRowCurso').click(function() {
             
                 var copy = $("#idCurso").clone(true).appendTo("#cursos");
                 var cosponsorDivId = 'idCurso_' + uniqueId;
                 copy.attr('id', cosponsorDivId );

                 var deleteLink = $("<input type='button' class='btn btn-danger' value='Elimiar' />");
                 deleteLink.appendTo(copy);
                 deleteLink.click(function(){
                     copy.remove();
                 });
                 
                 $('#cursos div:last').find('input').each(function(){
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
					 <p><label>INVESTIGACION ACADEMICA</label></p>
					 <span class="help-block">
	                     Agrega tu historial academico y cursos...
	                 </span>
					 <p>CANDIDATO: <label><?php echo $_SESSION["clave"]; ?></label></p>
					</div>
				  </div>
			</div>

	  		<div class="row">
	  			<div class="col-md-offset-1 col-md-10">
					<form action="models/modeloAcademico.php" method="post" class="form-horizontal" role="form">
					  <input type="hidden" class="form-control" id="inputClave" placeholder="Clave" name="clave" required value="<?php echo $_SESSION["clave"]; ?>">
                     
                    <div class="form-group" id="container">
                    	<div class="col-md-offset-2 col-md-8" id="estudios">
                    		 <span class="help-block">
	                              Minimo 1 Nivel de estudios| Maximo 4
	                         </span>
                    		<div id="idEstudios">
            					<table class="table">
            						<tr>
            							<td>ESTUDIOS</td>
            							<td>AÑO QUE CURSO</td>
            							<td>DOCUMENTO RECIBIDO</td>
            						</tr>
            						<tr>
            							<td><select type="text" class="form-control" id="nivel" placeholder="Tipo de relacion" name="nivel" required>
            								<option selected value="">Seleccione un nivel de estudios</option>
            								<option value="Primaria">Primaria</option>
            								<option value="Secundaria">Secundaria</option>
            								<option value="Preparatoria">Preparatoria</option>
            								<option value="Licenciatura">Licenciatura</option>
            							</select></td>
            							<td><input type="text" class="form-control" id="ano" placeholder="Año" name="ano" required></td>
            							<td><input type="text" class="form-control" id="documento" placeholder="Documento" name="documento" required></td>
            						</tr>
            					</table>
            					<input type="button" class="addRowEstudio btn btn-info" value="Agregar Nivel de estudios" />
                    		</div>
                    	</div>
                    </div>

                    <div class="form-group" id="container">
                        <div class="col-md-offset-2 col-md-8" id="cursos">
                        	<span class="help-block">
	                             Si no cuenta con cursos colocar un "NO" en los campos de texto | Maximo 4 cursos a registrar
	                         </span>
                            <div id="idCurso">
	                            <table class="table">
	                            	<tr>
	                            		<td>CURSOS</td>
	                            		<td>DURACION</td>
	                            		<td>DOCUMENTOS RECIBIDO</td>
	                            	</tr>
	                            	<tr>
	                            		<td><input type="text" class="form-control" id="curso" placeholder="Curso" name="curso" required></td>
	                            		<td><input type="text" class="form-control" id="duracion" placeholder="Duracion" name="duracion" required></td>
	                            		<td><input type="text" class="form-control" id="recibido" placeholder="Documento Recibido" name="recibido" required></td>
	                            	</tr>
	                            </table>
	                            <input type="button" class="addRowCurso btn btn-warning" value="Agregar Cursos " />
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