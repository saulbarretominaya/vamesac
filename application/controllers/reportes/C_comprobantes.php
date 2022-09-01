s<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class C_comprobantes extends CI_Controller
	{

		public function __construct()

		{
			parent::__construct();
			$this->load->model("M_comprobantes");
			$this->load->model("M_cbox");
		}


		public function index_modal_productos($id_comprobante)
		{

			$data = array(
				"index_modal_cabecera_productos" => $this->M_comprobantes->index_modal_cabecera_productos($id_comprobante),
				"index_modal_detalle_productos" => $this->M_comprobantes->index_modal_detalle_productos($id_comprobante),
			);

			$this->load->view("reportes/comprobantes/V_index_modal_productos", $data);
		}
	}
