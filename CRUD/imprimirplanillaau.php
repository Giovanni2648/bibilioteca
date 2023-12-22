<?php
	
	require ('../fpdf/fpdf.php');
	require '../conexion.php';
 	$id_autor=$_POST['autor'];
	 
 	$consulta1 = "SELECT * FROM autor WHERE id_autor = '$id_autor'";
    $resultado1 = $mysqli->query($consulta1);

    $fila1=$resultado1->fetch_assoc();
    $nom_autor=$fila1['nombre'];
	$nac_autor=$fila1['nacionalidad'];

   class PDF extends FPDF 
	{
		function Header()
		{
			global $nom_autor;
			global $nac_autor;

			$this->Ln(5);
			$this-> SetFont('Arial','',10);
			$this->Cell(40);
			$this-> Cell (150,10,'PLANILLA DE AUTOR	',1,0,'C',0);
            $this-> Ln(20);
            $this->Cell(100, 10,utf8_decode('autor: '.$nom_autor), 2, 0, 'L');
            //comienza encabezado de tabla
            $this-> Ln(20);
			$this-> Cell(30,10,"Autor",1,0,'C',0);
			$this-> Cell(40,10,"Nacionalidad",1,0,'C',0);
            $this-> Ln(10);
		}
		function Footer()
		{
			$this-> SetY(-15);
			$this-> SetFont('Arial','I',8);
			$this-> Cell(0,10,utf8_decode('Página: ').$this->PageNo().'/{nb}',0,0,'C');
		}
	}
	
        
	$consulta = "SELECT * FROM autor WHERE id_autor = '$id_autor'";

	
	$resultado = $mysqli -> query ($consulta);
	$pdf= new PDF('P','mm','A4');
	
	$pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);
    $con=0;
	while ($fila=$resultado-> fetch_assoc())
		{
			$pdf -> Cell(30,10,$fila['nombre'],1,0,'C',0);
			$pdf -> Cell(40,10,utf8_decode($fila['nacionalidad']),1,0,'C',0);
		 }
	$pdf-> Ln(20);
	$pdf->Cell(195,12,utf8_decode('Biblioteca - ETP N°1'),1,0,'C',0);
	$pdf -> Output();
?>