<?php


class pdf extends FPDF
{

    var $widths;
    var $aligns;

    function SetWidths($w)
    {
        //Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a)
    {
        //Set the array of column alignments
        $this->aligns = $a;
    }

    function Row($data)
    {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border
            $this->Rect($x, $y, $w, $h);
            //Print the text
            $this->MultiCell($w, 5, $data[$i], 0, $a, 1);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h)
    {
        //If the height h would cause an overflow, add a new page immediately
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt)
    {
        //Computes the number of lines a MultiCell of width w will take
        $cw = &$this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', $txt);
        $nb = strlen($s);
        if ($nb > 0 and $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l += $cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }
}

$fpdf = new pdf('P', 'mm', 'letter', true);
$fpdf->AddPage('portrait', 'letter');
$fpdf->setFont('Arial', 'B', 12);
$fpdf->Cell(0, 5, 'GRUPO VAME S.A.C.', 0, 0, 'C');
$fpdf->Image(base_url() . 'plantilla/dist/img/vame.png', 15, 15, 40, 20, 'PNG');
$fpdf->Ln(7);
$fpdf->setFont('Arial', '', 9);
$fpdf->Cell(0, 5, 'Av.Proceres 316 Int.2 Urb.Condevilla Señor - San', 0, 0, 'C');
$fpdf->Ln(4);
$fpdf->Cell(0, 5, 'Martin de Porres - Lima - Lima', 0, 0, 'C');
$fpdf->Ln(4);
$fpdf->Cell(0, 5, 'Teléfonos: (01) 496 88 31 / 960 430 277', 0, 0, 'C');
$fpdf->Ln(4);
$fpdf->Cell(0, 5, 'Email: contabilidad@vamesac.pe', 0, 0, 'C');



//Segundo Cuadro
$fpdf->setFont('Arial', 'B', 8);
$fpdf->SetY(37);
$fpdf->SetX(10);
$fpdf->SetWidths(array(12, 30, 40, 30, 40, 40));
$fpdf->SetDrawColor(237, 232, 228); //color de la linea
$fpdf->setFillColor(237, 232, 228); //Para poner relleno

$fpdf->Cell(12, 8, 'Item', 1, 0, 'L', 1);
$fpdf->Cell(30, 8, 'Fecha', 1, 0, 'L', 1);
$fpdf->Cell(40, 8, 'Valor Reciente (VR)', 1, 0, 'L', 1);
$fpdf->Cell(30, 8, 'Fecha', 1, 0, 'L', 1);
$fpdf->Cell(40, 8, 'Valor Anterior (VA)', 1, 0, 'L', 1);
$fpdf->Cell(40, 8, 'Porcentaje de Venta (PV)', 1, 0, 'L', 1);
$fpdf->Ln(8);


// $fpdf->Row(array('Item', 'Cant.', 'Codigo', 'Descripcion', 'Marca', 'U.M.', 'Precio U', 'Dscto %', 'Precio U/D', 'Valor Venta'));
$fpdf->SetFont('Arial', '', 9);
$fpdf->setFillColor(255, 255, 255); //Para poner relleno
$fpdf->setDrawColor(255, 255, 255); //Color del borde, va de la mano que el relleno
foreach ($index as $index) {
    $fpdf->Row(array(
        $index->item,
        $index->fecha_emision,
        $index->precio_venta,
        $index->fecha_emision2,
        $index->precio_venta2,
        $index->porcentaje_venta
    ));
}

$fpdf->OutPut('I', 'crecimiento_ventas.pdf'); //Destino [I,D,F,S], nombre del archivo,
