<?php
require('fpdf/fpdf.php');

// Definir función para la conexión a la base de datos
function conectar() {
    $mysqli = new mysqli("mysql.webcindario.com","mudf","GEO0987654321","mudf");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    return $mysqli;
}

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        $this->Image('https://cdn.icon-icons.com/icons2/1736/PNG/512/4043233-anime-away-face-no-nobody-spirited_113254.png',10,8,20);
        $this->SetFont('Arial','B',12);
        $this->Cell(0,10,'DATOS DE LOS ESTUDIANTES ',0,1,'C');
        // Salto de línea
        $this->Ln(10);
    }

    // Tabla coloreada
    function FancyTable($header, $data)
    {
        // Colores, ancho de línea y fuente en negrita
        $this->SetFillColor(132, 83, 224);
        $this->SetTextColor(255);
        $this->SetDrawColor(75, 69, 92);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
        // Cabecera
        $w = array(15, 15, 12, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 120);
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $this->Ln();
        // Restauración de colores y fuentes
        $this->SetFillColor(173, 255, 198);
        $this->SetFillColor(173, 255, 198);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Datos
        $fill = false;
        foreach($data as $row)
        {
            $this->Cell($w[0],6,$row['nombres'],1,0,'L',$fill);
            $this->Cell($w[1],6,$row['apellidos'],1,0,'L',$fill);
            $this->Cell($w[2],6,$row['grupo'],1,0,'C',$fill);
            $this->Cell($w[4],6,$row['cal1'],1,0,'C',$fill);
            $this->Cell($w[5],6,$row['cal2'],1,0,'C',$fill);
            $this->Cell($w[6],6,$row['cal3'],1,0,'C',$fill);
            $this->Cell($w[7],6,$row['cal4'],1,0,'C',$fill);
            $this->Cell($w[8],6,$row['cal5'],1,0,'C',$fill);
            $this->Cell($w[9],6,$row['cal6'],1,0,'C',$fill);
            $this->Cell($w[10],6,$row['cal7'],1,0,'C',$fill);
            $this->Cell($w[11],6,$row['cal8'],1,0,'C',$fill);
            
            $this->Ln();
            $fill = !$fill;
        }
        // Línea de cierre
        $this->Cell(array_sum($w),0,'','T');
    }
}

// Obtener conexión a la base de datos
$con = conectar();

// Consulta SQL para obtener los datos
$sql = "SELECT * FROM alumno";
$result = $con->query($sql);

// Datos para la tabla
$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Cerrar conexión a la base de datos
$con->close();

// Crear PDF
$pdf = new PDF();
// Títulos de las columnas
$header = array('Nombres', 'Apellidos', 'Grupo', 'Base de datos', 'Programacion', 'Mod de Software', 'Diseno', 'Matematicas', 'Foso', 'Redes', 'Ingles');
$pdf->SetFont('Arial','',7.5);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();
?>