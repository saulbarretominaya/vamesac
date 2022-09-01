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


$fpdf->setFont('Arial', 'B', 12);
$fpdf->SetY(10);
$fpdf->SetX(150);
$fpdf->SetDrawColor(237, 232, 228); //color de la linea
$fpdf->setFillColor(237, 232, 228); //Para poner relleno
$fpdf->Cell(0, 23, '', 1, 0, '', 1); //cuadrado
//Contenido del cuadro
$fpdf->SetY(17);
$fpdf->SetX(168);
$fpdf->Write(0, $index_modal_cabecera_productos->ds_tipo_comprobante);
$fpdf->SetY(22);
$fpdf->SetX(157);
$fpdf->Write(0, 'RUC:20600862481');
$fpdf->SetY(27);
$fpdf->SetX(168);
$fpdf->Write(0, $index_modal_cabecera_productos->ds_serie_comprobante . '-' . $index_modal_cabecera_productos->num_comprobante);


//Segundo Cuadro
$fpdf->setFont('Arial', 'B', 8);
$fpdf->SetY(37);
$fpdf->SetX(10);
$fpdf->SetDrawColor(237, 232, 228); //color de la linea
// $fpdf->setFillColor(0, 0, 0); //Para poner relleno
$fpdf->Cell(0, 33, '', 1, 0, '', 0); //CUADRADO
//CONTENIDO DEL 2DO CUADRO - PRIMERA COLUMNA IZQUIERDA
$fpdf->SetY(40);
$fpdf->SetX(10);
$fpdf->Write(0, 'FECHA EMISION: ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->fecha_comprobante);
$fpdf->SetY(44);
$fpdf->SetX(10);
$fpdf->setFont('Arial', 'B', 8);
$fpdf->Write(0, 'MONEDA: ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->ds_moneda_descripcion);
$fpdf->SetY(48);
$fpdf->SetX(10);
$fpdf->setFont('Arial', 'B', 8);
$fpdf->Write(0, 'CONDICION PAGO: ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->ds_condicion_pago);
$fpdf->SetY(52);
$fpdf->SetX(10);
$fpdf->setFont('Arial', 'B', 8);
$fpdf->Write(0, 'CLIENTE: ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->ds_nombre_cliente_proveedor);
$fpdf->SetY(56);
$fpdf->SetX(10);
$fpdf->setFont('Arial', 'B', 8);
$fpdf->Write(0, 'RUC/DNI: ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->num_documento);
$fpdf->SetY(60);
$fpdf->SetX(10);
$fpdf->setFont('Arial', 'B', 8);
$fpdf->Write(0, 'DIRECCION: ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->direccion_fiscal);
$fpdf->SetY(64);
$fpdf->SetX(10);
$fpdf->setFont('Arial', 'B', 8);
$fpdf->Write(0, 'LUGAR ENTREGA: ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->lugar_entrega);
$fpdf->SetY(68);
$fpdf->SetX(10);
$fpdf->setFont('Arial', 'B', 8);
$fpdf->Write(0, 'GUIA: ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->ds_serie_guia_remision . '-' . $index_modal_cabecera_productos->id_tienda);
//CONTENIDO DEL 2DO CUADRO - SEGUNDA COLUMNA IZQUIERDA
$fpdf->SetY(40);
$fpdf->SetX(110);
$fpdf->setFont('Arial', 'B', 8);
$fpdf->Write(0, 'CONTACTO: ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->nombre_encargado);
$fpdf->SetY(44);
$fpdf->SetX(135);
$fpdf->setFont('Arial', 'B', 8);
$fpdf->Write(0, 'DATOS DEL ASESOR COMERCIAL');
$fpdf->SetY(48);
$fpdf->SetX(110);
$fpdf->Write(0, 'NOMBRE: ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->ds_nombre_trabajador);
$fpdf->SetY(52);
$fpdf->SetX(110);
$fpdf->setFont('Arial', 'B', 8);
$fpdf->Write(0, 'CELULAR: ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->celular);
$fpdf->SetY(56);
$fpdf->SetX(110);
$fpdf->setFont('Arial', 'B', 8);
$fpdf->Write(0, 'CORREO: ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->email);
$fpdf->SetY(60);
$fpdf->SetX(110);
$fpdf->setFont('Arial', 'B', 8);
$fpdf->Write(0, 'OBSERV. : ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->observacion);

$fpdf->SetY(64);
$fpdf->SetX(110);
$fpdf->setFont('Arial', 'B', 8);
$fpdf->Write(0, 'CLAUSULA: ');
$fpdf->setFont('Arial', '', 8);
$fpdf->Write(0, $index_modal_cabecera_productos->clausula);





$fpdf->SetY(72);
$fpdf->SetX(10);
$fpdf->SetFont('Arial', 'B', 9);
//Table with 20 rows and 4 columns
$fpdf->SetWidths(array(12, 11, 20, 40, 21, 10, 20, 18, 20, 24));
// $fpdf->setFillColor(255, 255, 255); //Para poner relleno
// $fpdf->setDrawColor(255, 255, 255); //Color del borde, va de la mano que el relleno

$fpdf->Cell(12, 8, 'Item', 1, 0, 'L', 1);
$fpdf->Cell(11, 8, 'Cant', 1, 0, 'L', 1);
$fpdf->Cell(20, 8, 'Codigo', 1, 0, 'L', 1);
$fpdf->Cell(40, 8, 'Descripción', 1, 0, 'L', 1);
$fpdf->Cell(21, 8, 'Marca', 1, 0, 'L', 1);
$fpdf->Cell(10, 8, 'U.M.', 1, 0, 'L', 1);
$fpdf->Cell(20, 8, 'Precio U', 1, 0, 'L', 1);
$fpdf->Cell(18, 8, 'Dscto %', 1, 0, 'L', 1);
$fpdf->Cell(20, 8, 'Precio U/D', 1, 0, 'L', 1);
$fpdf->Cell(24, 8, 'Valor Venta', 1, 0, 'L', 1);
$fpdf->Ln(8);


// $fpdf->Row(array('Item', 'Cant.', 'Codigo', 'Descripcion', 'Marca', 'U.M.', 'Precio U', 'Dscto %', 'Precio U/D', 'Valor Venta'));
$fpdf->SetFont('Arial', '', 9);
$fpdf->setFillColor(255, 255, 255); //Para poner relleno
$fpdf->setDrawColor(255, 255, 255); //Color del borde, va de la mano que el relleno
foreach ($index_modal_detalle_productos as $index) {
    $fpdf->Row(array(
        $index->item,
        $index->cantidad,
        $index->codigo_producto,
        $index->descripcion_producto,
        $index->ds_marca_producto,
        $index->ds_unidad_medida,
        $index->precio_u,
        $index->d,
        $index->precio_u_d,
        $index->valor_venta
    ));
}
$fpdf->SetFont('Arial', 'B', 9);
$fpdf->Cell(12, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(11, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(20, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(40, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(21, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(10, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(20, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(8, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(26, 4, 'TOTAL BRUTO', 1, 0, 'L', 1);
$fpdf->Cell(28, 4,  $index_modal_cabecera_productos->ds_moneda_simbolo . ' ' . $index_modal_cabecera_productos->valor_venta_total_sin_d, 1, 0, 'L', 1);
$fpdf->Ln(4);

$fpdf->Cell(12, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(11, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(20, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(40, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(21, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(10, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(20, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(8, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(26, 4, 'DCTO TOTAL', 1, 0, 'L', 1);
$fpdf->Cell(28, 4, $index_modal_cabecera_productos->ds_moneda_simbolo . ' ' . $index_modal_cabecera_productos->descuento_total, 1, 0, 'L', 1);
$fpdf->Ln(4);

$fpdf->Cell(12, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(11, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(20, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(40, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(21, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(10, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(20, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(8, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(26, 4, 'TOTAL', 1, 0, 'L', 1);
$fpdf->Cell(28, 4, $index_modal_cabecera_productos->ds_moneda_simbolo . ' ' . $index_modal_cabecera_productos->valor_venta_total_con_d, 1, 0, 'L', 1);
$fpdf->Ln(4);

$fpdf->Cell(12, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(11, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(20, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(40, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(21, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(10, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(20, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(8, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(26, 4, 'IGV', 1, 0, 'L', 1);
$fpdf->Cell(28, 4, $index_modal_cabecera_productos->ds_moneda_simbolo . ' ' . $index_modal_cabecera_productos->igv, 1, 0, 'L', 1);
$fpdf->Ln(4);

$fpdf->Cell(12, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(11, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(20, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(40, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(21, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(10, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(20, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(8, 4, '', 1, 0, 'L', 1);
$fpdf->Cell(26, 4, 'PRECIO VENTA', 1, 0, 'L', 1);
$fpdf->Cell(28, 4, $index_modal_cabecera_productos->ds_moneda_simbolo . ' ' . $index_modal_cabecera_productos->precio_venta, 1, 0, 'L', 1);
$fpdf->Ln(7);
// *************************************************************************



//CONTENIDO DE NUMERO DE CUENTAS
$fpdf->setFont('Arial', 'B', 8);
$fpdf->SetDrawColor(237, 232, 228); //color de la linea
$fpdf->setFillColor(0, 0, 0); //Para poner relleno
$fpdf->Cell(0, 20, '', 1, 0, '', 0); //CUADRADO
//CONTENIDO 
$fpdf->Ln(2);
$fpdf->Cell(0, 4, 'AGRADECEMOS REALIZAR EL PAGO EN LAS SIGUIENTES CUENTAS:', 0, 0, 'L');
$fpdf->Ln(4);
$fpdf->setFont('Arial', '', 8);
$fpdf->Cell(0, 4, 'BCP Soles: 191-04636947-0-83 / CCI 002-191-104636947083-58', 0, 0, 'L');
$fpdf->Ln(4);
$fpdf->Cell(0, 4, 'BCP Dólares: 191-04636962-1-98 / CCI 002-191-104636962198-54', 0, 0, 'L');
$fpdf->Ln(4);
$fpdf->Cell(0, 4, 'BBVA Soles: 0011-0174-01-00060636 / CCI 011-174-000100060636-06', 0, 0, 'L');
$fpdf->Ln(4);
$fpdf->OutPut('I', $index_modal_cabecera_productos->ds_serie_comprobante . '-' . $index_modal_cabecera_productos->num_comprobante . '.pdf'); //Destino [I,D,F,S], nombre del archivo,
