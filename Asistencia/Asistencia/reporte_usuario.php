
<?php

require 'fpdf/fpdf.php';

class PDF extends  FPDF

{
	
	function header()
	
{


	$this->Image('imagenes/usuario.jpg', 30, 5, 30 );
	
    $this->SetFont('Arial','B',15);
	$this->Cell(30);
	$this->Cell(120,20,'Reporte de Usuarios',0,0,'C');

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

$query = "SELECT  usuarios.id,usuarios.usuario,usuarios.password,cargo.nombres
FROM            usuarios INNER JOIN
                         
                         cargo ON usuarios.idcargo= cargo.idcargo";




$resultado = $conexion->query($query);


$pdf = new PDF();

$pdf-> AliasNbPages();
$pdf->AddPage();
//$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);

$pdf->Cell(40,6,'N',1,0,'C',2);
$pdf->Cell(50,6,'Usuario',1,0,'C',2);
$pdf->Cell(50,6,'Password','1',0,'C',1);
$pdf->Cell(50,6,'Cargo',1,1,'C',1);

$pdf->SetFont('Arial','','10');


while($row = $resultado->fetch_assoc())

{
$pdf->Cell(40,6,$row['id'],1,0,'C');
$pdf->Cell(50,6,$row['usuario'],1,0,'C');
$pdf->Cell(50,6,utf8_decode($row['password']),1,0,'C');

$pdf->Cell(50,6,utf8_decode($row['nombres']),1,1,'C');

	
	
}


$pdf->Output();


?>
