<?php
include("conexion.php");
$conexion=conectar();
?>
<br><br>
<center><h2><b>CONSULTAR SOLICITUDES</b></h2>
<table width="900" border="1" align="center">
      <tr align="center">
          <td  bgcolor="#CCCCCC">IDENTIFIACION</td>
          <td  bgcolor="#CCCCCC">PUESTO</td>
          <td  bgcolor="#CCCCCC">NOMBRE</td>
          <!-- <td  bgcolor="#CCCCCC">EMAIL</td>
          <td  bgcolor="#CCCCCC">DIRECCION</td>
          <td  bgcolor="#CCCCCC">FECHA</td>
          <td  bgcolor="#CCCCCC">ESTADO CIVIL</td>
          <td  bgcolor="#CCCCCC">TELEFONO</td>
          <td  bgcolor="#CCCCCC">NIVEL ACADEMICO</td>
          <td  bgcolor="#CCCCCC">REPORTE</td> -->
      </tr>
    <?php
    $consulta= mysqli_query($conexion,"SELECT * FROM identificacion");
    $cantidad = mysql_num_rows($consulta);
      if (isset($_POST['buscar'])){
      $consulta = mysqli_query($conexion,"SELECT * FROM identificacion where nombre like '%".$_POST['buscar']."%'");
    }
  
    while($filas= mysqli_fetch_array($consulta)){
      $clave=$filas['clave'];
      $puesto=$filas['puesto'];
      $nombre=$filas['nombre'];
      // $email=$filas['email'];
      // $direccion=$filas['direccion'];
      // $fecha=$filas['fecha'];
      // $estadocivil=$filas['estadocivil'];
      // $telefono=$filas['telefono'];
      // $nivelacademico=$filas['nivelacademico'];
        ?>
      <tr>
          <td><?php echo $clave ?></td>
          <td><?php echo $puesto ?></td>
          <td><?php echo $nombre ?></td>
          <!-- <td><?php echo $email ?></td>
          <td align="center"><?php echo $direccion ?></td>
            <td align="center"><?php echo $fecha ?></td>
            <td align="center"><?php echo $estadocivil ?></td>
            <td align="center"><?php echo $telefono ?></td>
            <td align="center"><?php echo $nivelacademico ?></td> -->
          
<!--      <td align="center">    
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

            <!-- <td align="center">
              <form action="reporte.php" method="post" name="reporte">
              <input name="clave" type="hidden" value="<?php echo $clave ?>" />
              <input type="submit" value="Generar" alt="cambio" title="Generar"/>
              </form>
            </td> -->
      </tr>
      <p>
        <?php }?>
      </table>
</p>
<p align="center">
<a href="index.html">REGRESAR</a>
</p>
</body>
</html>