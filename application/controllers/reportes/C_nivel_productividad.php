<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_nivel_productividad extends CI_Controller
{

	public function __construct()

	{
		parent::__construct();
		$this->load->model("reportes/M_nivel_productividad");
		$this->load->model("M_cbox");
	}

	public function index()
	{

		$desde = $this->input->post("desde");
		$hasta = $this->input->post("hasta");


		$data = array(
			'index' => $this->M_nivel_productividad->index_buscar($desde, $hasta),
			'desde' => '',
			'hasta' => '',
		);


		$this->load->view('plantilla/V_header');
		$this->load->view('plantilla/V_aside');
		$this->load->view('reportes/nivel_productividad/V_index', $data);
	}

	public function index_buscar()
	{

		$desde = $this->input->post("desde");
		$hasta = $this->input->post("hasta");


		$data = array(
			'index' => $this->M_nivel_productividad->index_buscar($desde, $hasta),
			'desde' => $desde,
			'hasta' => $hasta,
		);

		$this->load->view('reportes/nivel_productividad/V_index', $data);
	}

	public function index_restablecer()
	{

		$desde = $this->input->post("desde");
		$hasta = $this->input->post("hasta");


		$data = array(
			'index' => $this->M_nivel_productividad->index_buscar($desde, $hasta),
			'desde' => '',
			'hasta' => '',
		);

		$this->load->view('reportes/nivel_productividad/V_index', $data);
	}

	public function listar_fechas()
	{

		$desde = $this->input->get("desde");
		$hasta = $this->input->get("hasta");

		$data = array(
			"listar_fechas" => $this->M_nivel_productividad->listar_fechas($desde, $hasta),
		);

		$this->load->view("reportes/nivel_productividad/listar_fechas", $data);
	}
}
