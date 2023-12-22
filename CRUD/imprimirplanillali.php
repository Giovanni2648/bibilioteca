<?php
	
	require ('../fpdf/fpdf.php');
	require '../conexion.php';
 	$id_libro=$_POST['libro'];
	 
 	$consulta1 = "SELECT * from libro where id_libro = '$id_libro'";
    $resultado1 = $mysqli->query($consulta1);

    $fila1=$resultado1->fetch_assoc();
    $titulo=$fila1['titulo'];
	$editorial=$fila1['editorial'];
	$area=$fila1['area'];
	$cover_url=$fila1['cover_url'];
	$digital_url=$fila1['digital_url'];
	$disponible_fisico=$fila1['disponible_fisico'];

   class PDF extends FPDF 
	{
		function Header()
		{
			global $titulo;
			global $editorial;
			global $area;
			global $cover_url;
			global $digital_url;
			global $disponible_fisico;

			$this->Ln(5);
			$this-> SetFont('Arial','',10);
			$this->Cell(40);
			$this-> Cell (150,10,'PLANILLA DE LIBROS',1,0,'C',0);
            $this-> Ln(20);
            $this->Cell(100, 10,utf8_decode('Titulo: '.$titulo), 2, 0, 'L');
            //comienza encabezado de tabla
            $this-> Ln(20);
			$this-> Cell(40,10,"Titulo",1,0,'C',0);
			$this-> Cell(40,10,"Editorial",1,0,'C',0);
			$this-> Cell(40,10,"area",1,0,'C',0);
			$this-> Cell(40,10,"Cover Url",1,0,'C',0);
            $this-> Ln(10);
		}
		function Footer()
		{
			$this-> SetY(-15);
			$this-> SetFont('Arial','I',8);
			$this-> Cell(0,10,utf8_decode('Página: ').$this->PageNo().'/{nb}',0,0,'C');
		}
	}
	
        
	$consulta = "SELECT * from libro where id_libro = '$id_libro'";

	
	$resultado = $mysqli -> query ($consulta);
	$pdf= new PDF('P','mm','A4');
	
	$pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);
	while ($fila=$resultado-> fetch_assoc())
		{
			$pdf -> Cell(40,10,$fila['titulo'],1,0,'C',0);
			$pdf -> Cell(40,10,utf8_decode($fila['editorial']),1,0,'C',0);
			$pdf -> Cell(40,10,utf8_decode($fila['area']),1,0,'C',0);
			$pdf -> Cell(40,10,utf8_decode($fila['cover_url']),1,0,'C',0);
			$pdf->Ln(20);
			$pdf-> Cell(40,10,"Digital Url",1,0,'C',0);
			$pdf-> Cell(40,10,"Disponible en Fisico",1,0,'C',0);
			$pdf->Ln(10);
			$pdf -> Cell(40,10,utf8_decode($fila['digital_url']),1,0,'C',0);
			$pdf -> Cell(40,10,utf8_decode($fila['disponible_fisico']),1,0,'C',0);
		 }
	$pdf-> Ln(20);
	$pdf->Cell(195,12,utf8_decode('Biblioteca - ETP N°1'),1,0,'C',0);
	$pdf -> Output();
?>