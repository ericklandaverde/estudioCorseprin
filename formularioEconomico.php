<!DOCTYPE html>
<html>
  <head>
    <title>Estudio SocioEconomico</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
   </head>

  <body>
	<div class="menu-area">
			<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="index.html">Principal</a>
							</li>
							<li><a href="formularioIdentificacion.html">Comenzar...</a></li>
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
					 <p><label>INFORMACION ECONOMICA</label></p>
					 <p>CANDIDATO: </p>
                         <p>Enlace rapido atras <a href="http://estudiocorseprin.pe.hu/formularioReferencias.html">Atras </a></p>
                         <p>Enlace rapido adelante <a href="http://estudiocorseprin.pe.hu/formularioInvSocialFamiliar.html">Adelante </a></p>
					</div>
				  </div>
			  </div>

	  		<div class="row">
	  			<div class="col-md-offset-1 col-md-10">
					<form action="formularioLaboral.php" method="post" class="form-horizontal" role="form">
					  <div class="form-group">
						<div id="capa" class="col-md-offset-2 col-md-8">
							<label>Ingresos: </label>
                            <table>
                            	<tr>
                            		<td><label>Persona.</label></td>
                            		<td><label>Fuente <br>(Trabajo, Pension, Beca, Etc)</label><br></td>
                            		<td><label>Monto Mensual.</label></td>
                            	</tr>
                            	<tr>							
                            	 <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="persona" required></td>
							     <td><input type="text" class="form-control" id="inputClave" placeholder="Trabajo" name="fuente" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr>							
                            	 <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="persona" required></td>
							     <td><input type="text" class="form-control" id="inputClave" placeholder="Pension" name="fuente" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr>							
                            	 <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="persona" required></td>
							     <td><input type="text" class="form-control" id="inputClave" placeholder="Beca" name="fuente" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr>
                            	 <td></td>
                            	 <td></td>
                            	 <td><input type="number" class="form-control" id="inputClave" placeholder="Total" name="total" required></td>
                            	</tr>
                            </table>
						</div>
					  </div>
					  <div class="form-group">
						<div id="capa" class="col-md-offset-2 col-md-8">
							<label>Egresos (Gastos): </label>
							<table>
								<tr>
									<td><label>Persona.</label></td>
                            		<td><label>Concepto</label><br></td>
                            		<td><label>Monto Mensual.</label></td>
								</tr>
								<tr id="1">							
                            	 <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="persona" required></td>
							     <td><input type="text" class="form-control" id="inputClave" placeholder="Alimentacion" name="fuente" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr id="2">							
                            	 <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="persona" required></td>
							     <td><input type="text" class="form-control" id="inputClave" placeholder="Ropa y calzado" name="fuente" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr id="3">							
                            	 <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="persona" required></td>
							     <td><input type="text" class="form-control" id="inputClave" placeholder="Transporte" name="fuente" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr id="4">							
                            	 <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="persona" required></td>
							     <td><input type="text" class="form-control" id="inputClave" placeholder="Servicos" name="fuente" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr id="5">							
                            	 <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="persona" required></td>
							     <td><input type="text" class="form-control" id="inputClave" placeholder="Gastos Escolares" name="fuente" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr id="6">							
                            	 <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="persona" required></td>
							     <td><input type="text" class="form-control" id="inputClave" placeholder="Actividades deportivas" name="fuente" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr id="7">							
                            	 <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="persona" required></td>
							     <td><input type="text" class="form-control" id="inputClave" placeholder="Actividades creativas" name="fuente" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr id="8">							
                            	 <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="persona" required></td>
							     <td><input type="text" class="form-control" id="inputClave" placeholder="Otros" name="fuente" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr id="total">							
                            	 <td></td>
							     <td></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Total" name="monto" required></td>
                            	</tr>
							</table>
						</div>
					  </div>
					  <div class="form-group">
						<div id="capa" class="col-md-offset-2 col-md-8">
                            <table>
                            	<tr>
                            		<td><label>Resumen</label></td>
                            	</tr>
                            	<tr>
                            		<td><label>Personas que viven con el investigado:</label></td>
                            		<td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr>
                            		<td><label>Personas que dependen economicamente de el:</label></td>
                            		<td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr>
                            		<td><label>Total de ingresos:</label></td>
                            		<td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            	<tr>
                            		<td><label>Total de egresos:</label></td>
                            		<td><input type="number" class="form-control" id="inputClave" placeholder="Monto Mensual" name="monto" required></td>
                            	</tr>
                            </table>
						</div>
					  </div>
					  <div id="Credito"class="form-group">
						<div id="capa" class="col-md-offset-2 col-md-8">
                            <table>
                            	<tr>
                            		<td><label>CREDITOS</label></td>
                            	</tr>
                            	<tr>							
                            	 <td><label>Concepto</label></td>
							     <td><label>Mensualidad</label></td>
							     <td><label>Plazo</label></td>
							     <td><label>Saldo</label></td>
                            	</tr>
                            	<tr>							
                            	 <td><input type="text" class="form-control" id="inputClave" placeholder="Concepto" name="persona" required></td>
							     <td><input type="text" class="form-control" id="inputClave" placeholder="Mensualidad" name="fuente" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Plazo" name="monto" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Saldo" name="monto" required></td>
                            	</tr>
                            	<tr>							
                            	 <td><input type="text" class="form-control" id="inputClave" placeholder="Concepto" name="persona" required></td>
							     <td><input type="text" class="form-control" id="inputClave" placeholder="Mensualidad" name="fuente" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Plazo" name="monto" required></td>
							     <td><input type="number" class="form-control" id="inputClave" placeholder="Saldo" name="monto" required></td>
                            	</tr>
                            	<tr>
                            		<td><label>SEGURO</label></td>
                            	</tr>
                            	<tr>
                            		<td><label>De vida: </label></td>
                            		<td><input type="radio" name="seguroVida" value="Si" placeholder="Selecciona una opcion" required>Si</td>
                            		<td><input type="radio" name="seguroVida" value="No" placeholder="Selecciona una opcion" checked required>No</td>
                            		<td><label>Monto Mensual: </label></td>
                            		<td><input type="number" class="form-control" id="inputClave" placeholder="Saldo" name="monto" required></td>
                            	</tr>
                            	<tr>
                            		<td><label>De gastos medicos mayores: </label></td>
                            		<td><input type="radio" name="seguroVidaMedicos" value="Si" placeholder="Selecciona una opcion"  required>Si</td>
                            		<td><input type="radio" name="seguroVidaMedicos" value="No" placeholder="Selecciona una opcion" checked required>No</td>
                            		<td><label>Monto Mensual: </label></td>
                            		<td><input type="number" class="form-control" id="inputClave" placeholder="Saldo" name="monto" required></td>
                            	</tr>
                            	<tr>
                            		<td><label>De automovil: </label></td>
                            		<td><input type="radio" name="seguroAutomovil" value="Si" placeholder="Selecciona una opcion" required>Si</td>
                            		<td><input type="radio" name="seguroAutomovil" value="No" placeholder="Selecciona una opcion" checked required>No</td>
                            		<td><label>Monto Mensual: </label></td>
                            		<td><input type="number" class="form-control" id="inputClave" placeholder="Saldo" name="monto" required></td>
                            	</tr>
                            	<tr>
                            		<td><label>Contra accidentes: </label></td>
                            		<td><input type="radio" name="seguroAccidentes" value="Si" placeholder="Selecciona una opcion" required>Si</td>
                            		<td><input type="radio" name="seguroAccidentes" value="No" placeholder="Selecciona una opcion" checked required>No</td>
                            		<td><label>Monto Mensual: </label></td>
                            		<td><input type="number" class="form-control" id="inputClave" placeholder="Saldo" name="monto" required></td>
                            	</tr>
                            </table>

                            <label>Activos:</label><br>
                            <table>
                            	<tr>
                            		<td><label>PROPIEDADES: </label></td>
                            	</tr>
                            	<tr>
                            		<td><label>Tipo: </label></td>
                            	</tr>
                            	<tr>
                            		<td><input type="checkbox" name="tipoPropiedad" value=" Casa"> Casa</td>
                            		<td><input type="checkbox" name="tipoPropiedad" value=" Terreno"> Terreno</td>
                            		<td><input type="checkbox" name="tipoPropiedad" value=" Departamento"> Departamento</td>
                            	</tr>
                            	<tr>
                            		<td><label>Ubicacion: </label></td>
                            		<td><label>Valor estimado: </label></td>
                            	</tr>
                            	<tr>
                            		<td><input type="text" class="form-control" id="inputClave" placeholder="Ubicacion" name="ubicacion" required></td>
                            		<td><input type="number" class="form-control" id="inputClave" placeholder="Valor estimado" name="valorestimado" required></td>
                            	</tr>
                            	<tr>
                            		<td><label>Tipo</label></td>
                            		<td><label>Modelo</label></td>
                            		<td><label>Valor estimado</label></td>
                            	</tr>
                            	<tr>
                            		<td><input type="text" class="form-control" id="inputClave" placeholder="Tipo" name="tipo" required></td>
                            		<td><input type="text" class="form-control" id="inputClave" placeholder="Modelo" name="ubicacion" required></td>
                            		<td><input type="number" class="form-control" id="inputClave" placeholder="Valor estimado" name="valorestimado" required></td>
                            	</tr>

                            </table>
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-md-offset-2 col-md-8">
						<input type="submit" id="insertar" value="SIGUIENTE..." name="guardar" class="btn btn-theme btn-lg btn-block">
	                    <input type="reset" id="cancelar" value="CANCELAR" name="cancelar" class="btn btn-theme btn-lg btn-block">
                        <button type="button" onClick="window.location='formularioReferencias.html'" class="btn btn-theme btn-lg btn-block">Regresar</button>
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