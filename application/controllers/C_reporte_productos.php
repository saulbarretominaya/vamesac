<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_reporte_productos extends CI_Controller
{

	public function __construct()

	{
		parent::__construct();
		/* $this->load->model("M_cotizacion"); */
		$this->load->model("M_cbox");
	}

	public function index()
	{
		/* $data = array(
			'index' => $this->M_cotizacion->index(),
			'index_2' => $this->M_cotizacion->index_2()
		);, $data */

		$this->load->view('plantilla/V_header');
		$this->load->view('plantilla/V_aside');
		$this->load->view('reportes/V_productos');
	}


}
