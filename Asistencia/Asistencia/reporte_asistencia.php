
<?php

require 'fpdf/fpdf.php';

class PDF extends  FPDF

{
	
	function header()
	
{


	$this->Image('imagenes/usuario.jpg', 30, 5, 30 );
	
    $this->SetFont('Arial','B',15);
	$this->Cell(30);
	$this->Cell(120,20,'Reporte de Asistencias',0,0,'C');

$this->Ln(30);

}
function Footer()


{
	
	$this->SetY(-15);
	$this->SetFont('Arial','I', 8);
	
   //$this->Cell(0,10, 'Pagina ' $this->PageNo().'/{nb}',0,0,'C' );	
}

}




?>

<?php


include ("conectar.php");

$query = "SELECT alumno.nombres AS a, nivel.nombres AS n,inicio.nombres AS i,curso.nombres,alumno.aula,asistencias.asistencia,asistencias.fecha FROM asistencias
 INNER JOIN curso ON    curso.id_curso=asistencias.id_curso


INNER JOIN  alumno ON  alumno.id_alumno=asistencias.id_alumno

INNER JOIN  nivel ON nivel.id_nivel=alumno.id_nivel
INNER JOIN inicio ON inicio.id_inicio=alumno.id_inicio";




$resultado = $conexion->query($query);


$pdf = new PDF();

$pdf-> AliasNbPages();
$pdf->AddPage();
//$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);


$pdf->Cell(40,6,'Alumno',1,0,'C',2);
$pdf->Cell(30,6,'Nivel','1',0,'C',1);

$pdf->Cell(25,6,'Inicio','1',0,'C',1);
$pdf->Cell(25,6,'Curso','1',0,'C',1);
$pdf->Cell(20,6,'Aula','1',0,'C',1);

$pdf->Cell(25,6,'Asistencia','1',0,'C',1);

$pdf->Cell(30,6,'Fecha',1,1,'C',1);

$pdf->SetFont('Arial','','10');


while($row = $resultado->fetch_assoc())

{
$pdf->Cell(40,6,$row['a'],1,0,'C');
$pdf->Cell(30,6,$row['n'],1,0,'C');
$pdf->Cell(25,6,$row['i'],1,0,'i');

$pdf->Cell(25,6,utf8_decode($row['nombres']),1,0,'C');
$pdf->Cell(20,6,utf8_decode($row['aula']),1,0,'C');
$pdf->Cell(25,6,utf8_decode($row['asistencia']),1,0,'C');



$pdf->Cell(30,6,utf8_decode($row['fecha']),1,1,'C');

	
	
}


$pdf->Output();


?>
