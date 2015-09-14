<?php

require('fpdf/fpdf.php');
include("conexion.php");
$conexion=conectar();

class PDF extends FPDF
{
var $widths;
var $aligns;

function SetWidths($w)
{
	//Set the array of column widths
	$this->widths=$w;
}

function SetAligns($a)
{
	//Set the array of column alignments
	$this->aligns=$a;
}

function Row($data)
{
	//Calculate the height of the row
	$nb=0;
	for($i=0;$i<count($data);$i++)
		$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
	$h=5*$nb;
	//Issue a page break first if needed
	$this->CheckPageBreak($h);
	//Draw the cells of the row
	for($i=0;$i<count($data);$i++)
	{
		$w=$this->widths[$i];
		$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
		//Save the current position
		$x=$this->GetX();
		$y=$this->GetY();
		//Draw the border
		
		$this->Rect($x,$y,$w,$h);

		$this->MultiCell($w,5,$data[$i],0,$a,'true');
		//Put the position to the right of the cell
		$this->SetXY($x+$w,$y);
	}
	//Go to the next line
	$this->Ln($h);
}

function CheckPageBreak($h)
{
	//If the height h would cause an overflow, add a new page immediately
	if($this->GetY()+$h>$this->PageBreakTrigger)
		$this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
	//Computes the number of lines a MultiCell of width w will take
	$cw=&$this->CurrentFont['cw'];
	if($w==0)
		$w=$this->w-$this->rMargin-$this->x;
	$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
	$s=str_replace("\r",'',$txt);
	$nb=strlen($s);
	if($nb>0 and $s[$nb-1]=="\n")
		$nb--;
	$sep=-1;
	$i=0;
	$j=0;
	$l=0;
	$nl=1;
	while($i<$nb)
	{
		$c=$s[$i];
		if($c=="\n")
		{
			$i++;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
			continue;
		}
		if($c==' ')
			$sep=$i;
		$l+=$cw[$c];
		if($l>$wmax)
		{
			if($sep==-1)
			{
				if($i==$j)
					$i++;
			}
			else
				$i=$sep+1;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
		}
		else
			$i++;
	}
	return $nl;
}

function Header()
{
    //$this->Image('imagenes/cecyte.jpg' , 20 ,8, 23 , 18,'JPG');
	//$this->Image('imagenes/letras3.jpg' , 45 ,13, 117 , 20,'JPG');
	$this->Image('imagenes/dgeti.jpg' , 20 ,8, 22 , 18,'JPG');
	//$this->Image('imagenes/images.jpg' , 163 ,10, 35 , 20,'JPG');
	
	// $this->SetFont('Arial','',11);
	// $this->Text(60,20,utf8_decode('"ESTUDIO SOCIOECONOMICO"'),0,'C', 0);
	// $this->SetFont('Arial','',10);
	// $this->Text(120,73,utf8_decode('Asunto: Constancia de Terminación de Estudios'),0,'C', 0);
	
	// $this->Ln(27);
}

}

	$num= $_POST['clave'];
	$strConsulta = "SELECT * FROM identificacion where clave =  '$num'";
	$alumno = mysqli_query($conexion,$strConsulta);
	$fila = mysqli_fetch_array($alumno);
	
	
	$pdf=new PDF('P','mm','A4');
	$pdf->Open();
	$pdf->AddPage();
	$pdf->SetMargins(20,20,20);
	$pdf->Ln(55);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,6,'A QUIEN CORRESPONDA:',0,1);
	$pdf->Ln(20);
	$pdf->Cell(0,6,'Nombre:',0,1);$pdf->Cell(0,6,$fila['nombre'],0,1);
	$pdf->Ln(20);
	
	$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(177,6, utf8_decode('El que suscribe, Encargado(a) del Departamento de Titulación del CECyTE. Hace constar que el (a) C. '.utf8_decode($fila['nivelacademico']).', con Clave ').utf8_decode($fila['clave']). utf8_decode('; concluyó sus actividades en la empresa ').utf8_decode($fila['nombre'].', de la ciudad de  '.$fila['fecha']). utf8_decode('; con un salario base de ').utf8_decode($fila['fecha']) ,0,'J');
	
	$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $pdf->Ln(8);
	
	$pdf->MultiCell(177,6,utf8_decode('A petición del interesado, se expide la presente en la H. ciudad de Juchitán de Zaragoza, Oaxaca. A los '." ".date('d')." dias del mes de ".$meses[date('n')-1]. " de ".date('Y')."." ),0,'J');
    $pdf->Ln(50);
	
    //-------------------------------------------------------------------------------------------------------------------------------------------
    $pdf->Cell(30, 8, 'Nivel academico', 1);
    $pdf->Cell(80,8,$fila['nivelacademico'],0,1);
    $pdf->Ln(8);
	//-------------------------------------------------------------------------------------------------------------------------------------------
    $pdf->Ln(8);
    $pdf->Cell(100, 8, 'ESTUDIO SOCIOECONOMICO"', 1);
    $pdf->Ln(8);
    $pdf->SetFont('Arial', 'B', 5);
    $pdf->Cell(100,8,'Se prohibe la reproduccion total o parcial del presente documento sin la autorizacion correspondiente.',1);

    $pdf->Output();
?>