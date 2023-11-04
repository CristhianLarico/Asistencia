
<?php

require 'fpdf/fpdf.php';

class PDF extends  FPDF

{
	
	function header()
	
{


	$this->Image('imagenes/usuario.jpg', 30, 5, 30 );
	
    $this->SetFont('Arial','B',15);
	$this->Cell(30);
	$this->Cell(120,20,'Reporte de Materia',0,0,'C');

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

$query = "SELECT curso.id_curso,curso.nombres,docente.nombres AS d ,docente.especialidad FROM curso INNER JOIN docente ON     docente.id_docente=curso.id_docente";




$resultado = $conexion->query($query);


$pdf = new PDF();

$pdf-> AliasNbPages();
$pdf->AddPage();
//$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);

$pdf->Cell(40,6,'Codigo',1,0,'C',2);
$pdf->Cell(50,6,'Curso',1,0,'C',2);
$pdf->Cell(50,6,'Docente','1',0,'C',1);
$pdf->Cell(50,6,'Especialidad',1,1,'C',1);

$pdf->SetFont('Arial','','10');


while($row = $resultado->fetch_assoc())

{
$pdf->Cell(40,6,$row['id_curso'],1,0,'C');
$pdf->Cell(50,6,$row['nombres'],1,0,'C');
$pdf->Cell(50,6,utf8_decode($row['d']),1,0,'C');

$pdf->Cell(50,6,utf8_decode($row['especialidad']),1,1,'C');

	
	
}


$pdf->Output();


?>
