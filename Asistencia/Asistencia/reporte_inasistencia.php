
<?php

require 'fpdf/fpdf.php';

class PDF extends  FPDF

{
	
	function header()
	
{


	$this->Image('imagenes/usuario.jpg', 30, 5, 30 );
	
    $this->SetFont('Arial','B',15);
	$this->Cell(30);
	$this->Cell(120,20,'Reporte de Inasistencias',0,0,'C');

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

$query = "SELECT alumno.nombres AS a, nivel.nombres ,curso.nombres AS curso,inasistencias.asistencia,motivo.nombres AS motivo,inasistencias.descripcion,inasistencias.fecha FROM inasistencias
 INNER JOIN curso ON    curso.id_curso=inasistencias.id_curso


INNER JOIN  alumno ON  alumno.id_alumno=inasistencias.id_alumno

INNER JOIN  nivel ON nivel.id_nivel=alumno.id_nivel
INNER JOIN inicio ON inicio.id_inicio=alumno.id_inicio

INNER JOIN motivo ON  motivo.id_motivo=inasistencias.id_motivo";




$resultado = $conexion->query($query);


$pdf = new PDF();

$pdf-> AliasNbPages();
$pdf->AddPage();
//$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);


$pdf->Cell(40,6,'Alumno',1,0,'C',2);
$pdf->Cell(30,6,'Nivel','1',0,'C',1);
$pdf->Cell(25,6,'Curso','1',0,'C',1);

$pdf->Cell(25,6,'Asistencia','1',0,'C',1);
$pdf->Cell(20,6,'Motivo','1',0,'C',1);
$pdf->Cell(28,6,'Descripcion','1',0,'C',1);

$pdf->Cell(30,6,'Fecha',1,1,'C',1);

$pdf->SetFont('Arial','','10');


while($row = $resultado->fetch_assoc())

{
$pdf->Cell(40,6,$row['a'],1,0,'C');
$pdf->Cell(30,6,$row['nombres'],1,0,'C');
$pdf->Cell(25,6,$row['curso'],1,0,'i');
$pdf->Cell(25,6,utf8_decode($row['asistencia']),1,0,'C');
$pdf->Cell(20,6,utf8_decode($row['motivo']),1,0,'C');
$pdf->Cell(28,6,utf8_decode($row['descripcion']),1,0,'C');



$pdf->Cell(30,6,utf8_decode($row['fecha']),1,1,'C');

	
	
}


$pdf->Output();


?>
