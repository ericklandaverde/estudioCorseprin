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