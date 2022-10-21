s<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class C_cotizacion extends CI_Controller
	{

		public function __construct()

		{
			parent::__construct();
			$this->load->model("M_cotizacion");
		}


		public function index_modal_productos($id_cotizacion)
		{

			$data = array(
				"index_modal_cabecera_productos" => $this->M_cotizacion->index_modal_cabecera_productos($id_cotizacion),
				"index_modal_detalle_productos" => $this->M_cotizacion->index_modal_detalle_productos($id_cotizacion)
			);

			// $this->load->view("reportes/comprobantes/V_index_modal_productos", $data);
			$this->load->view("reportes/cotizacion/V_index_modal_productos", $data);
		}
	}
