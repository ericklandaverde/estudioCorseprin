<?php
include('conexion.php');
$conexion=conectar();

    //economicoIngresos
$clave=$_POST['clave'];
$personaUno=$_POST['personaUno'];
$montoUno=$_POST['montoUno'];
$personaDos=$_POST['personaDos'];
$montoDos=$_POST['montoDos'];
$personaTres=$_POST['personaTres'];
$montoTres=$_POST['montoTres'];
$totalIngresos=$_POST['totalIngresos'];

$sqlI="insert economicoIngresos(id_rfc, personaUno, montoUno, personaDos, montoDos, personaTres, montoTres, totalIngresos) 
values('$clave','$personaUno','$montoUno','$personaDos','$montoDos','$personaTres','$montoTres','$totalIngresos')";
$registroI=mysqli_query($conexion,$sqlI);

    //economicoEgresos
$clave=$_POST['clave'];
$personaUnoE=$_POST['personaUnoE'];
$montoUnoE=$_POST['montoUnoE'];
$personaDosE=$_POST['personaDosE'];
$montoDosE=$_POST['montoDosE'];
$personaTresE=$_POST['personaTresE'];
$montoTresE=$_POST['montoTresE'];
$personaCuatroE=$_POST['personaCuatroE'];
$montoCuatroE=$_POST['montoCuatroE'];
$personaCincoE=$_POST['personaCincoE'];
$montoCincoE=$_POST['montoCincoE'];
$personaSeisE=$_POST['personaSeisE'];
$montoSeisE=$_POST['montoSeisE'];
$personaSieteE=$_POST['personaSieteE'];
$montoSieteE=$_POST['montoSieteE'];
$personaOchoE=$_POST['personaOchoE'];
$montoOchoE=$_POST['montoOchoE'];
$totalEgresos=$_POST['totalEgresos'];

$sqlE="insert economicoEgresos(id_rfc, personaUnoE, montoUnoE, personaDosE, montoDosE, personaTresE, montoTresE, personaCuatroE, montoCuatroE, personaCincoE, montoCincoE, personaSeisE, montoSeisE, personaSieteE, montoSieteE, personaOchoE, montoOchoE, totalEgresos) 
values('$clave','$personaUnoE','$montoUnoE','$personaDosE','$montoDosE','$personaTresE','$montoTresE','$personaCuatroE','$montoCuatroE','$personaCincoE','$montoCincoE','$personaSeisE','$montoSeisE','$personaSieteE','$montoSieteE','$personaOchoE','$montoOchoE','$totalEgresos')";
$registroE=mysqli_query($conexion,$sqlE);

    //economicoResumen
$clave=$_POST['clave'];
$totalViven=$_POST['totalViven'];
$totalDependen=$_POST['totalDependen'];

$sqlR="insert economicoResumen(id_rfc, totalViven, totalDependen) 
values('$clave','$totalViven','$totalDependen')";
$registroR=mysqli_query($conexion,$sqlR);

    //economicoCreditos
$clave=$_POST['clave'];
$concepto=$_POST['concepto'];
$mensualidad=$_POST['mensualidad'];
$plazo=$_POST['plazo'];
$saldo=$_POST['saldo'];
$conceptoDos=$_POST['conceptoDos'];
$mensualidadDos=$_POST['mensualidadDos'];
$plazoDos=$_POST['plazoDos'];
$saldoDos=$_POST['saldoDos'];

$sqlC="insert economicoCreditos(id_rfc, concepto, mensualidad, plazo, saldo, conceptoDos, mensualidadDos, plazoDos, saldoDos) 
values('$clave','$concepto','$mensualidad','$plazo','$saldo','$conceptoDos','$mensualidadDos','$plazoDos','$saldoDos')";
$registroC=mysqli_query($conexion,$sqlC);

    //economicoSeguro
$clave=$_POST['clave'];
$vida=$_POST['vida'];
$montoS=$_POST['montoS'];
$medicos=$_POST['medicos'];
$montoDosS=$_POST['montoDosS'];
$automovil=$_POST['automovil'];
$montoTresS=$_POST['montoTresS'];
$accidentes=$_POST['accidentes'];
$montoCuatroS=$_POST['montoCuatroS'];

$sqlS="insert economicoSeguro(id_rfc, vida, montoS, medicos, montoDosS, automovil, montoTresS, accidentes, montoCuatroS) 
values('$clave','$vida','$montoS','$medicos','$montoDosS','$automovil','$montoTres','$accidentes','$montoCuatroS')";
$registroS=mysqli_query($conexion,$sqlS);

    //economicoActivos
$clave=$_POST['clave'];
$tipoPropiedad=$_POST['tipoPropiedad'];
$ubicacion=$_POST['ubicacion'];
$valorEstimadoT=$_POST['valorEstimadoT'];
$tipo=$_POST['tipo'];
$modelo=$_POST['modelo'];
$valorestimadoA=$_POST['valorestimadoA'];

$sqlA="insert economicoActivos(id_rfc, tipoPropiedad, ubicacion, valorEstimadoT, tipo, modelo, valorestimadoA) 
values('$clave','$tipoPropiedad','$ubicacion','$valorEstimadoT','$tipo','$modelo','$valorestimadoA')";
$registroA=mysqli_query($conexion,$sqlA);

    //$registroI $registroE $registroR $registroC $registroS $registroA
