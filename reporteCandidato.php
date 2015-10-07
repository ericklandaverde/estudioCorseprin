<?php
    require('fpdf/fpdf.php');
    require('conexion.php');
    $conexion=conectar();

    $numI= $_POST['clave'];
    $strConsultaI = "SELECT * FROM identificacion where id_rfc = '$numI'";
    $candidatoI = mysqli_query($conexion,$strConsultaI);
    $filaI = mysqli_fetch_array($candidatoI);

    $numD= $_POST['clave'];
    $strConsultaD = "SELECT * FROM documentos where id_rfc = '$numD'";
    $candidatoD = mysqli_query($conexion,$strConsultaD);
    $filaD = mysqli_fetch_array($candidatoD);

class PDF extends FPDF
{
     var $widths;
     var $aligns;

     function SetWidths($w)
    {
        //Set the array of column widths
        //Ajuste la gama de anchos de columna
        $this->widths=$w;
    }

    function SetAligns($a)
    {
        //Set the array of column alignments
        //Ajuste el conjunto de alineaciones de columnas
        $this->aligns=$a;
    }

    function Row($data)
    {
        //Calculate the height of the row
        //Calcular la altura de la fila
        $nb=0;
        for($i=0;$i<count($data);$i++)
            $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h=5*$nb;
        //Issue a page break first if needed
        //Emitir un salto de página primera , si es necesario
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        //Dibuja las células de la fila
        for($i=0;$i<count($data);$i++)
        {
            $w=$this->widths[$i];
            $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            //Guardar la posición actual
            $x=$this->GetX();
            $y=$this->GetY();
            //Draw the border
            //Dibuja la frontera
            $this->Rect($x,$y,$w,$h);

            $this->MultiCell($w,5,$data[$i],0,$a,'true');
            //Put the position to the right of the cell
            //Ponga la posición a la derecha de la celda
            $this->SetXY($x+$w,$y);
        }
        //Go to the next line
        //Ir a la siguiente línea
        $this->Ln($h);
    }

    function CheckPageBreak($h)
    {
        //If the height h would cause an overflow, add a new page immediately
        //Si la altura h provocaría un desbordamiento, añadir una nueva página de inmediato
        if($this->GetY()+$h>$this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w,$txt)
    {
        //Computes the number of lines a MultiCell of width w will take
        //Calcula el número de líneas de un MultiCell de anchura w tendrá
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

    // Cabecera de página
    function Header()
    {
        // Logo
        //(Imagen,x,y,Ancho,Alto,Type,Link)
        $this->Image('imagenes/logo.png',10,10,23);
        // Arial bold 15
        $this->SetFont('Arial','B',9);
        // Título
        //Cell(Ancho(x),Alto(y),Cadena,Bordes,Posicion,Align,fill,link)
        //Bordes(0: sin borde 1: marco)
        //Posicion (0: a la derecha 1: al comienzo de la siguiente línea 2: debajo)
        /*Align
        L o una cadena vacia: alineación izquierda (valor por defecto)
        C: centro
        R: alineación derecha*/
        $this->Cell(0,0,'',1,0,'C');
        $this->Ln(4);
        $this->Cell(0,0,'Clave: FO-CH-027',0,0,'R');
        $this->Ln(4);
        $this->Cell(0,0,'Revicion 02',0,0,'R');
        $this->Ln(4);
        $this->SetFont('Arial','B',11);
        $this->Cell(0,0,'ESTUDIO SOCIOECONOMICO',0,0,'C');
        $this->Ln(3);
        $this->SetFont('Arial','B',9);
        $this->Cell(0,0,'Fecha:'.date('d/m/Y').'',0,0,'R');
        $this->Ln(3);
        $this->Cell(0,0,'Pagina '.$this->PageNo().'/{nb}',0,0,'R');
        $this->Ln(3);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','B',8);
        // Número de página
        $this->Cell(0,0,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
        $this->SetY(-10);
        $this->Cell(0,0,utf8_decode('Se prohíbe la reproducción total o parcial del presente documento sin la autorización correspondiente.'),0,0,'C');
    }
} //Final de la clase.

        // Creación del objeto de la clase heredada
        $pdf = new PDF();
        //Agregada nueva pagina.
        $pdf->AddPage();
        $pdf->SetFont('Times','',10);
        $pdf->Cell(0,0,'',1,0,'C');
        $pdf->Ln(3);
        //MultiCell(Ancho de celdas, Alto de las celdas, Cadena para imprimir, Bordes, align, fill)
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(100, 8, 'ELEMENTO',1,0,'C'); $pdf->Cell(70, 8, 'Fecha: '.date('d/m/Y').'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(100, 8,$filaI['nombre'],1,0,'C'); $pdf->Cell(70, 8, 'GERENCIA DE CAPITAL HUMANO',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(100, 8,"",1,0,'C'); $pdf->Cell(70, 8, 'SERVICIO',1,0,'C');
        $pdf->Ln(9);
        $pdf->Cell(70,0,"",0,0,'L'); $pdf->Image($fila['rutaImagen'],null,null,60,70);
        $pdf->Ln(5);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(0,0,utf8_decode('1.- DATOS DE IDENTIFICACIÓN'),0,0,'L');
        $pdf->Ln(2);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(30, 8,'Puesto:',1,0,'C'); $pdf->Cell(140,8,$filaI['puesto'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(30, 8,'Nombre:',1,0,'C'); $pdf->Cell(140,8,$filaI['nombre'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(30, 8,'Direccion:',1,0,'C'); $pdf->Cell(140,8,utf8_decode($filaI['direccion']),1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'Fecha:',1,0,'C'); $pdf->Cell(60,8,'Edad',1,0,'C'); $pdf->Cell(50,8,'Estado civil',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,$filaI['fecha'],1,0,'C'); $pdf->Cell(60,8,$filaI['edad'],1,0,'C'); $pdf->Cell(50, 8,$fila['estadocivil'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,'Telefono:',1,0,'C'); $pdf->Cell(80,8,'Nivel Academico',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,$filaI['telefono'],1,0,'C'); $pdf->Cell(80, 8,$filaI['nivelacademico'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,8,'Correo electronico: ',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,8,$filaI['email'],1,0,'C');
        $pdf->Ln(15);

        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(0,0,utf8_decode('2.- REVISIÓN DE DOCUMENTOS'),0,0,'L');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,8,'Actas del Registro Civil',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,'Nacimiento:',1,0,'C'); $pdf->Cell(80,8,'Matrimonio',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,$filaD['nacimiento'],1,0,'C'); $pdf->Cell(80, 8,$filaD['matrimonio'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'Fecha:',1,0,'C'); $pdf->Cell(60,8,'Edad',1,0,'C'); $pdf->Cell(50,8,'Estado civil',1,0,'C');

        

        //Conteo de paginas
        $pdf->AliasNbPages();
         //Final de pdf
        $pdf->Output();
?>