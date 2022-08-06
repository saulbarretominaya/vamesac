<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_nivel_productividad extends CI_Controller
{

	public function __construct()

	{
		parent::__construct();
		$this->load->model("M_nivel_productividad");
		$this->load->model("M_cbox");
	}

	public function index()
	{

		$data = array(
			'index' => $this->M_nivel_productividad->index(),
		);


		$this->load->view('plantilla/V_header');
		$this->load->view('plantilla/V_aside');
		$this->load->view('nivel_productividad/V_index', $data);
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

		$this->load->view('nivel_productividad/V_index', $data);
	}

	public function index_restablecer()
	{

		$data = array(
			'index' => $this->M_nivel_productividad->index(),
		);

		$this->load->view('nivel_productividad/V_index', $data);
	}
}
