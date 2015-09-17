<?php
require('fpdf/fpdf.php');
require('conexion.php');
$conexion=conectar();

$num= $_POST['clave'];
$strConsulta = "SELECT * FROM identificacion where clave = '$num'";
$alumno = mysqli_query($conexion,$strConsulta);
$fila = mysqli_fetch_array($alumno);

$documentos= $_POST['clave'];
$strConsulta = "SELECT * FROM documentos where clave = '$documentos'";
$candidato = mysqli_query($conexion,$strConsulta);
$filas = mysqli_fetch_array($candidato);


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('imagenes/dgeti.jpg' , 10 ,8, 10 , 13,'JPG');
//-------------------------------------------------------------------------------------------------------------------------------------------
class PDF extends FPDF
{
	function Header()
	{
	   $pdf->Cell(60, 10, 'dgeti.jpg', 1);
	   $pdf->Cell(100, 10, 'ESTUDIO SOCIOECONOMICO"', 1);
	   $pdf->SetFont('Arial', '', 9);
	   $pdf->Cell(30, 10, 'Fecha: '.date('d-m-Y').'', 1);
	   $pdf->Ln(11);
	}
}
//-------------------------------------------------------------------------------------------------------------------------------------------
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(60, 5, '', 0);
$pdf->Cell(60, 5, 'DATOS DE IDENTIFICACION', 1);
$pdf->Ln(10);
//CONSULTA
$pdf->SetFont('Arial', 'B', 8);
//-------------------------------------------------------------------------------------------------------------------------------------------
$pdf->Cell(30, 8, 'Puesto', 1);
	$pdf->Cell(160, 8,$fila['puesto'], 1);
	//$pdf->Cell(40, 8, $productos2['nombre'], 0);
	//$pdf->Cell(40, 8, $productos2['direccion'], 0);
	$pdf->Ln(8);
//-------------------------------------------------------------------------------------------------------------------------------------------
$pdf->Cell(30, 8, 'Nombre', 1);
	$pdf->Cell(160, 8,$fila['nombre'], 1);
	//$pdf->Cell(40, 8, $productos2['nombre'], 0);
	//$pdf->Cell(40, 8, $productos2['direccion'], 0);
	$pdf->Ln(8);
//-------------------------------------------------------------------------------------------------------------------------------------------
$pdf->Cell(30, 8, 'P. Direccion', 1);
	$pdf->Cell(160, 8,$fila['direccion'], 1);
	//$pdf->Cell(40, 8, $productos2['nombre'], 0);
	//$pdf->Cell(40, 8, $productos2['direccion'], 0);
	$pdf->Ln(8);
//-------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------
$pdf->Cell(30, 8, 'Fecha', 1);
	$pdf->Cell(160, 8,$fila['fecha'], 1);
	//$pdf->Cell(40, 8, $productos2['nombre'], 0);
	//$pdf->Cell(40, 8, $productos2['direccion'], 0);
	$pdf->Ln(8);
//-------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------
$pdf->Cell(30, 8, 'Edad', 1);
	$pdf->Cell(160, 8,$fila['edad'], 1);
	//$pdf->Cell(40, 8, $productos2['nombre'], 0);
	//$pdf->Cell(40, 8, $productos2['direccion'], 0);
	$pdf->Ln(8);
//-------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------
$pdf->Cell(30, 8, 'Telefono', 1);
	$pdf->Cell(160, 8,$fila['telefono'], 1);
	//$pdf->Cell(40, 8, $productos2['nombre'], 0);
	//$pdf->Cell(40, 8, $productos2['direccion'], 0);
	$pdf->Ln(8);
//-------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------
$pdf->Cell(30, 8, 'Nivel academico', 1);
	$pdf->Cell(160, 8,$fila['nivelacademico'], 1);
	//$pdf->Cell(40, 8, $productos2['nombre'], 0);
	//$pdf->Cell(40, 8, $productos2['direccion'], 0);
	$pdf->Ln(8);
//-------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------
$pdf->Cell(30, 8, 'Matrimonio', 1);
	$pdf->Cell(160, 8,$filas['matrimonio'], 1);
	//$pdf->Cell(40, 8, $productos2['nombre'], 0);
	//$pdf->Cell(40, 8, $productos2['direccion'], 0);
	$pdf->Ln(8);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(150,8,'Se prohibe la reproduccion total o parcial del presente documento sin la autorizacion correspondiente.',1);
$pdf->Output();
?>