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
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script type="text/javascript">
      function SumarIngresos(){
        var valor1 = Number(document.getElementById("valor1").value);
        var valor2 = Number(document.getElementById("valor2").value);
        var valor3 = Number(document.getElementById("valor3").value);
        document.getElementById("totalI").value = valor1+valor2+valor3;
        document.getElementById("totalRI").value = valor1+valor2+valor3;
      }
    </script>
    <script type="text/javascript">
      function SumarEgresos(){
        var numero1 = Number(document.getElementById("numero1").value);
        var numero2 = Number(document.getElementById("numero2").value);
        var numero3 = Number(document.getElementById("numero3").value);
        var numero4 = Number(document.getElementById("numero4").value);
        var numero5 = Number(document.getElementById("numero5").value);
        var numero6 = Number(document.getElementById("numero6").value);
        var numero7 = Number(document.getElementById("numero7").value);
        var numero8 = Number(document.getElementById("numero8").value);
        document.getElementById("totalE").value = numero1+numero2+numero3+numero4+numero5+numero6+numero7+numero8;
        document.getElementById("totalRE").value = numero1+numero2+numero3+numero4+numero5+numero6+numero7+numero8;
      }
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
              <p><label>INFORMACION ECONOMICA</label></p>
              <p>CANDIDATO: <label><?php echo $_SESSION["clave"]; ?></label></p>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-offset-1 col-md-10">
       <form action="models/modeloEconomico.php" method="post" class="form-horizontal" role="form">
         <div class="form-group">
          <div id="capa" class="col-md-offset-2 col-md-8">
            <input type="hidden" class="form-control" id="inputClave" placeholder="Clave" name="clave" required value="<?php echo $_SESSION["clave"]; ?>">
            <fieldset>
                <legend>Ingresos:</legend>
                <table class="table table-hover">
                   <tr class="success">
                      <td><label>Persona.</label></td>
                      <td><label>Fuente <br>(Trabajo, Pension, Beca)</label><br></td>
                      <td><label>Monto Mensual.</label></td>
                  </tr>
                  <tr>							
                      <td><input type="text" class="form-control" id="inputClave" placeholder="PersonaUno" name="personaUno" required></td>
                      <td><select type="text" class="form-control" id="inputClave" placeholder="Puesto a cubrir" name="fuenteUno" required>
                            <option selected value="">Seleccionar fuente</option>
                            <option value="Trabajo">Trabajo</option>
                            <option value="Pensión">Pensión</option>
                            <option value="Beca">Beca</option>
                            <option value="Otro">Otro</option>
                        </select></td>
                      <td><input type="number" class="form-control" id="valor1" placeholder="Monto Mensual" name="montoUno" required></td>
                  </tr>
                  <tr>							
                      <td><input type="text" class="form-control" id="inputClave" placeholder="PersonaDos" name="personaDos" required></td>
                      <td><select type="text" class="form-control" id="inputClave" placeholder="Puesto a cubrir" name="fuenteDos" required>
                            <option selected value="">Seleccionar fuente</option>
                            <option value="Trabajo">Trabajo</option>
                            <option value="Pensión">Pensión</option>
                            <option value="Beca">Beca</option>
                            <option value="Otro">Otro</option>
                      </select></td>
                      <td><input type="number" class="form-control" id="valor2" placeholder="Monto Mensual" name="montoDos" required></td>
                  </tr>
                  <tr>							
                      <td><input type="text" class="form-control" id="inputClave" placeholder="PersonaTres" name="personaTres" required></td>
                      <td><select type="text" class="form-control" id="inputClave" placeholder="Puesto a cubrir" name="fuenteTres" required>
                            <option selected value="">Seleccionar fuente</option>
                            <option value="Trabajo">Trabajo</option>
                            <option value="Pensión">Pensión</option>
                            <option value="Beca">Beca</option>
                            <option value="Otro">Otro</option>
                      </select></td>
                      <td><input type="number" class="form-control" id="valor3" placeholder="Monto Mensual" name="montoTres" required></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><input type="button" class="btn btn-primary" value="Calcular" onclick="SumarIngresos();"></td>
                      <td><input type="number" class="form-control" id="totalI" placeholder="Total de Ingresos" name="totalIngresos" required></td>
                </tr>
            </table>
        </fieldset>
    </div>
