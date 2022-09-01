<?php

// CLASE 1: Primer PDF
// $this->fpdf = new FPDF();
// $this->fpdf->AddPage(); //Obligatorio sino no habre el PDF
// $this->fpdf->setFont('Arial', 'B', 14); //Escoger la fuente: Tipo de letra, negrita, tamaño
// $this->fpdf->Cell(30, 5, 'Hola mundo'); //Ancho, alto, parrafo.
// $this->fpdf->AddPage(); //Si deseas agregar otra pagina
// $this->fpdf->Write(5, 'Hola mundo otra vez');
// $this->fpdf->OutPut();

// CLASE 2: CONFIGURACION DE PAGINA
// $this->fpdf = new FPDF();
// $this->fpdf->AddPage('lanscape', 'LETTER'); //Recibe 3 parametros => [portrait=RETRATO,lanscape=PANORAMICO], tamaño [A3,A4,A5,LETTER, LEGAL], orientacion=180
// $this->fpdf->setFont('Arial', '', '14');
// $this->fpdf->Write(5, 'Pagina #1');
// $this->fpdf->addPage('portrait', 'LEGAL');
// $this->fpdf->Write(5, utf8_decode('Página #2'));
// $this->fpdf->addPage('lanscape', 'A5', 270); // El 180 indica que el texto entro como rotacion
// $this->fpdf->Write(5, utf8_decode('Página #3'));
// $this->fpdf->OutPut();

// CLASE 3: FUENTE Y SALTO DE LINEA
// $this->fpdf = new FPDF();
// $this->fpdf->AddPage('portrait', 'letter');
// $this->fpdf->setFont('Arial', '', '14');
// $this->fpdf->Cell(100, 5, utf8_decode('Primera Linea, esta en Arial, tamaño 14')); //Se ve en milimetros 1000 milimetros es un metro
// $this->fpdf->Ln(); //Salto de linea en una hoja
// $this->fpdf->setFont('HELVETICA', 'B', '12');
// $this->fpdf->Write(5, utf8_decode('Segunda Linea, formato HELVETICA Negrita y tamaño 12'));
// $this->fpdf->setFont('courier', 'BI', '12');
// $this->fpdf->Ln(); //Salto de linea en una hoja
// $this->fpdf->Write(10, utf8_decode('Tercera Linea, formato Courier Negrita,Cursiva y tamaño 12')); //Alto
// $this->fpdf->Ln(); //Salto de linea en una hoja
// $this->fpdf->setFont('arial', 'B'); //Para fuentes
// $this->fpdf->Write(5, 'Esto es Arial ');
// $this->fpdf->setFont('arial', 'I');
// $this->fpdf->Write(5, 'y este es cursiva');
// $this->fpdf->OutPut();


// CLASE 4: METODOS DE ESCRIBIR
// TITULO DEL REPORTE
// $this->fpdf = new FPDF();
// $this->fpdf->AddPage('PORTRAIT', 'LETTER');
// $this->fpdf->setFont('Arial', 'B', '14');
// $this->fpdf->Write(10, 'EMPLEADOS REGISTRADOS EN EL PORTAL');
// $this->fpdf->Ln(10);

// //CABECERA DE  LA TABLA
// $this->fpdf->setFont('Arial', 'B', '10');
// $this->fpdf->Cell(25, 5, 'CODIGO', 1, 0, 'L', false); //ANCHO, ALTO, TEXTO, BORDES, ?, ALINEACION, RELLENAR, ENLACE
// $this->fpdf->Cell(45, 5, 'NOMBRE COMPLETO', 1, 0, 'L', false);
// $this->fpdf->Cell(90, 5, utf8_decode('DIRECCIÓN'), 1, 0, 'L', false);
// $this->fpdf->Ln(5); //SALTO lINEA

