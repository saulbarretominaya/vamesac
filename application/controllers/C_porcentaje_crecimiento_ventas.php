<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_porcentaje_crecimiento_ventas extends CI_Controller
{

	public function __construct()

	{
		parent::__construct();
		$this->load->model("M_porcentaje_crecimiento_ventas");
		$this->load->model("M_cbox");
	}

	public function index()
	{

		// $data = array(
		// 	'index' => $this->M_porcentaje_crecimiento_ventas->index(),
		// );


		$this->load->view('plantilla/V_header');
		$this->load->view('plantilla/V_aside');
		$this->load->view('porcentaje_crecimiento_ventas/V_index');
	}
}