</div>
<div class="form-group">
  <div id="capa" class="col-md-offset-2 col-md-8">
      <fieldset>
        <legend>Egresos (Gastos):</legend>
        <table class="table table-hover">
            <tr class="success">
               <td><label>Persona.</label></td>
               <td><label>Concepto</label><br></td>
               <td><label>Monto Mensual.</label></td>
           </tr>
           <tr id="1">							
              <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="personaUnoE" required></td>
              <td><input type="text" class="form-control" id="inputClave" value="Alimentacion" disabled="true" required></td>
              <td><input type="number" class="form-control" id="numero1" placeholder="Monto Mensual" name="montoUnoE" required></td>
          </tr>
          <tr id="2">							
              <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="personaDosE" required></td>
              <td><input type="text" class="form-control" id="inputClave" value="Ropa y calzado" disabled="true" required></td>
              <td><input type="number" class="form-control" id="numero2" placeholder="Monto Mensual" name="montoDosE" required></td>
          </tr>
          <tr id="3">							
              <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="personaTresE" required></td>
              <td><input type="text" class="form-control" id="inputClave" value="Transporte" disabled="true" required></td>
              <td><input type="number" class="form-control" id="numero3" placeholder="Monto Mensual" name="montoTresE" required></td>
          </tr>
          <tr id="4">							
              <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="personaCuatroE" required></td>
              <td><input type="text" class="form-control" id="inputClave" value="Servicos" disabled="true" required></td>
              <td><input type="number" class="form-control" id="numero4" placeholder="Monto Mensual" name="montoCuatroE" required></td>
          </tr>
          <tr id="5">							
              <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="personaCincoE" required></td>
              <td><input type="text" class="form-control" id="inputClave" value="Gastos Escolares" disabled="true" required></td>
              <td><input type="number" class="form-control" id="numero5" placeholder="Monto Mensual" name="montoCincoE" required></td>
          </tr>
          <tr id="6">							
              <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="personaSeisE" required></td>
              <td><input type="text" class="form-control" id="inputClave" value="Actividades deportivas" disabled="true" required></td>
              <td><input type="number" class="form-control" id="numero6" placeholder="Monto Mensual" name="montoSeisE" required></td>
          </tr>
          <tr id="7">							
              <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="personaSieteE" required></td>
              <td><input type="text" class="form-control" id="inputClave" value="Actividades creativas" disabled="true" required></td>
              <td><input type="number" class="form-control" id="numero7" placeholder="Monto Mensual" name="montoSieteE" required></td>
          </tr>
          <tr id="8">							
              <td><input type="text" class="form-control" id="inputClave" placeholder="Persona" name="personaOchoE" required></td>
              <td><input type="text" class="form-control" id="inputClave" value="Otros" disabled="true" required></td>
              <td><input type="number" class="form-control" id="numero8" placeholder="Monto Mensual" name="montoOchoE" required></td>
          </tr>
          <tr id="total">							
              <td></td>
              <td><input type="button" class="btn btn-primary" value="Calcular" onclick="SumarEgresos();"></td>
              <td><input type="number" class="form-control" id="totalE" placeholder="Total de Egresos" name="totalEgresos" required></td>
          </tr>
      </table>
  </fieldset>
</div>
</div>

<div class="form-group">
  <div id="capa" class="col-md-offset-2 col-md-8">
    <fieldset>
        <legend>Resumen</legend>
        <table class="table table-hover">
           <tr>
              <td><label>Personas que viven con el investigado:</label></td>
              <td><input type="number" class="form-control" id="inputClave" placeholder="Numero de personas" name="totalViven" required></td>
          </tr>
          <tr>
              <td><label>Personas que dependen economicamente de el:</label></td>
              <td><input type="number" class="form-control" id="inputClave" placeholder="Num de personas dependientes" name="totalDependen" required></td>
          </tr>
          <tr>
              <td><label>Total de ingresos:</label></td>
              <td><input type="number" class="form-control" id="totalRI" placeholder="Monto Mensual" value="" required></td>
          </tr>
          <tr>
              <td><label>Total de egresos:</label></td>
              <td><input type="number" class="form-control" id="totalRE" placeholder="Monto Mensual" value="" required></td>
          </tr>
      </table>
    </fieldset>
  </div>
</div>

<script type="text/javascript">
                    function mostrar(){
                      document.getElementById('credito').style.display = 'block';}
</script>
<script type="text/javascript">
                    function ocultar(){
                      document.getElementById('credito').style.display = 'none';}
</script>

<div class="alert alert-warning">
  <label> Cuenta con algun credito:</label>
  Si: <input type="radio" name="myRadioButton" onclick="mostrar()" checked/>
  No: <input type="radio" name="myRadioButton" onclick="ocultar()"/>
</div>