// //FILAS DE LA TABLA
// $this->fpdf->setFont('Arial', '', '10');
// $this->fpdf->Cell(25, 5, 'COD-0001', 1, 0, 'L', false);
// $this->fpdf->Cell(45, 5, 'SAUL BARRETO MINAYA', 1, 0, 'L', false);
// $this->fpdf->Cell(90, 5, 'JR. 28 DE MARZO 543 LA FLOR CARABAYLLO', 1, 0, 'L', false);
// $this->fpdf->Ln(5); //Separador
// $this->fpdf->Cell(25, 5, 'COD-0002', 1, 0, 'L', false);
// $this->fpdf->Cell(45, 5, 'AITANA BARRETO PEREZ', 1, 0, 'L', false);
// $this->fpdf->Cell(90, 5, 'JR. 28 DE MARZO 543 LA FLOR CARABAYLLO', 1, 0, 'L', false);
// $this->fpdf->OutPut();


//CLASE 5: OPCIONES DE SALIDA OutPut NOMBRE DEL ARCHIVO DEL PDF
// TITULO DEL REPORTE
// $this->fpdf = new FPDF();
// $this->fpdf->AddPage('PORTRAIT', 'LETTER');
// $this->fpdf->setFont('Arial', 'B', '14');
// $this->fpdf->Write(10, 'EMPLEADOS REGISTRADOS EN EL PORTAL');
// $this->fpdf->Ln(10);

// //CABECERA DE  LA TABLA
// $this->fpdf->setFont('Arial', 'B', '10');
// $this->fpdf->Cell(25, 5, 'CODIGO', 1, 0, 'L', false); //ANCHO, ALTO, TEXTO, BORDES, ?, ALINEACION, RELLENAR, ENLACE
// $this->fpdf->Cell(45, 5, 'NOMBRE COMPLETO', 1, 0, 'L', false);
// $this->fpdf->Cell(90, 5, utf8_decode('DIRECCIÓN'), 1, 0, 'L', false);
// $this->fpdf->Ln(5); //SALTO lINEA

// //FILAS DE LA TABLA
// $this->fpdf->setFont('Arial', '', '10');
// $this->fpdf->Cell(25, 5, 'COD-0001', 1, 0, 'L', false);
// $this->fpdf->Cell(45, 5, 'SAUL BARRETO MINAYA', 1, 0, 'L', false);
// $this->fpdf->Cell(90, 5, 'JR. 28 DE MARZO 543 LA FLOR CARABAYLLO', 1, 0, 'L', false);
// $this->fpdf->Ln(5); //Separador
// $this->fpdf->Cell(25, 5, 'COD-0002', 1, 0, 'L', false);
// $this->fpdf->Cell(45, 5, 'AITANA BARRETO PEREZ', 1, 0, 'L', false);
// $this->fpdf->Cell(90, 5, 'JR. 28 DE MARZO 543 LA FLOR CARABAYLLO', 1, 0, 'L', false);
// $this->fpdf->OutPut('I', 'Reporte Ventas.pdf'); //Destino [I,D,F,S], nombre del archivo,


// Clase 6: ENCABEZADO Y PIE DE PAGINA
// $this->fpdf = new PDF();
// $this->fpdf->AddPage('portrait', 'A4');

// class PDF extends FPDF
// {

//     public function header()
//     { //Encabezado
//         $this->SetFont('Arial', 'B', 10);
//         $this->Write(5, 'Lima 2022');
//         $this->SetX(165);
//         $this->Write(5, utf8_decode('Provías Nacional')); //alto y texto
//     }

//     public function footer()
//     { //Pie de Pagina
//         $this->SetFont('Arial', 'B', 10);
//         $this->SetY(-15);
//         $this->Write(5, '4 de marzo del 2020');
//     }
// }

// $this->fpdf = new PDF();
// $this->fpdf->AddPage('portrait', 'A4');
// $this->fpdf->setFont('Arial', 'B', 14);
// $this->fpdf->SetY(20);
// $this->fpdf->Cell(0, 5, 'Reporte de Ventas', 0, 0, 'C');
// //Agregas otra Pagina si deseas
// $this->fpdf->AddPage('portrait', 'A4');
// $this->fpdf->setFont('Arial', 'B', 14);
// $this->fpdf->SetY(20);
// $this->fpdf->Cell(0, 5, 'Reporte de Cotizaciones', 0, 0, 'C');
// $this->fpdf->OutPut();


//Clase 7: IMAGENES
// $this->fpdf = new PDF();
// $this->fpdf->AddPage('portrait', 'A4');

