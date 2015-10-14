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
     <!-- Alertify -->
    <script src="alertifyjs/alertify.js"></script>
    <link rel="stylesheet" href="alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="alertifyjs/css/themes/bootstrap.css">
    <!-- Alertif -->
    <!-- Alertif -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href="color/default.css" rel="stylesheet" media="screen">
    <script src="js/modernizr.custom.js"></script>
  </head>
  <body>
  <script type="text/javascript">
  alertify.alert("CONSULTAS",'Bienvenido adminitrador');
  </script>
  <div class="menu-area">
      <div id="dl-menu" class="dl-menuwrapper">
            <button class="dl-trigger">Open Menu</button>
            <ul class="dl-menu">
              <li>
                <a href="index.html">Principal</a>
              </li>
              <li><a href="formularioIdentificacion.php">Formulario</a></li>
              <li><a href="cambios.html">Cambios</a></li>
              <li><a href="consultas.php">Consultar </a></li>
            </ul>
          </div><!-- /dl-menuwrapper -->
  </div>  
    
   <!-- Consultas -->
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
        
        <div class="form-group">
            <div>
            <!-- <div class="col-md-offset-2 col-md-8"> -->
            <!-- Contenido //////////////////////////////////////////////////////////////////////////////////////////////// -->
              <table class="table table-bordered">
                <tr align="center">
                    <td  bgcolor="#CCCCCC">CLAVE CURP</td>
                    <td  bgcolor="#CCCCCC">PUESTO</td>
                    <td  bgcolor="#CCCCCC">NOMBRE</td>
                    <td  bgcolor="#CCCCCC">TELEFONO</td>
                    <td  bgcolor="#CCCCCC">EMAIL</td>
                    <td  bgcolor="#CCCCCC">REPORTE</td>
                    <td  bgcolor="#CCCCCC">ENVIAR</td>
                    <td  bgcolor="#CCCCCC">ELIMINAR</td>
                </tr>
                <?php
                  $consulta= mysqli_query($conexion,"SELECT * FROM identificacion");
                  $cantidad = mysqli_num_rows($consulta);
                  
                  while($filas= mysqli_fetch_array($consulta)){
                  $clave=$filas['id_rfc'];
                  $puesto=$filas['puesto'];
                  $nombre=$filas['nombre'];
                  $telefono=$filas['telefono'];
                  $email=$filas['email'];
                ?>
                <tr>
                    <td><?php echo $clave ?></td>
                    <td><?php echo $puesto ?></td>
                    <td><?php echo $nombre ?></td>
                    <td><?php echo $telefono ?></td>
                    <td><?php echo $email ?></td>              
                    
                    <td align="center">
                      <form action="reporteCandidato.php" method="post" name="reporte">
                        <input name="clave" type="hidden" value="<?php echo $clave ?>" />
                        <input type="submit" class="btn btn-primary" value="Generar" alt="cambio" title="Generar"/>
                      </form>
                    </td>
                    <td align="center">
                      <form action="enviarCorreo.php" method="post" name="correo">
                        <input name="correo" type="hidden" value="<?php echo $email ?>" />
                        <input type="submit" class="btn btn-success" value="Enviar" alt="cambio" title="Correo"/>
                      </form>
                    </td>
                    <td align="center">
                      <form action="eliminarCandidato.php" method="post" name="elimnar">
                        <input name="clave" type="hidden" value="<?php echo $clave ?>" />
                        <input type="submit" class="btn btn-danger" value="Eliminar" alt="cambio" title="Eliminar"/>
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
               <script type="text/javascript">
                        function confirmar(){
                            alertify.confirm("Segura deseas salir:", function (e) {
                              if (e) {
                                alertify.success("Has pulsado '" + alertify.labels.ok + "'");
                              }else{ 
                                alertify.error("Has pulsado '" + alertify.labels.cancel + "'");
                              }
                            }); 
                            return false
                          }
                </script>
              <!-- <button type="button" onClick="confirmar()" onClick="window.location='index.html'" class="btn btn-theme btn-lg btn-block">Salir</button> -->
              <button type="button" onClick="confirmar()" class="btn btn-theme btn-lg btn-block">Salir</button>
            </div>
        </div>

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