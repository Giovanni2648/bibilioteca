<?php
	
	require ('../fpdf/fpdf.php');
	require '../conexion.php';
 	$id_autor=$_POST['libro_autor'];
	 
 	$consulta1 = "SELECT libro.titulo as libro_t, autor.nombre as autor_n FROM libro_autor
        LEFT JOIN libro ON libro.id_libro = libro_autor.libro_id
        LEFT JOIN autor ON autor.id_autor = libro_autor.autor_id WHERE id = '$id_autor'";
    $resultado1 = $mysqli->query($consulta1);

    $fila1=$resultado1->fetch_assoc();
    $libro_t=$fila1['libro_t'];
	$autor_n=$fila1['autor_n'];

   class PDF extends FPDF 
	{
		function Header()
		{
			global $libro_t;
			global $autor_n;

			$this->Ln(5);
			$this-> SetFont('Arial','',10);
			$this->Cell(40);
			$this-> Cell (150,10,'PLANILLA DE LIBROS',1,0,'C',0);
            $this-> Ln(20);
            $this->Cell(100, 10,utf8_decode('autor: '.$libro_t), 2, 0, 'L');
            //comienza encabezado de tabla
            $this-> Ln(20);
			$this-> Cell(30,10,"Libro",1,0,'C',0);
			$this-> Cell(40,10,"Autor",1,0,'C',0);
            $this-> Ln(10);
		}
		function Footer()
		{
			$this-> SetY(-15);
			$this-> SetFont('Arial','I',8);
			$this-> Cell(0,10,utf8_decode('Página: ').$this->PageNo().'/{nb}',0,0,'C');
		}
	}
	
        
	$consulta = "SELECT libro.titulo as libro_t, autor.nombre as autor_n FROM libro_autor
        LEFT JOIN libro ON libro.id_libro = libro_autor.libro_id
        LEFT JOIN autor ON autor.id_autor = libro_autor.autor_id WHERE id = '$id_autor'";

	
	$resultado = $mysqli -> query ($consulta);
	$pdf= new PDF('P','mm','A4');
	
	$pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);
    $con=0;
	while ($fila=$resultado-> fetch_assoc())
		{
			$pdf -> Cell(30,10,$fila['libro_t'],1,0,'C',0);
			$pdf -> Cell(40,10,utf8_decode($fila['autor_n']),1,0,'C',0);
		 }
	$pdf-> Ln(20);
	$pdf->Cell(195,12,utf8_decode('Biblioteca - ETP N°1'),1,0,'C',0);
	$pdf -> Output();
?>