// class PDF extends FPDF
// {
//     //Parametros de Imagen = [ruta,posicion X , posicion Y, ancho, alto, tipo, link]
//     public function header()
//     { //Encabezado
//         $this->SetFont('Arial', 'B', 10);
//         $this->cell(0, 5, utf8_decode('Lima - Perú'), 0, 0, 'C');
//         $this->Image(base_url() . 'plantilla/dist/img/vame.png', 170, 10, 30, 15, 'PNG', base_url() . 'Reportes/Controller_reportes');
//     }

//     public function footer()
//     { //Pie de Pagina
//         $this->SetFont('Arial', 'B', 10);
//         $this->SetY(-15);
//         $this->Write(5, '4 de marzo del 2020');
//     }
// }

// $this->fpdf = new PDF();
// $this->fpdf->AddPage('portrait', 'letter');
// $this->fpdf->setFont('Arial', 'B', 14);
// $this->fpdf->SetY(20);
// $this->fpdf->Cell(0, 5, 'Reporte de Ventas', 0, 0, 'C');
// //Agregas otra Pagina si deseas
// $this->fpdf->AddPage('portrait', 'letter');
// $this->fpdf->setFont('Arial', 'B', 14);
// $this->fpdf->SetY(20);
// $this->fpdf->Cell(0, 5, 'Reporte de Cotizaciones', 0, 0, 'C');
// $this->fpdf->Image(base_url() . 'plantilla/dist/img/vame.png', 90, 30, 30, 15, 'PNG', base_url() . 'Reportes/Controller_reportes');
// $this->fpdf->OutPut();


//Clase 8: Numero de Pagina
// class PDF extends FPDF
// {

//     //$fpdf->PageNO() =numero de pagina actual
//     //$fpdf->AliasNbPages() =numero total de paginas
//     //"numero de pagina 1 de {nb} "

//     public function header()
//     { //Encabezado
//         $this->SetFont('Arial', 'B', 10);
//         $this->cell(0, 5, utf8_decode('Lima - Perú'), 0, 0, 'C');
//         $this->Image(base_url() . 'plantilla/dist/img/vame.png', 170, 10, 30, 15, 'PNG', base_url() . 'Reportes/Controller_reportes');
//     }

//     public function footer()
//     { //Pie de Pagina
//         $this->SetFont('Arial', 'B', 10);
//         $this->SetY(-15);
//         $this->Write(5, '4 de marzo del 2020');
//         $this->SetX(-25);
//         $this->AliasNbPages();
//         $this->Write(5, $this->PageNo() . '/{nb}');
//     }
// }

// $this->fpdf = new PDF();
// $this->fpdf->AddPage('portrait', 'letter');
// $this->fpdf->setFont('Arial', 'B', 14);
// $this->fpdf->SetY(20);
// $this->fpdf->Cell(0, 5, 'Reporte de Ventas', 0, 0, 'C');
// //Agregas otra Pagina si deseas
// $this->fpdf->AddPage('portrait', 'letter');
// $this->fpdf->setFont('Arial', 'B', 14);
// $this->fpdf->SetY(20);
// $this->fpdf->Cell(0, 5, 'Reporte de Cotizaciones', 0, 0, 'C');
// $this->fpdf->Image(base_url() . 'plantilla/dist/img/vame.png', 90, 30, 30, 15, 'PNG', base_url() . 'Reportes/Controller_reportes');
// $this->fpdf->OutPut();


// Clase 9: COLOR DE TEXTO
// class PDF extends FPDF
// {
//     public function header()
//     {
//         $this->SetFont('Arial', 'B', 10);
//         $this->SetTextColor(0, 0, 0); //COLORES RGB BUSCAR EN GOOGLE
//         $this->cell(0, 5, utf8_decode('Lima - Perú'), 0, 0, 'C');
//         $this->Image(base_url() . 'plantilla/dist/img/vame.png', 170, 10, 30, 15, 'PNG', base_url() . 'Reportes/Controller_reportes');
//     }

