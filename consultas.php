<?php
include("conexion.php");
$conexion=conectar();
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
           <h2>CONSULTAR SOLICITUDES</h2>
             <p>ESTAS REALIZANDO TU CONSULTA EL DIA: </p>
                 <script>  
                    var f = new Date();
                    document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
                 </script>
          </div>
          </div>
        </div>

        <div class="row">

          <div class="col-md-offset-1 col-md-10">

        <form action="formulario.php" method="post" class="form-horizontal" role="form">
          <div class="form-group">
          <div class="col-md-offset-2 col-md-8">
            <!-- Contenido //////////////////////////////////////////////////////////////////////////////////////////////// -->
            <table width="900" border="1" align="center">
              <tr align="center">
                  <td  bgcolor="#CCCCCC">CLAVE CURP</td>
                  <td  bgcolor="#CCCCCC">PUESTO</td>
                  <td  bgcolor="#CCCCCC">NOMBRE</td>
                  <td  bgcolor="#CCCCCC">EMAIL</td>
                  <td  bgcolor="#CCCCCC">DIRECCION</td>
                  <td  bgcolor="#CCCCCC">FECHA</td>z
                  <td  bgcolor="#CCCCCC">ESTADO CIVIL</td>
                  <td  bgcolor="#CCCCCC">TELEFONO</td>
                  <td  bgcolor="#CCCCCC">NIVEL ACADEMICO</td>
                  <td  bgcolor="#CCCCCC">REPORTE</td>
              </tr>
          <?php
          $consulta= mysqli_query($conexion,"SELECT * FROM identificacion");
          $cantidad = mysqli_num_rows($consulta);
            if (isset($_POST['buscar'])){
            $consulta = mysqli_query($conexion,"SELECT * FROM identificacion where nombre like '%".$_POST['buscar']."%'");
          }
  
          while($filas= mysqli_fetch_array($consulta)){
            $clave=$filas['clave'];
            $puesto=$filas['puesto'];
            $nombre=$filas['nombre'];
            $email=$filas['email'];
            $direccion=$filas['direccion'];
            $fecha=$filas['fecha'];
            $estadocivil=$filas['estadocivil'];
            $telefono=$filas['telefono'];
            $nivelacademico=$filas['nivelacademico'];
            ?>
            <tr>
                <td><?php echo $clave ?></td>
                <td><?php echo $puesto ?></td>
                <td><?php echo $nombre ?></td>
                <td><?php echo $email ?></td>
                <td align="center"><?php echo $direccion ?></td>
                <td align="center"><?php echo $fecha ?></td>
                <td align="center"><?php echo $estadocivil ?></td>
                <td align="center"><?php echo $telefono ?></td>
                <td align="center"><?php echo $nivelacademico ?></td>
                
                <!-- <td align="center">    
                <form action="transaccion2.php" method="post" name="editar">
                    <input name="clave" type="hidden" value="<?php echo $clave ?>" />
                        <input name="nombre" type="hidden" value="<?php echo $nombre ?>" />
                        <input name="email" type="hidden" value="<?php echo $email ?>" />
                        <input name="empresa" type="hidden" value="<?php echo $empresa ?>" />
                        <input name="ciudad" type="hidden" value="<?php echo $ciudad ?>" />
                        <input name="salario" type="hidden" value="<?php echo $salario ?>" />
                    <input type="submit" value="Aplicar" class="asdasda" alt="cambio" title="Aplicar Descuento"/>
                    </form>
                  </td> -->

                  <td align="center">
                    <form action="reporte.php" method="post" name="reporte">
                    <input name="clave" type="hidden" value="<?php echo $clave ?>" />
                    <input type="submit" value="Generar" alt="cambio" title="Generar"/>
                    </form>
                  </td>
            </tr>
         <p>
            <?php }?>
         </table>
     </p>
 <!-- Contenido //////////////////////////////////////////////////////////////////////////////////////////////// -->
            
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
        <div class="col-md-12">
          <p>Copyright &copy;2015 <a href="http://corseprin.com.mx/">Corseprin </a></p>
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