<div class="form-group">
  <div id="credito" class="col-md-offset-2 col-md-8">
    <fieldset>
        <legend>Creditos:</legend>
        <table class="table table-hover">
           <tr class="success">							
              <td><label>Concepto</label></td>
              <td><label>Mensualidad</label></td>
              <td><label>Plazo</label></td>
              <td><label>Saldo</label></td>
          </tr>
          <tr>							
              <td><input type="text" class="form-control" id="inputClave" placeholder="Concepto" name="concepto"></td>
              <td><input type="text" class="form-control" id="inputClave" placeholder="Mensualidad" name="mensualidad"></td>
              <td><input type="number" class="form-control" id="inputClave" placeholder="Plazo" name="plazo"></td>
              <td><input type="number" class="form-control" id="inputClave" placeholder="Saldo" name="saldo"></td>
          </tr>
          <tr>							
              <td><input type="text" class="form-control" id="inputClave" placeholder="Concepto" name="conceptoDos"></td>
              <td><input type="text" class="form-control" id="inputClave" placeholder="Mensualidad" name="mensualidadDos"></td>
              <td><input type="number" class="form-control" id="inputClave" placeholder="Plazo" name="plazoDos"></td>
              <td><input type="number" class="form-control" id="inputClave" placeholder="Saldo" name="saldoDos"></td>
          </tr>
      </table>
  </fieldset>
</div>
</div>

<div class="form-group">
 <div id="capa" class="col-md-offset-2 col-md-8">
    <fieldset>
        <legend>Seguro:</legend>
        <table class="table table-hover">
           <tr>
              <td><label>De vida: </label></td>
              <td>Si: <input type="radio" name="vida" value="Si" onclick="montoS.disabled=false"/></td>
              <td>No: <input type="radio" name="vida" value="No" onclick="montoS.disabled=true"/></td>
              <td><label> Monto Mensual: </label></td>
              <td><input type="number" class="form-control" id="montoS" placeholder="Saldo" name="montoS" required></td>
          <tr>
              <td><label>De gastos medicos mayores: </label></td>
              <td>Si: <input type="radio" name="medicos" value="Si" onclick="montoDosS.disabled=false"/></td>
              <td>No: <input type="radio" name="medicos" value="No" onclick="montoDosS.disabled=true"/></td>
              <td><label> Monto Mensual: </label></td>
              <td><input type="number" class="form-control" id="montoDosS" placeholder="Saldo" name="montoDosS" required></td>
          </tr>
          <tr>
              <td><label>De automovil: </label></td>
              <td>Si: <input type="radio" name="automovil" value="Si" onclick="montoTresS.disabled=false"/></td>
              <td>No: <input type="radio" name="automovil" value="No" onclick="montoTresS.disabled=true"/></td>
              <td><label> Monto Mensual: </label></td>
              <td><input type="number" class="form-control" id="montoTresS" placeholder="Saldo" name="montoTresS" required></td>
          </tr>
          <tr>
              <td><label>Contra accidentes: </label></td>
              <td>Si: <input type="radio" name="accidentes" value="Si" onclick="montoCuatroS.disabled=false"/></td>
              <td>No: <input type="radio" name="accidentes" value="No" onclick="montoCuatroS.disabled=true"/></td>
              <td><label> Monto Mensual: </label></td>
              <td><input type="number" class="form-control" id="montoCuatroS" placeholder="Saldo" name="montoCuatroS" required></td>
          </tr>
      </table>
  </fieldset>
 </div>
</div>

<div class="form-group">
    <div id="capa" class="col-md-offset-2 col-md-8"> 
        <fieldset>
            <legend>Activos:</legend>
            <table class="table table-hover">
               <tr class="success">
                  <td colspan="3"><label>PROPIEDADES: </label></td>
              </tr>
              <tr class="active">
                  <td colspan="3"><label>Tipo: </label></td>
              </tr>
              <tr>
                  <td><input type="checkbox" name="tipoPropiedad" value=" Tiene Casa"> Casa</td>
                  <td><input type="checkbox" name="tipoPropiedad" value=" Tiene Terreno"> Terreno</td>
                  <td><input type="checkbox" name="tipoPropiedad" value=" Tiene Departamento"> Departamento</td>
              </tr>
              <tr>
                  <td colspan="2"><label>Ubicacion: </label></td>
                  <td><label>Valor estimado: </label></td>
              </tr>
              <tr>
                  <td colspan="2" ><input type="text" class="form-control" id="inputClave" placeholder="Ubicacion" name="ubicacion" required></td>
                  <td><input type="number" class="form-control" id="inputClave" placeholder="Valor estimado" name="valorEstimadoT" required></td>
              </tr>
              <tr>
                  <td><label>Tipo de auto</label></td>
                  <td><label>Modelo</label></td>
                  <td><label>Valor estimado</label></td>
              </tr>
              <tr>
                  <td><input type="text" class="form-control" id="inputClave" placeholder="Tipo" name="tipo" required></td>
                  <td><input type="text" class="form-control" id="inputClave" placeholder="Modelo" name="modelo" required></td>
                  <td><input type="number" class="form-control" id="inputClave" placeholder="Valor estimado" name="valorEstimadoA" required></td>
              </tr>
          </table>
      </fieldset>
  </div>
</div>
<div class="form-group">
  <div class="col-md-offset-2 col-md-8">
      <input type="submit" id="insertar" value="SIGUIENTE..." name="guardar" class="btn btn-theme btn-lg btn-block">
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