//     public function footer()
//     {
//         $this->SetFont('Arial', 'B', 10);
//         $this->SetY(-15);
//         $this->SetTextColor(0, 0, 0);
//         $this->Write(5, '4 de marzo del 2020');
//         $this->SetX(-25);
//         $this->AliasNbPages();
//         $this->Write(5, $this->PageNo() . '/{nb}');
//     }
// }
// //Titulo
// $this->fpdf = new PDF();
// $this->fpdf->AddPage('portrait', 'letter');
// $this->fpdf->setFont('Arial', 'BU', 12);
// $this->fpdf->SetY(20);
// $this->fpdf->SetTextColor(60, 122, 214);
// $this->fpdf->Cell(0, 5, 'Reporte de Ventas', 0, 0, 'C');
// $this->fpdf->SetTextColor(0, 0, 0);
// //Contenido
// $this->fpdf->setFont('Arial', '', 10);
// $this->fpdf->ln();
// $this->fpdf->Cell(20, 5, 'Grado:', 0, 0, 'L');
// $this->fpdf->ln();
// $this->fpdf->Cell(20, 5, 'Seccion:', 0, 0, 'L');
// $this->fpdf->ln();
// $this->fpdf->Cell(20, 5, 'Turno:', 0, 0, 'L');
// $this->fpdf->ln();
// $this->fpdf->Cell(20, 5, 'Docente:', 0, 0, 'L');
// $this->fpdf->OutPut();



//Clase 10: configuracion de codificacion, color de relleno y dibujo - EN EL VIDEO 10 CONFIGURO EL utf8_decode fpdf.php
// class PDF extends FPDF
// {
//     public function header()
//     {
//         $this->SetFont('Arial', 'B', 10);
//         $this->SetTextColor(0, 0, 0); //COLORES RGB BUSCAR EN GOOGLE
//         $this->cell(0, 5, 'Lima - Perú', 0, 0, 'C');
//         $this->Image(base_url() . 'plantilla/dist/img/vame.png', 170, 10, 30, 15, 'PNG', base_url() . 'Reportes/Controller_reportes');
//     }

//     public function footer()
//     {
//         $this->SetFont('Arial', 'B', 10);
//         $this->SetY(-15);
//         $this->SetTextColor(0, 0, 0);
//         $this->Write(5, '4 de marzo del 2020');
//         $this->SetX(-25);
//         $this->AliasNbPages();
//         $this->Write(5, $this->PageNo() . '/{nb}');
//     }
// }

// $this->fpdf = new PDF('P', 'mm', 'letter', true); //Le paso true para que decodifique segun el metodo constructor del archivo fpdf.php
// $this->fpdf->AddPage('portrait', 'letter');
// $this->fpdf->setFont('Arial', 'BU', 14); //SUBRAYADO
// $this->fpdf->SetY(20);
// $this->fpdf->SetTextColor(39, 158, 82); //COLORES RGB BUSCAR EN GOOGLE
// $this->fpdf->Cell(0, 5, 'REPORTE DE VENTAS', 0, 0, 'C');
// $this->fpdf->SetTextColor(0, 0, 0); //LE PONGO CERO PORQUE YA ES UNA SECCION DIFERENTE

// $this->fpdf->Ln(20); //SALTO DE LINEA


// $this->fpdf->setFont('Arial', '', 12);
// $this->fpdf->Cell(20, 5, 'GRADO: ');
// $this->fpdf->Ln(); //SALTO DE LINEA
// $this->fpdf->Cell(20, 5, 'SECCIÓN: ');
// $this->fpdf->Ln(); //SALTO DE LINEA
// $this->fpdf->Cell(20, 5, 'TURNOS: ');
// $this->fpdf->Ln(); //SALTO DE LINEA
// $this->fpdf->Cell(20, 5, 'DOCENTE: ');

// $this->fpdf->Ln(20); //SALTO DE LINEA

// // $this->fpdf->setFontSize(10); //Para reducir el tamaño de la cabecera de la tabla
// $this->fpdf->setFont('Arial', 'B'); //Para poner negrita
// $this->fpdf->setFillColor(255, 51, 165); //Para poner relleno
// $this->fpdf->setTextColor(254, 255, 255); //Para poner color del texto
// $this->fpdf->setDrawColor(255, 51, 165); //Color del borde, va de la mano que el relleno
// $this->fpdf->Cell(20, 5, 'N°', 1, 0, 'C', 1); //El 1 al final es los bordes y pueda estar de color
// $this->fpdf->Cell(50, 5, 'PRODUCTO', 1, 0, 'C', 1);
// $this->fpdf->Cell(50, 5, 'DESCRIPCIÓN', 1, 0, 'C', 1);
// $this->fpdf->Cell(30, 5, 'PRECIO', 1, 0, 'C', 1);
// $this->fpdf->Cell(40, 5, 'CANTIDAD', 1, 0, 'C', 1);


