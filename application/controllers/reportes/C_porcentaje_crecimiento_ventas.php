<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_porcentaje_crecimiento_ventas extends CI_Controller
{

	public function __construct()

	{
		parent::__construct();
		$this->load->model("reportes/M_porcentaje_crecimiento_ventas");
		$this->load->model("M_cbox");
	}

	public function index()
	{

		$desde = $this->input->post("desde");
		$hasta = $this->input->post("hasta");

		$desde2 = $this->input->post("desde2");
		$hasta2 = $this->input->post("hasta2");


		$data = array(
			'index' => $this->M_porcentaje_crecimiento_ventas->index_buscar($desde, $hasta),
			'index2' => $this->M_porcentaje_crecimiento_ventas->index_buscar2($desde2, $hasta2),
			'desde' => '',
			'hasta' => '',
			'desde2' => '',
			'hasta2' => '',
		);


		$this->load->view('plantilla/V_header');
		$this->load->view('plantilla/V_aside');
		$this->load->view('reportes/porcentaje_crecimiento_ventas/V_index', $data);
	}

	public function index_buscar()
	{

		$desde = $this->input->post("desde");
		$hasta = $this->input->post("hasta");

		$desde2 = $this->input->post("desde2");
		$hasta2 = $this->input->post("hasta2");

		$data = array(
			'index' => $this->M_porcentaje_crecimiento_ventas->index_buscar($desde, $hasta),
			'index2' => $this->M_porcentaje_crecimiento_ventas->index_buscar2($desde2, $hasta2),

			'desde' => $desde,
			'hasta' => $hasta,
			'desde2' => $desde2,
			'hasta2' => $hasta2
		);

		$this->load->view('reportes/porcentaje_crecimiento_ventas/V_index', $data);
	}



	public function insertar_temporal()
	{

		$item = $this->input->post("item");
		$fecha_emision = $this->input->post("fecha_emision");
		$precio_venta = $this->input->post("precio_venta");
		$fecha_emision2 = $this->input->post("fecha_emision2");
		$precio_venta2 = $this->input->post("precio_venta2");


		$this->M_porcentaje_crecimiento_ventas->eliminar_temporal();
		$this->insertar_temporal_det($item, $fecha_emision, $precio_venta, $fecha_emision2, $precio_venta2);

		// $data = array(
		// 	'index' => $this->M_porcentaje_crecimiento_ventas->listar_temporal(),
		// );
	}

	protected function insertar_temporal_det($item, $fecha_emision, $precio_venta, $fecha_emision2, $precio_venta2)
	{
		for ($i = 0; $i < count($item); $i++) {

			$this->M_porcentaje_crecimiento_ventas->insertar_temporal_det(
				$item[$i],
				$fecha_emision[$i],
				$precio_venta[$i],
				$fecha_emision2[$i],
				$precio_venta2[$i]
			);
		}
	}

	public function listar()
	{

		$data = array(
			'index' => $this->M_porcentaje_crecimiento_ventas->listar()
		);

		$this->load->view('plantilla/V_header');
		$this->load->view('plantilla/V_aside');
		$this->load->view('reportes/porcentaje_crecimiento_ventas/V_index_reporte_final', $data);
	}

	public function mostrar_pdf()
	{

		$data = array(
			'index' => $this->M_porcentaje_crecimiento_ventas->listar()
		);

		$this->load->view("reportes/porcentaje_crecimiento_ventas/mostrar_pdf", $data);
	}
}
