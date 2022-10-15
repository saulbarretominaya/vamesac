
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_inicio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_inicio");
        $this->load->model("M_cotizacion");
    }

    public function index()
    {

        $data = array(
            'index_productos' => $this->M_inicio->index_productos()
        );

        if ($this->session->userdata("login")) {
            redirect(base_url() . "C_menu");
        } else {
            $this->load->view("inicio/V_index", $data);
        }
    }

    public function registrar()
    {
        //CABECERA
        $nombre = $this->input->post("nombre");
        $num_documento = $this->input->post("num_documento");
        $telefono = $this->input->post("telefono");
        $correo = $this->input->post("correo");
        $direccion = $this->input->post("direccion");
        $igv = $this->input->post("igv");
        $valor_venta_t = $this->input->post("valor_venta_t");
        $precio_venta = $this->input->post("precio_venta");





        //DETALLE
        $item = $this->input->post("item");
        $id_producto = $this->input->post("id_producto");
        $codigo_producto = $this->input->post("codigo_producto");
        $descripcion_producto = $this->input->post("descripcion_producto");
        $id_unidad_medida = $this->input->post("id_unidad_medida");
        $ds_unidad_medida = $this->input->post("ds_unidad_medida");
        $id_marca_producto = $this->input->post("id_marca_producto");
        $ds_marca_producto = $this->input->post("ds_marca_producto");
        $cantidad = $this->input->post("cantidad");
        $precio_unitario = $this->input->post("precio_unitario");
        $valor_venta = $this->input->post("valor_venta");


        $this->M_cotizacion->registrar_grupo_vame_cotizacion();
        $id_cotizacion_empresa = $this->M_cotizacion->lastID();
        $this->M_inicio->registrar(
            $nombre,
            $num_documento,
            $telefono,
            $correo,
            $direccion,
            $id_cotizacion_empresa,
            $igv,
            $valor_venta_t,
            $precio_venta
        );

        $id_cotizacion = $this->M_inicio->lastID();

        $this->registrar_detalle(
            $id_cotizacion,
            $item,
            $id_producto,
            $codigo_producto,
            $descripcion_producto,
            $id_unidad_medida,
            $ds_unidad_medida,
            $id_marca_producto,
            $ds_marca_producto,
            $cantidad,
            $precio_unitario,
            $valor_venta
        );

        echo json_encode($nombre);
    }

    protected function registrar_detalle(
        $id_cotizacion,
        $item,
        $id_producto,
        $codigo_producto,
        $descripcion_producto,
        $id_unidad_medida,
        $ds_unidad_medida,
        $id_marca_producto,
        $ds_marca_producto,
        $cantidad,
        $precio_unitario,
        $valor_venta
    ) {
        for ($i = 0; $i < count($item); $i++) {
            $this->M_inicio->registrar_detalle(
                $id_cotizacion,
                $item[$i],
                $id_producto[$i],
                $codigo_producto[$i],
                $descripcion_producto[$i],
                $id_unidad_medida[$i],
                $ds_unidad_medida[$i],
                $id_marca_producto[$i],
                $ds_marca_producto[$i],
                $cantidad[$i],
                $precio_unitario[$i],
                $valor_venta[$i]
            );
        }
    }

    public function ingresar()
    {
        $usuario = $this->input->post("usuario");
        $contraseña = $this->input->post("contraseña");
        $res = $this->M_inicio->ingresar($usuario, $contraseña);

        if (!$res) {
            redirect(base_url());
        } else {
            $data = array(
                'id_usuario' => $res->id_usuario,
                'id_trabajador' => $res->id_trabajador,
                'id_empresa' => $res->id_empresa,
                'ds_ruc_empresa' => $res->ds_ruc_empresa,
                'ds_accesos_empresas' => $res->ds_accesos_empresas,
                'ds_nombre_trabajador' => $res->ds_nombre_trabajador,
                'ds_cargo_trabajador' => $res->ds_cargo_trabajador,
                'ds_rol_usuario' => $res->ds_rol_usuario,
                'login' => TRUE

            );
            $this->session->set_userdata($data);
            var_dump($data);
            redirect(base_url() . "C_menu");
        }
    }

    public function cerrar_login()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
