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
        $(document).ready(function() {
            $('#btnAdd').click(function() {
                var num = $('.clonedInput').length;
                var newNum  = new Number(num + 1);
 
                var newElem = $('#input' + num).clone().attr('id', 'input' + newNum);
     
                newElem.children(':first').attr('id', 'name' + newNum).attr('name', 'name' + newNum);
                $('#input' + num).after(newElem);
                $('#btnDel').attr('disabled','');
 
                if (newNum == 5)
                    $('#btnAdd').attr('disabled','disabled');
            });
 
            $('#btnDel').click(function() {
                var num = $('.clonedInput').length;
 
                $('#input' + num).remove();
                $('#btnAdd').attr('disabled','');
 
                if (num-1 == 1)
                    $('#btnDel').attr('disabled','disabled');
            });
 
            $('#btnDel').attr('disabled','disabled');
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
						<p><label>INVESTIGACION SOCIAL Y FAMILIAR</label></p>
						<p>CANDIDATO: <label><?php echo $clave; ?></label></p>
					</div>
				</div>
			</div>
<form id="myForm">
    <div id="input1" class="clonedInput">
        Name: <input type="text" name="name1" id="name1" />
    </div>
 
    <div>
        <input type="button" id="btnAdd" value="add another name" />
        <input type="button" id="btnDel" value="remove name" />
    </div>
</form>
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