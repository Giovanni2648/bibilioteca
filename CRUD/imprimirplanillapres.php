<?php
	
	require ('../fpdf/fpdf.php');
	require '../conexion.php';
 	$prestamo=$_POST['prestamo'];
	 
 	$consulta1 = "SELECT usuario.nombre as usuario, libro.titulo as libro, fecha_prestamo, fecha_devolucion, devuelto FROM prestamo
        LEFT JOIN usuario on usuario.id_usuario = prestamo.usuario_id
        LEFT JOIN libro on libro.id_libro = prestamo.libro_id WHERE id_prestamo = '$prestamo'";
    $resultado1 = $mysqli->query($consulta1);

    $fila1=$resultado1->fetch_assoc();
    $usuario=$fila1['usuario'];
	$libro=$fila1['libro'];
	$fecha_prestamo=$fila1['fecha_prestamo'];
	$fecha_devolucion=$fila1['fecha_devolucion'];
	$devuelto=$fila1['devuelto'];

   class PDF extends FPDF 
	{
		function Header()
		{
			global $usuario;
			global $libro;
			global $fecha_prestamo;
			global $fecha_devolucion;
			global $devuelto;

			$this->Ln(5);
			$this-> SetFont('Arial','',10);
			$this->Cell(40);
			$this-> Cell (150,10,'PLANILLA DE PRESTAMOS	',1,0,'C',0);
            $this-> Ln(20);
            $this->Cell(100, 10,utf8_decode('Usuario: '.$usuario), 2, 0, 'L');
            //comienza encabezado de tabla
            $this-> Ln(20);
			$this-> Cell(30,10,"Usuario",1,0,'C',0);
			$this-> Cell(40,10,"Libro",1,0,'C',0);
			$this-> Cell(40,10,"Fecha de Prestamo",1,0,'C',0);
			$this-> Cell(40,10,"Fecha de Devolucion",1,0,'C',0);
			$this-> Cell(40,10,"¿Devuelto?",1,0,'C',0);
            $this-> Ln(10);
		}
		function Footer()
		{
			$this-> SetY(-15);
			$this-> SetFont('Arial','I',8);
			$this-> Cell(0,10,utf8_decode('Página: ').$this->PageNo().'/{nb}',0,0,'C');
		}
	}
	
        
	$consulta = "SELECT usuario.nombre as usuario, libro.titulo as libro, fecha_prestamo, fecha_devolucion, devuelto FROM prestamo
        LEFT JOIN usuario on usuario.id_usuario = prestamo.usuario_id
        LEFT JOIN libro on libro.id_libro = prestamo.libro_id WHERE id_prestamo = '$prestamo'";

	
	$resultado = $mysqli -> query ($consulta);
	$pdf= new PDF('P','mm','A4');
	
	$pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);
    $con=0;
	while ($fila=$resultado-> fetch_assoc())
		{
			$pdf -> Cell(30,10,$fila['usuario'],1,0,'C',0);
			$pdf -> Cell(40,10,utf8_decode($fila['libro']),1,0,'C',0);
			$pdf -> Cell(40,10,utf8_decode($fila['fecha_prestamo']),1,0,'C',0);
			$pdf -> Cell(40,10,utf8_decode($fila['fecha_devolucion']),1,0,'C',0);
			$pdf -> Cell(40,10,utf8_decode($fila['devuelto']),1,0,'C',0);
		 }
	$pdf-> Ln(20);
	$pdf->Cell(195,12,utf8_decode('Biblioteca - ETP N°1'),1,0,'C',0);
	$pdf -> Output();
?>