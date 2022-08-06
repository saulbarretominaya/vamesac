<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_salida_productos extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_salida_productos");
		$this->load->model("M_cbox");
	}

	public function index()
	{
		$data = array(
			'index' => $this->M_salida_productos->index(),
		);

		$this->load->view('plantilla/V_header');
		$this->load->view('plantilla/V_aside');
		$this->load->view('salida_productos/V_index', $data);
	}

	public function aprobar_estado()
	{
		$id_comprobante = $this->input->post("id_comprobante");
		$this->M_salida_productos->aprobar_estado($id_comprobante);
		echo json_encode($id_comprobante);
	}
}