// $this->fpdf->OutPut();


//Clase 11: Trazado de Lineas
// class PDF extends FPDF
// {

//     public function header()
//     {
//         $this->SetFont('Arial', 'B', 10);
//         $this->SetTextColor(74, 202, 22); //COLORES RGB BUSCAR EN GOOGLE
//         $this->cell(0, 5, 'Lima - Perú', 0, 0, 'C');
//         $this->Image(base_url() . 'plantilla/dist/img/vame.png', 170, 10, 30, 15, 'PNG', base_url() . 'Reportes/Controller_reportes');
//     }

//     public function footer()
//     {
//         $this->SetFont('Arial', 'B', 10);
//         $this->SetY(-15);
//         $this->Write(5, '4 de marzo del 2020');
//         $this->SetX(-15);
//         $this->Write(5, $this->PageNo());
//     }
// }

// $this->fpdf = new PDF('P', 'mm', 'letter', true); //Le paso true para que decodifique segun el metodo constructor del archivo fpdf.php
// $this->fpdf->AddPage('portrait', 'letter');
// $this->fpdf->setFont('Arial', '', 14); //SUBRAYADO
// $this->fpdf->SetY(20);
// $this->fpdf->SetTextColor(16, 87, 97); //COLORES RGB BUSCAR EN GOOGLE

// $this->fpdf->SetDrawColor(255, 51, 165); //color de la linea
// $this->fpdf->SetLineWidth(0.5); //ancho de la linea
// $this->fpdf->Line(75, 26, 140, 26); //posiciones de la linea x(75,26) y(140,26)

// $this->fpdf->Cell(0, 5, 'REPORTE DE VENTAS', 0, 0, 'C');
// $this->fpdf->SetTextColor(0, 0, 0); //LE PONGO CERO PORQUE YA ES UNA SECCION DIFERENTE

// $this->fpdf->Ln(20); //SALTO DE LINEA


// $this->fpdf->setFont('Arial', '', 12);
// $this->fpdf->Cell(20, 5, 'GRADO: ');
// $this->fpdf->Ln(); //SALTO DE LINEA
// $this->fpdf->Cell(20, 5, 'SECCIÓN: ');
// $this->fpdf->Ln(); //SALTO DE LINEA
// $this->fpdf->Cell(20, 5, 'TURNOS: ');
// $this->fpdf->Ln(); //SALTO DE LINEA
// $this->fpdf->Cell(20, 5, 'DOCENTE: ');
// $this->fpdf->Ln(20); //SALTO DE LINEA


// $this->fpdf->setFontSize(10); //Para reducir el tamaño de la cabecera de la tabla
// $this->fpdf->setFont('Arial', 'B'); //Para poner negrita
// $this->fpdf->setFillColor(255, 255, 255); //Para poner relleno
// $this->fpdf->setTextColor(40, 40, 40); //Para poner color del texto
// $this->fpdf->setDrawColor(88, 88, 88); //Color del borde, va de la mano que el relleno
// $this->fpdf->Cell(20, 10, 'ITEM', 0, 0, 'C', 1); //El 1 al final es los bordes y pueda estar de color
// $this->fpdf->Cell(50, 10, 'PRODUCTO', 0, 0, 'C', 1);
// $this->fpdf->Cell(50, 10, 'DESCRIPCIÓN', 0, 0, 'C', 1);
// $this->fpdf->Cell(30, 10, 'PRECIO', 0, 0, 'C', 1);
// $this->fpdf->Cell(40, 10, 'CANTIDAD', 0, 0, 'C', 1);