if(!$registroI && !$registroE && !$registroR && !$registroC && !$registroS && !$registroA )
{
    echo"
    <script language='javascript'>
    alert('ERROR AL GUARDAR DATOS')
    window.location='formularioEconomico.php'
    </script>";
    exit();
}
else
{
    echo"
    <script language='javascript'>
    alert('DATOS GUARDADOS CORRECTAMENTE')
    </script>";
}
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
                    $(this).attr('id', $(this).attr('id') + '_'+ uniqueId); 
                    $(this).attr('name', $(this).attr('name') + '_'+ uniqueId);                      
                 });

                  $('#myForm div:last').find('select').each(function(){
                    $(this).attr('id', $(this).attr('id') + '_'+ uniqueId); 
                    $(this).attr('name', $(this).attr('name') + '_'+ uniqueId);                      
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
		</div>
	</div>	

	<!-- Altas -->
	<section id="contact" class="home-section bg-white">
		<div class="container">
			
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
						<h2>ESTUDIO SOCIOECONOMICO</h2>
						<p><label>INVESTIGACION SOCIAL Y FAMILIAR</label></p>
						<p>CANDIDATO: <label><?php echo $clave; ?></label></p>
					</div>
				</div>
			</div>
           
   <div class="row">
        <div class="col-md-offset-1 col-md-10">

			<form id="formulario" action="formularioFinal.php" method="post" class="form-horizontal" role="form">
				    <label> a) Datos Familiares (Personas con las que vive) </label>
				    
<!--         		    <div class="form-group">
        		    	<div class="col-md-offset-2 col-md-8">
        				    <div id="input1" class="clonedInput">
        				    	<fieldset>
                                   <legend>Familiar</legend>   
        			    	       <table>
        			    	       	<tr>
                                        <td><label>Parentesco</label></td>
                                        <td><label>Nombre:</label></td>
                                    </tr>
                                    <tr>
                                    <td>                           
                                        <select type="text" class="form-control" id="parentesco1" placeholder="Parentesco" name="parentesco1" required>
                                           <option selected value="">Seleccione un parentesco</option>
                                           <option value="Hijo(a)">Hijo(a)</option>
                                           <option value="Esposo(a)">Esposa(a)</option>
                                           <option value="Padres">Padres</option>
                                           <option value="Hermanos">Padres</option>
                                       </select>
                                    </td>
                                    	<td><input type="text" class="form-control" id="name1" placeholder="Nombre" name="name1" required></td>
                                    </tr>
                                    <tr>
                                        <td><label>Edad</label></td>
                                        <td><label>Ocupacion:</label></td>
                                        <td><label>Depende economicamente:</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" id="edad1" placeholder="Edad" name="edad1" required></td>
                                        <td><input type="text" class="form-control" id="ocupacion1" placeholder="Ocupacion" name="ocupacion1" required></td>
                                        <td>
                                            <input type="radio" id="depende1" name="depende1" value="Si" placeholder="Selecciona una opcion" checked required>Si
                                            <input type="radio" id="depende1" name="depende1" value="No" placeholder="Selecciona una opcion" required>No
                                        </td>
                                    </tr>
                                   </table>
                                 </fieldset>
        				    </div>
        				</div>
        			</div> -->
                    <div class="form-group" id="container">
                        <h3>Familiares</h3>
                    <div class="col-md-offset-2 col-md-8" id="myForm">
                          <div id="cosponsors" style="padding:12px;">
                            <label>Familiar:</label>
                            <select type="text" class="form-control" id="parentesco" placeholder="Parentesco" name="parentesco" title="Campo parentesco" required>
                                                <option selected value="">Seleccione un parentesco</option>
                                                <option value="Hijo(a)">Hijo(a)</option>
                                                <option value="Esposo(a)">Esposa(a)</option>
                                                <option value="Padres">Padres</option>
                                                <option value="Hermanos">Padres</option>
                            </select>
                            <input  type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre" title="Campo nombre" required/>
                            <input  type="text" class="form-control" id="edad"name="edad" placeholder="Edad" title="Campo edad" required/>
                            <input  type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ocupacion" title="Campo ocupacion" required/>
                            <input type="radio" name="depende" value="Si" placeholder="Selecciona una opcion" checked required>Si
                            <input type="radio" name="depende" value="No" placeholder="Selecciona una opcion" required>No
                          </div>
                    </div>
                            <input type="button" class="addRow btn btn-primary" value="Agregar familiar" />
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <label> b) Actividades Sociales: </label>
                            <table>
                                <tr><label>¿Que religion profesa?</label></tr>
                                <tr>
                                    <select type="text" class="form-control" id="inputClave" placeholder="Religion" name="religion" required>
                                            <option selected value="">Seleccione una opcion</option>
                                            <option value="Creyente">Creyente</option>
                                            <option value="Ateo">Ateo</option>
                                            <option value="Catolico">Catolico</option>
                                            <option value="Cristiano">Cristiano</option>
                                            <option value="Testigo de Jehová">Testigo de Jehová</option>
                                            <option value="Otra Religion">Otra Religion</option>
                                    </select>
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
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <label> c) Actividades Culturales: </label>
                            <table>
                                <tr>
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
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <label> e) Actividades Recreativas: </label>
                            <table>
                                <tr>
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
                        </div>
                    </div>

                    <div class="form-group">
		                <div class="col-md-offset-2 col-md-8">
			                    <label> f)  Pasatiempos : </label>
			                    <table>
			                        <tr>
			                            <td><label>Actividad<label></td>
			                            <td><label>Frecuencia anual</label></td>
			                        </tr>
			                        <tr>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="actividadA" required></td>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="frecuenciaA" required></td>
			                        </tr>
			                        <tr>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="actividadB" required></td>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="frecuenciaB" required></td>
			                        </tr>
			                        <tr>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="actividadC" required></td>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="frecuenciaC" required></td>
			                        </tr>
			                    </table>
			             </div>
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