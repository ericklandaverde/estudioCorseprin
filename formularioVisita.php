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
</head>

<body>
	<!-- Altas -->
	<section id="contact" class="home-section bg-white">
		<div class="container">
			
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
						<h2>ESTUDIO SOCIOECONOMICO</h2>
						<p><label>VISITA DOMICILIARIA</label></p>
						<p>CANDIDATO: <label><?php echo $_SESSION["clave"]; ?></label></p>
					</div>
				</div>
			</div>
           
   <div class="row">
        <div class="col-md-offset-1 col-md-10">

			<form id="formulario" action="#" method="post" class="form-horizontal" role="form">
				    <input type="hidden" class="form-control" id="inputClave" placeholder="Clave" name="clave" required value="<?php echo $_SESSION["clave"]; ?>">

                    <div class="form-group">
<!--                     <div class="col-md-offset-2 col-md-8"> -->
                        <label> Visita domiciliaria: </label><br>
                        <br><table class="table table-hover">
                        
                        </table><br>
<!--                    </div> -->
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