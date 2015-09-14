<html>
<head>
<CENTER><BR><BR><font size=5 color="blue"><b> DATOS A MODIFICAR </b></font>
<script language="JavaScript" type="text/javascript">
function cancelar()
{
    window.location="cambios.html"
}
</script>
</head>

<body>
<?php 
include("conexion.php");
$clave=$_POST['clave'];
if(empty($clave))
{
 echo"<script language='JavaScript' type='text/JavaScript'>
           window.location='cambios.html'
        </script>
       ";
	   exit();
}
$conexion=conectar();
$sql="select * from empleados where clave_emp='$clave'";
$registro=mysql_query($sql,$conexion);
if(!$registro)
{
 echo"<script language='JavaScript' type='text/JavaScript'>
           alert('ERROR EN LA CLAVE')
		   window.location='cambios.html'
		 </script>
       ";
}
 else
 {
 $datos=mysql_fetch_object($registro);
  if(!$datos->clave_emp)
  {
   echo"<script language='JavaScript' type='text/JavaScript'>
           alert('LA CLAVE NO EXISTE')
		   window.location='cambios.html'
		 </script>
       ";
	   exit();
  }
 }
?>
  </p>
 
  <form name='form1' id='form1' method='post' action='cambios2.php'>
  
    <div align="center"><br>
      <br>
		<B>CLAVE: <!-- este campo no se puede modificar por ke tiene la propiedad readonly --> 
		<input type='text' name='clave'  value="<?php echo $datos->clave_emp?>" readonly>
                <br>
          <B>NOMBRE:
          <input type='text' name='nombre' value="<?php echo $datos->nombre?>">
                <br>
		
      <B>	EMAIL:
          <input type='text' name='email' value="<?php echo $datos->email?>">
                <br>
          <B> EMPRESA:
          <input type='text' name='empresa' value="<?php echo $datos->empresa?>">
	
                <br>
          <B>CIUDAD:
          <input type='text' name='ciudad' value="<?php echo $datos->ciudad?>">
          <br>
          <B>SALARIO BASE:
          <input type='text' name='salario' value="<?php echo $datos->salario_base?>">
	</div>
    <p align="center">
         <input type='submit' name='cambiar' value="CAMBIAR">
		<input type='button' name='button' value="CANCELAR" onclick='cancelar();'>
 </form>
</body>
</html>

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
                <a href="index.hmtl">Principal</a>
              </li>
              <li><a href="formularioIdentificacion.html">Formulario</a></li>
              <li><a href="bajas.html">Eliminar</a></li>
              <li><a href="cambios.html">Cambios</a></li>
              <li><a href="consultas.php">Consultar </a></li>
            <!--  <li>
                <a href="#">Sub Menu</a>
                <ul class="dl-submenu">
                  <li><a href="#">Sub menu</a></li>
                  <li><a href="#">Sub menu</a></li>
                </ul>
              </li> -->
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
           <p>DATOS A MODIFICAR</p>
             <p>ESTAS REALIZANDO EL ESTUDIO EL DIA: </p>
                 <script>  
                    var f = new Date();
                    document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
                 </script>
          </div>
          </div>
        </div>

        <div class="row">

      <div class="col-md-offset-1 col-md-10">

        <form action="formularioIdentificacion.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
          <div class="col-md-offset-2 col-md-8">

          </div>
          </div>

          <div class="form-group">
          <div class="col-md-offset-2 col-md-8">
          <input type="submit" id="insertar" value="GUARDAR" name="guardar" class="btn btn-theme btn-lg btn-block">
                    <input type="reset" id="cancelar" value="CANCELAR" name="cancelar" class="btn btn-theme btn-lg btn-block">  
          <button type="button" onClick="window.location='index.html'" class="btn btn-theme btn-lg btn-block">Regresar</button>
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
          <p>Copyright &copy;2015 <a href="http://corseprin.com.mx/">Corseprin </a></p>
        <div class="col-md-12">
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