// $this->fpdf->SetDrawColor(255, 51, 165); //color de la linea
// $this->fpdf->SetLineWidth(1); //Ancho de linea
//  $this->fpdf->Line(16, 85, 190, 85);
// $this->fpdf->setTextColor(0, 0, 0);
// $this->fpdf->OutPut();




//Clase 12: Estilizar Tablas y Mostrar Registros Fin de clase el sgte video ya es diseñar una plantilla.


class PDF extends FPDF
{

    public function header()
    {
        $this->SetFont('Arial', 'B', 10);
        $this->SetTextColor(25, 174, 194); //COLORES RGB BUSCAR EN GOOGLE
        $this->cell(0, 5, 'Centro Educativo Colonia la Paz', 0, 0, 'C');
        $this->Image(base_url() . 'plantilla/dist/img/vame.png', 175, 10, 30, 10, 'PNG');
    }

    public function footer()
    {
        $this->SetFont('Arial', 'B', 10);
        $this->SetY(-15);
        $this->Write(5, 'San Miguel, El Salvador');
        $this->SetX(-30);
        $this->AliasNbPages('tpagina');
        $this->Write(5, $this->PageNo() . '/tpagina');
    }
}

$this->fpdf = new PDF('P', 'mm', 'letter', true);
$this->fpdf->AddPage('portrait', 'letter');
$this->fpdf->SetMargins(10, 25, 0, 0);

$this->fpdf->setFont('Arial', 'B', 12);
$this->fpdf->SetY(30);
$this->fpdf->SetTextColor(16, 87, 97);
$this->fpdf->Cell(0, 5, 'LISTADO DE ESTUDIANTES MATRICULADOS', 0, 0, 'C');
$this->fpdf->SetDrawColor(61, 174, 233);
$this->fpdf->SetLineWidth(0.5);
$this->fpdf->Line(67, $this->fpdf->GetY() + 8, 159, $this->fpdf->GetY() + 8);
$this->fpdf->SetTextColor(0, 0, 0);
$this->fpdf->Ln(20);


$this->fpdf->setFont('Arial', 'B', 12);
$this->fpdf->SetTextColor(61, 174, 233);
$this->fpdf->Cell(20, 5, 'Grado: ');
$this->fpdf->Ln();
$this->fpdf->Cell(20, 5, 'Seccion: ');
$this->fpdf->Ln();
$this->fpdf->Cell(20, 5, 'Turno: ');
$this->fpdf->Ln();
$this->fpdf->Cell(20, 5, 'Docente: ');
$this->fpdf->Ln(20);


$this->fpdf->setFontSize(10); //Para reducir el tamaño de la cabecera de la tabla
$this->fpdf->setFont('Arial', ''); //Para poner negrita
$this->fpdf->setFillColor(255, 255, 255); //Para poner relleno
$this->fpdf->setTextColor(40, 40, 40); //Para poner color del texto
$this->fpdf->setDrawColor(88, 88, 88); //Color del borde, va de la mano que el relleno
$this->fpdf->Cell(20, 10, 'N°', 0, 0, 'C', 1); //El 1 al final es los bordes y pueda estar de color
$this->fpdf->Cell(30, 10, 'NIE', 0, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 0, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 0, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 0, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 0, 0, 'C', 1);
$this->fpdf->SetDrawColor(61, 174, 233);
$this->fpdf->SetLineWidth(1);
$this->fpdf->Line(10, 95, 205, 95);
$this->fpdf->setTextColor(0, 0, 0);



$this->fpdf->setFillColor(240, 240, 240); //Para poner relleno
$this->fpdf->setTextColor(40, 40, 40); //Para poner color del texto
$this->fpdf->setDrawColor(255, 255, 255); //Color del borde, va de la mano que el relleno
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);
$this->fpdf->Ln(12);
$this->fpdf->Cell(20, 10, 'N°', 1, 0, 'C', 1);
$this->fpdf->Cell(30, 10, 'NIE', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Apellidos', 1, 0, 'C', 1);
$this->fpdf->Cell(50, 10, 'Nombres', 1, 0, 'C', 1);
$this->fpdf->Cell(10, 10, 'Sexo', 1, 0, 'C', 1);
$this->fpdf->Cell(35, 10, 'F. Nacimiento', 1, 0, 'C', 1);


$this->fpdf->OutPut();
