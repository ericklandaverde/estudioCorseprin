<?php 
session_start();
?>
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
	<!-- js -->
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	
    <script src="js/modernizr.custom.js"></script>
    <script type="text/javascript">
        var uniqueId = 1;
        $(function() {
             $('.addRow').click(function() {
             
                 var copy = $("#cosponsors").clone(true).appendTo("#myForm");
                 var cosponsorDivId = 'cosponsors_' + uniqueId;
                 copy.attr('id', cosponsorDivId );

                 var deleteLink = $("<input type='button' class='btn btn-danger' value='Elimiar' />");
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
    <script type="text/javascript">
        var deporteId = 1;
        $(function() {
             $('.addRowDeportes').click(function() {
             
                 var copy = $("#idDeporte").clone(true).appendTo("#idDeportes");
                 var cosponsorDivId = 'idDeporte_' + deporteId;
                 copy.attr('id', cosponsorDivId );

                 var deleteLink = $("<input type='button' class='btn btn-danger' value='Elimiar' />");
                 deleteLink.appendTo(copy);
                 deleteLink.click(function(){
                     copy.remove();
                 });
                 
                 $('#idDeportes div:last').find('input').each(function(){
                    $(this).attr('id', $(this).attr('id') + ''+ deporteId); 
                    $(this).attr('name', $(this).attr('name') + ''+ deporteId);                      
                 });
                
                 deporteId++;  
             });
        });
    </script>
</head>

<body>
	<!-- Altas -->
	<section id="contact" class="home-section bg-white">
		<div class="container">
			
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
						<h2>ESTUDIO SOCIOECONOMICO</h2>
						<p><label>INVESTIGACION SOCIAL Y FAMILIAR</label></p>
						<p>CANDIDATO: <label><?php echo $_SESSION["clave"]; ?></label></p>
					</div>
				</div>
			</div>
           
   <div class="row">
        <div class="col-md-offset-1 col-md-10">

			<form id="formulario" action="models/modeloInvSocialFamiliar.php" method="post" class="form-horizontal" role="form">
				    <input type="hidden" class="form-control" id="inputClave" placeholder="Clave" name="clave" required value="<?php echo $_SESSION["clave"]; ?>">
                    <label> a) Datos Familiares (Personas con las que vive) </label>
                    <div class="form-group" id="container">
                        <h5>Familiares: </h5>
                        <span class="help-block">
                            Minimo agregar un familiar | Maximo 10
                        </span>
                        <div id="myForm">
                       <!--  <div class="col-md-offset-2 col-md-8" id="myForm"> -->
                                <div id="cosponsors">
                                <br><label>Familiar:</label>
                                <select type="text" class="form-control" id="parentesco" placeholder="Parentesco" name="parentesco" title="Campo parentesco" required>
                                    <option selected value="">Seleccione un parentesco</option>
                                    <option value="Padres">Padres</option>
                                    <option value="Hijo(a)">Hijo(a)</option>
                                    <option value="Hermanos">Hermanos</option>
                                    <option value="Esposo(a)">Esposo(a)</option>
                                </select>
                                <input  type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre" title="Campo nombre" required/>
                                <input  type="number" class="form-control" id="edad"name="edad" placeholder="Edad" title="Campo edad" required/>
                                <input  type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ocupacion" title="Campo ocupacion" required/>
                                <label>Depende economicamente  :</label>
                                <input type="radio" name="depende" value="Si" placeholder="Selecciona una opcion" checked required>Si
                                <input type="radio" name="depende" value="No" placeholder="Selecciona una opcion" required>No
                                <br><input type="button" class="addRow btn btn-primary" value="Agregar familiar" />
                                </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
<!--                         <div class="col-md-offset-2 col-md-8"> -->
                            <label> b) Actividades Sociales: </label><br>
                            <br><table class="table table-hover">
                                <tr class="success">
                                    <td colspan="2"><label>¿Que religion profesa?</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <select type="text" class="form-control" id="inputClave" placeholder="Religion" name="religion" required>
                                                <option selected value="">Seleccione una opcion</option>
                                                <option value="Creyente">Creyente</option>
                                                <option value="Ateo">Ateo</option>
                                                <option value="Catolico">Catolico</option>
                                                <option value="Cristiano">Cristiano</option>
                                                <option value="Testigo de Jehová">Testigo de Jehová</option>
                                                <option value="Otra Religion">Otra Religion</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Actividades<label></td>
                                    <td><label>Frecuencia Anual</label></td>
                                </tr>
                                <tr>
                                    <td><label>Eventos sociales (Familiares o amigos)<label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="sociales" required></td>
                                </tr>
                                <tr>
                                    <td><label>Eventos sociales (Familiares o amigos)<label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="comunitarios" required></td>
                                </tr>
                            </table><br>
<!--                         </div> -->
                    </div>
                    
                    <div class="form-group">
<!--                         <div class="col-md-offset-2 col-md-8"> -->
                            <label> c) Actividades Culturales: </label>
                            <br><table class="table table-hover">
                                <tr class="success">
                                    <td><label>Actividades<label></td>
                                    <td><label>Frecuencia Anual</label></td>
                                </tr>
                                <tr>
                                    <td><label>Museos: <label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="museos" required></td>
                                </tr>
                                <tr>
                                    <td><label>Teatro: <label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="teatro" required></td>
                                </tr>
                                <tr>
                                    <td><label>Festivales Culturales: <label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="culturales" required></td>
                                </tr>
                                <tr>
                                    <td><label>Zonas arqueologicas: <label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="arqueologicas" required></td>
                                </tr>
                            </table>
<!--                         </div> -->
                    </div>

                     <script type="text/javascript">
                    function mostrar(){
                        document.getElementById('contenedorDeportes').style.display = 'block';}
                    </script>
                    <script type="text/javascript">
                    function ocultar(){
                        document.getElementById('contenedorDeportes').style.display = 'none';}
                    </script>

                    <div class="alert alert-warning">
                        <label> ¿Practicas algun deporte?:</label>
                        Si: <input type="radio" name="myRadioButton" onclick="mostrar()" checked/>
                        No: <input type="radio" name="myRadioButton" onclick="ocultar()"/>
                    </div>

                    <div class="form-group" id="contenedorDeportes">
                        <label> d) Actividades Deportivas: </label>
                        <span class="help-block">
                            Agregar minimo 1 deporte | Maximo 2
                        </span>
                        <div id="idDeportes">
                            <div id="idDeporte">
                            <br><table class="table table-hover">
                            <tr class="success">
                                <td><label>Deporte<label></td>
                                <td><label>Lugar</label></td>
                                <td><label>Frecuencia</label></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" id="deporte" placeholder="Deporte" name="deporte"></td>
                                <td><input type="text" class="form-control" id="lugar" placeholder="Lugar" name="lugar"></td>
                                <td><input type="text" class="form-control" id="frecuencia" placeholder="Frecuencia" name="frecuencia"></td>
                            </tr>
                            </table><br>
                            <input type="button" class="addRowDeportes btn btn-primary" value="Agregar Deporte" />
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <!-- <div class="col-md-offset-2 col-md-8"> -->
                            <label> e) Actividades Recreativas: </label>
                            <table class="table table-hover">
                                <tr class="success">
                                    <td><label>Actividad<label></td>
                                    <td><label>Frecuencia anual</label></td>
                                </tr>
                                <tr>
                                    <td><label>Vacaciones</label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="vacaciones" required></td>
                                </tr>
                                <tr>
                                    <td><label>Plazas publicas</label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="publicas" required></td>
                                </tr>
                                <tr>
                                    <td><label>Parques naturales</label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="naturales" required></td>
                                </tr>
                                <tr>
                                    <td><label>Parques de diversiones</label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="diversiones" required></td>
                                </tr>
                                <tr>
                                    <td><label>Cine</label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="cine" required></td>
                                </tr>
                            </table>
                       <!--  </div> -->
                    </div>

                    <div class="form-group">
<!-- 		                <div class="col-md-offset-2 col-md-8"> -->
			                    <label> f)  Pasatiempos : </label>
			                    <table class="table table-hover">
			                        <tr class="success">
			                            <td><label>Actividad<label></td>
			                            <td><label>Frecuencia anual</label></td>
			                        </tr>
			                        <tr>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Actividad" name="actividadA" required></td>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="frecuenciaA" required></td>
			                        </tr>
			                        <tr>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Actividad" name="actividadB" required></td>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="frecuenciaB" required></td>
			                        </tr>
			                    </table>
<!-- 			             </div> -->
		            </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <input type="submit" id="insertar" value="SIGUIENTE..." name="guardar" class="btn btn-theme btn-lg btn-block">
                            <input type="reset" id="cancelar" value="CANCELAR" name="cancelar" class="btn btn-theme btn-lg btn-block">
                        </div>
                    </div>
                    </form>
                <div>
            <div>
			
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
		
		</div> <!-- container -->
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
    <!-- <script src="js/jquery.js"></script> -->
	<!-- <script src="js/bootstrap.min.js"></script>  -->
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>

	</html>