<?php
    require('fpdf/fpdf.php');
    require('conexion.php');
    //Archvio de connexion a la base de datos.
    $conexion=conectar();
    //Consulta formulario Identificacion
    $numI= $_POST['clave'];
    $strConsultaI = "SELECT * FROM identificacion where id_rfc = '$numI'";
    $candidatoI = mysqli_query($conexion,$strConsultaI);
    $filaI = mysqli_fetch_array($candidatoI);
    //Consulta formulario Documentos
    $numD= $_POST['clave'];
    $strConsultaD = "SELECT * FROM documentos where id_rfc = '$numD'";
    $candidatoD = mysqli_query($conexion,$strConsultaD);
    $filaD = mysqli_fetch_array($candidatoD);
    //Consulta formulario Laboral
    $numL= $_POST['clave'];
    $strConsultaL = "SELECT * FROM laboral where id_rfc = '$numL'";
    $candidatoL = mysqli_query($conexion,$strConsultaL);
    $filaL = mysqli_fetch_array($candidatoL);
    //Consulta formulario Referencia
    $numR= $_POST['clave'];
    $strConsultaR = "SELECT * FROM referencia where id_rfc = '$numR'";
    $candidatoR = mysqli_query($conexion,$strConsultaR);
    $filaR = mysqli_fetch_array($candidatoR);
    //Consulta formulario Econnomico
    $numE= $_POST['clave'];
    $strConsultaE = "SELECT * FROM economico where id_rfc = '$num'";
    $candidatoR = mysqli_query($conexion,$strConsultaR);
    $filaR = mysqli_fetch_array($candidatoR);

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
        $this->SetFont('Arial','B',10);
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
        $this->SetFont('Arial','B',10);
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
        $this->SetFont('Arial','B',9);
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
        $pdf->SetFont('Courier','I',10);
        $pdf->Cell(0,0,'',1,0,'C');
        $pdf->Ln(3);
        //MultiCell(Ancho de celdas, Alto de las celdas, Cadena para imprimir, Bordes, align, fill)
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(100, 8, 'ELEMENTO',1,0,'C'); $pdf->Cell(70, 8, 'Fecha: '.date('d/m/Y').'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(100, 8,$filaI['nombre'],1,0,'C'); $pdf->Cell(70, 8, 'GERENCIA DE CAPITAL HUMANO',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(100, 8,'R.F.C '.$filaI['id_rfc'].'',1,0,'C'); $pdf->Cell(70, 8, 'SERVICIO',1,0,'C');
        $pdf->Ln(9);
        $pdf->Cell(70,0,"",0,0,'L'); $pdf->Image($filaI['rutaImagen'],null,null,60,70);
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
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,$filaI['fecha'],1,0,'C'); $pdf->Cell(60,8,$filaI['edad'],1,0,'C'); $pdf->Cell(50, 8,$filaI['estadocivil'],1,0,'C');
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
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,8,utf8_decode('Identificación Personal'),1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'Documento:',1,0,'C'); $pdf->Cell(60,8,'Folio',1,0,'C'); $pdf->Cell(50,8,'Vigencia',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,$filaD['documento'],1,0,'C'); $pdf->Cell(60,8,$filaD['folio'],1,0,'C'); $pdf->Cell(50, 8,$filaD['vigencia'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,8,'Seguridad Social',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(30, 8,'IMMS:',1,0,'C'); $pdf->Cell(140,8,$filaD['imms'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(30, 8,'RFC:',1,0,'C'); $pdf->Cell(140,8,$filaD['rfc'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(30, 8,'CURP:',1,0,'C'); $pdf->Cell(140,8,$filaD['curp'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,8,'Observaciones y Comentarios',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,15,'',1,0,'C');
        $pdf->Ln(20);

        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(0,0,utf8_decode('3.- HISTORIA LABORAL'),0,0,'L');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,'Ultimo Empleo:',1,0,'C'); $pdf->Cell(80,8,'Domicilio',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,$filaL['ultimoEmpleo'],1,0,'C'); $pdf->Cell(80, 8,$filaL['domicilio'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,'Giro:',1,0,'C'); $pdf->Cell(80,8,utf8_decode('Teléfono'),1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,$filaL['giro'],1,0,'C'); $pdf->Cell(80, 8,$filaL['telefono'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,utf8_decode('Puesto Desempeñado:'),1,0,'C'); $pdf->Cell(60,8,'Fecha de Ingreso',1,0,'C'); $pdf->Cell(50,8,'Fecha de Baja',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,$filaL['puesto'],1,0,'C'); $pdf->Cell(60,8,$filaL['fechaIngreso'],1,0,'C'); $pdf->Cell(50, 8,$filaL['fechaBaja'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,utf8_decode('Antigüedad:'),1,0,'C'); $pdf->Cell(60,8,'Sueldo Inicial',1,0,'C'); $pdf->Cell(50,8,'Sueldo Final',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,$filaL['antiguedad'],1,0,'C'); $pdf->Cell(60,8,$filaL['sueldoInicial'],1,0,'C'); $pdf->Cell(50, 8,$filaL['sueldoFinal'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,'Jefe Inmediato:',1,0,'C'); $pdf->Cell(80,8,'Puesto',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,$filaL['jefe'],1,0,'C'); $pdf->Cell(80, 8,$filaL['puesto'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,8,utf8_decode('Motivo de separación: '),1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,8,$filaL['motivo'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,8,'Comportamiento durante su estancia: ',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(40, 8,'Con Superiores',1,0,'C'); $pdf->Cell(40, 8,'',1,0,'C'); $pdf->Cell(50, 8,utf8_decode('Con compañeros'),1,0,'C'); $pdf->Cell(40, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,8,utf8_decode('Evaluación del Desempeño: '),1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,'Escala:',1,0,'C'); $pdf->Cell(80,8,'1 Deficiente a 10 Excelente',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(40, 8,'Honradez',1,0,'C'); $pdf->Cell(40, 8,'',1,0,'C'); $pdf->Cell(50, 8,'Iniciativa',1,0,'C'); $pdf->Cell(40, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(40, 8,'Responsabilidad',1,0,'C'); $pdf->Cell(40, 8,'',1,0,'C'); $pdf->Cell(50, 8,utf8_decode('Espíritu de Servicio'),1,0,'C'); $pdf->Cell(40, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(40, 8,'Confiabilidad',1,0,'C'); $pdf->Cell(40, 8,'',1,0,'C'); $pdf->Cell(50, 8,'Eficiencia',1,0,'C'); $pdf->Cell(40, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(40, 8,'Trabajo en Equipo',1,0,'C'); $pdf->Cell(40, 8,'',1,0,'C'); $pdf->Cell(25, 8,'Sumatoria',1,0,'C'); $pdf->Cell(20, 8,'',1,0,'C'); $pdf->Cell(25, 8,'Promedio',1,0,'C'); $pdf->Cell(20, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,'Jefe Inmediato:',1,0,'C'); $pdf->Cell(80,8,'Puesto',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,'',1,0,'C'); $pdf->Cell(80,8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,8,'Observaciones y Comentarios',1,0,'C');
        $pdf->Ln(20);

        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(0,0,utf8_decode('5.REFERENCIAS PERSONALES'),0,0,'L');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,8,utf8_decode('Referencia Uno: '),1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,'Nombre:',1,0,'C'); $pdf->Cell(80,8,utf8_decode('Ocupación'),1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,$filaR['nombre'],1,0,'C'); $pdf->Cell(80, 8,$filaR['ocupacion'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(40, 8,utf8_decode('Tipo de relación'),1,0,'C'); $pdf->Cell(40, 8,$filaR['tipo'],1,0,'C'); $pdf->Cell(50, 8,'Tiempo',1,0,'C'); $pdf->Cell(40, 8,utf8_decode($filaR['tiempo']),1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,'Direccion:',1,0,'C'); $pdf->Cell(80,8,'Telefono',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,$filaR['direccion'],1,0,'C'); $pdf->Cell(80, 8,$filaR['telefono'],1,0,'C');
        $pdf->Ln(20);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(170,8,utf8_decode('Referencia Dos: '),1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,'Nombre:',1,0,'C'); $pdf->Cell(80,8,utf8_decode('Ocupación'),1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,$filaR['nombreDos'],1,0,'C'); $pdf->Cell(80, 8,$filaR['ocupacionDos'],1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(40, 8,utf8_decode('Tipo de relación'),1,0,'C'); $pdf->Cell(40, 8,$filaR['tipoDos'],1,0,'C'); $pdf->Cell(50, 8,'Tiempo',1,0,'C'); $pdf->Cell(40, 8,utf8_decode($filaR['tiempoDos']),1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,'Direccion:',1,0,'C'); $pdf->Cell(80,8,'Telefono',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(90, 8,$filaR['direccionDos'],1,0,'C'); $pdf->Cell(80, 8,$filaR['telefonoDos'],1,0,'C');
        $pdf->Ln(20);

        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(0,0,utf8_decode('6.INVESTIGACIÓN ACADÉMICA'),0,0,'L');
        $pdf->Ln(20);

        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(0,0,utf8_decode('7. INFORMACIÓN ECONÓMICA'),0,0,'L');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(0,0,utf8_decode('a) Ingresos'),0,0,'L');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,utf8_decode('Persona'),1,0,'C'); $pdf->Cell(60,8,'Fuente',1,0,'C'); $pdf->Cell(50,8,'Monto Mensual',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'',1,0,'C'); $pdf->Cell(60,8,'',1,0,'C'); $pdf->Cell(50, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'',1,0,'C'); $pdf->Cell(60,8,'',1,0,'C'); $pdf->Cell(50, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'',1,0,'C'); $pdf->Cell(60,8,'',1,0,'C'); $pdf->Cell(50, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'',1,0,'C'); $pdf->Cell(60,8,'TotaL: ',1,0,'C'); $pdf->Cell(50, 8,'',1,0,'C');
        $pdf->Ln(10);

        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(0,0,utf8_decode('b)  Egresos'),0,0,'L');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,utf8_decode('Persona'),1,0,'C'); $pdf->Cell(60,8,'Concepto',1,0,'C'); $pdf->Cell(50,8,'Monto Mensual',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'',1,0,'C'); $pdf->Cell(60,8,'Alimentación',1,0,'C'); $pdf->Cell(50, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'',1,0,'C'); $pdf->Cell(60,8,'Ropa y Calzado',1,0,'C'); $pdf->Cell(50, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'',1,0,'C'); $pdf->Cell(60,8,'Transporte',1,0,'C'); $pdf->Cell(50, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'',1,0,'C'); $pdf->Cell(60,8,'Servicios: ',1,0,'C'); $pdf->Cell(50, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'',1,0,'C'); $pdf->Cell(60,8,'Gastos Escolares: ',1,0,'C'); $pdf->Cell(50, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'',1,0,'C'); $pdf->Cell(60,8,'Actividades deportivas: ',1,0,'C'); $pdf->Cell(50, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'',1,0,'C'); $pdf->Cell(60,8,'Actividades recreativas: ',1,0,'C'); $pdf->Cell(50, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'',1,0,'C'); $pdf->Cell(60,8,'Otros: ',1,0,'C'); $pdf->Cell(50, 8,'',1,0,'C');
        $pdf->Ln(8);
        $pdf->Cell(10,0,"",0,0,'L'); $pdf->Cell(60, 8,'',1,0,'C'); $pdf->Cell(60,8,'Total: ',1,0,'R'); $pdf->Cell(50, 8,'',1,0,'C');
        $pdf->Ln(10);
        //Conteo de paginas
        $pdf->AliasNbPages();
         //Final de pdf
        $pdf->Output();
?>