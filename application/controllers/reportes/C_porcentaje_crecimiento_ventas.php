<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_porcentaje_crecimiento_ventas extends CI_Controller
{

	public function __construct()

	{
		parent::__construct();
		$this->load->model("reportes/M_porcentaje_crecimiento_vents");
		$this->load->model("M_cbox");
	}

	public function index()
	{

		$desde = $this->input->post("desde");
		$hasta = $this->input->post("hasta");


		$data = array(
			'index' => $this->M_porcentaje_crecimiento_ventas->index_buscar($desde, $hasta),
			'desde' => '',
			'hasta' => '',
		);


		$this->load->view('plantilla/V_header');
		$this->load->view('plantilla/V_aside');
		$this->load->view('reportes/porcentaje_crecimiento_ventas/V_index', $data);
	}

	public function index_buscar()
	{

		$desde = $this->input->post("desde");
		$hasta = $this->input->post("hasta");


		$data = array(
			'index' => $this->M_porcentaje_crecimiento_ventas->index_buscar($desde, $hasta),
			'desde' => $desde,
			'hasta' => $hasta,
		);

		$this->load->view('reportes/porcentaje_crecimiento_ventas/V_index', $data);
	}

	public function index_restablecer()
	{

		$desde = $this->input->post("desde");
		$hasta = $this->input->post("hasta");


		$data = array(
			'index' => $this->M_porcentaje_crecimiento_ventas->index_buscar($desde, $hasta),
			'desde' => '',
			'hasta' => '',
		);

		$this->load->view('reportes/porcentaje_crecimiento_ventas/V_index', $data);
	}

	public function listar_fechas()
	{

		$desde = $this->input->get("desde");
		$hasta = $this->input->get("hasta");

		$data = array(
			"listar_fechas" => $this->M_porcentaje_crecimiento_ventas->listar_fechas($desde, $hasta),
		);

		$this->load->view("reportes/porcentaje_crecimiento_ventas/listar_fechas", $data);
	}
}
