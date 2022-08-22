<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_cotizacion extends CI_Model
{

    public function index()
    {

        $id_empresa = $this->session->userdata("id_empresa");

        $resultados = $this->db->query(
            "
            SELECT
            a.id_cotizacion,
            a.id_cotizacion_empresa,
            DATE_FORMAT(a.fecha_cotizacion,'%d/%m/%Y') AS fecha_cotizacion,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=a.id_moneda) AS ds_moneda,
            a.ds_nombre_cliente_proveedor,
            a.ds_condicion_pago,
            a.ds_nombre_trabajador,
            a.precio_venta,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=a.id_estado_cotizacion) AS ds_estado_cotizacion,
            b.id_orden_despacho,
            b.id_orden_despacho_empresa,
            DATE_FORMAT(b.fecha_orden_despacho,'%d/%m/%Y') AS fecha_orden_despacho,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=id_estado_orden_despacho) AS ds_estado_orden_despacho
            FROM
            cotizacion a
            LEFT JOIN orden_despacho b ON b.id_cotizacion=a.id_cotizacion
            LEFT JOIN detalle_cotizacion c ON c.id_cotizacion=a.id_cotizacion
            WHERE a.categoria='PRODUCTOS' AND a.id_empresa='$id_empresa'
            GROUP BY a.id_cotizacion
            ORDER BY a.id_cotizacion DESC;
            "
        );
        return $resultados->result();
    }


    public function registrar_grupo_vame_cotizacion()
    {
        return $this->db->query(
            "
            INSERT INTO grupo_vame_cotizacion
            (
            id_grupo_vame
            )
            VALUES
            (
            ''
            )
            "
        );
    }

    public function registrar_inversiones_alpev_cotizacion()
    {
        return $this->db->query(
            "
            INSERT INTO inversiones_alpev_cotizacion
            (
            id_inversion_alpev
            )
            VALUES
            (
            ''
            )
            "
        );
    }

    public function registrar(
        $serie_cotizacion,
        $categoria,
        $id_trabajador,
        $ds_nombre_trabajador,
        $fecha_cotizacion,
        $validez_oferta_cotizacion,
        $fecha_vencimiento_validez_oferta,
        $id_cliente_proveedor,
        $ds_nombre_cliente_proveedor,
        $ds_departamento_cliente_proveedor,
        $ds_provincia_cliente_proveedor,
        $ds_distrito_cliente_proveedor,
        $direccion_fiscal_cliente_proveedor,
        $email_cliente_proveedor,
        $clausula,
        $lugar_entrega,
        $nombre_encargado,
        $observacion,
        $id_condicion_pago,
        $ds_condicion_pago,
        $numero_dias_condicion_pago,
        $fecha_condicion_pago,
        $valor_venta_total_sin_d,
        $valor_venta_total_con_d,
        $descuento_total,
        $igv,
        $precio_venta,
        $valor_cambio,
        $id_moneda,
        $id_cotizacion_empresa,
        $id_empresa

    ) {
        return $this->db->query(
            "
            INSERT INTO cotizacion
            (
                id_cotizacion,
                serie_cotizacion,categoria,id_trabajador,ds_nombre_trabajador,fecha_cotizacion,
                validez_oferta_cotizacion,fecha_vencimiento_validez_oferta,id_cliente_proveedor,ds_nombre_cliente_proveedor,ds_departamento_cliente_proveedor,
                ds_provincia_cliente_proveedor,ds_distrito_cliente_proveedor,direccion_fiscal_cliente_proveedor,email_cliente_proveedor,
                clausula,lugar_entrega,nombre_encargado,observacion,
                id_condicion_pago,ds_condicion_pago,numero_dias_condicion_pago,fecha_condicion_pago,
                valor_venta_total_sin_d,valor_venta_total_con_d,
                descuento_total,igv,precio_venta,valor_cambio,id_moneda,id_estado_cotizacion,id_cotizacion_empresa,id_empresa
            )
            VALUES
            (
                '',
                '$serie_cotizacion','$categoria','$id_trabajador','$ds_nombre_trabajador','$fecha_cotizacion',
                '$validez_oferta_cotizacion',STR_TO_DATE('$fecha_vencimiento_validez_oferta','%d/%m/%Y'),'$id_cliente_proveedor','$ds_nombre_cliente_proveedor','$ds_departamento_cliente_proveedor',
                '$ds_provincia_cliente_proveedor','$ds_distrito_cliente_proveedor','$direccion_fiscal_cliente_proveedor','$email_cliente_proveedor',
                '$clausula','$lugar_entrega','$nombre_encargado','$observacion',
                '$id_condicion_pago','$ds_condicion_pago','$numero_dias_condicion_pago',STR_TO_DATE('$fecha_condicion_pago','%d/%m/%Y'),
                '$valor_venta_total_sin_d','$valor_venta_total_con_d',
                '$descuento_total','$igv','$precio_venta','$valor_cambio','$id_moneda','857','$id_cotizacion_empresa','$id_empresa'
            )
            "
        );
    }

    public function lastID()
    {
        return $this->db->insert_id();
    }

    public function registrar_detalle_cotizacion(
        $id_cotizacion,
        $id_producto,
        $id_comodin,
        $codigo_producto,
        $descripcion_producto,
        $id_unidad_medida,
        $ds_unidad_medida,
        $id_marca_producto,
        $ds_marca_producto,
        $cantidad,

        $precio_inicial,
        $precio_ganancia,
        $g,
        $g_unidad,
        $g_cant_total,

        $precio_descuento,
        $d,
        $d_unidad,
        $d_cant_total,

        $valor_venta_sin_d,
        $valor_venta_con_d,
        $dias_entrega,
        $item

    ) {
        return $this->db->query(
            "
            INSERT INTO detalle_cotizacion
            (
            id_dcotizacion,
            id_cotizacion,id_producto,id_comodin,
            codigo_producto,descripcion_producto,
            id_unidad_medida,ds_unidad_medida,id_marca_producto,ds_marca_producto,
            cantidad,
            precio_inicial,precio_ganancia,g,g_unidad,g_cant_total,
            precio_descuento,d,d_unidad,d_cant_total,
            valor_venta_sin_d,valor_venta_con_d,
            dias_entrega,item
            )
            VALUES
            (
            '', 
            '$id_cotizacion','$id_producto','$id_comodin',
            '$codigo_producto','$descripcion_producto',
            '$id_unidad_medida','$ds_unidad_medida','$id_marca_producto','$ds_marca_producto',
            '$cantidad',
            '$precio_inicial','$precio_ganancia','$g','$g_unidad','$g_cant_total',
            '$precio_descuento','$d','$d_unidad','$d_cant_total',
            '$valor_venta_sin_d','$valor_venta_con_d',
            '$dias_entrega','$item');
        "
        );
    }

    public function registrar_detalle_condicion_pago(
        $id_cotizacion,
        $fecha_cuota,
        $monto_cuota

    ) {
        return $this->db->query(
            "
        INSERT INTO detalle_condicion_pagos_cotizacion
        (
        id_dcondicion_pago,
        id_cotizacion,fecha_cuota,monto_cuota
        )
        VALUES
        (
        '', 
        '$id_cotizacion',STR_TO_DATE('$fecha_cuota','%d/%m/%Y'),'$monto_cuota'
        )
        "
        );
    }

    public function index_clientes_proveedores()
    {

        $id_empresa = $this->session->userdata("id_empresa");

        $resultados = $this->db->query("
            SELECT
            id_cliente_proveedor,
            nombres,
            ape_paterno,
            ape_materno,
            num_documento,
            razon_social,
            id_departamento,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=id_departamento) AS ds_departamento_cliente_proveedor,
            id_provincia,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=id_provincia) AS ds_provincia_cliente_proveedor,
            id_distrito,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=id_distrito) AS ds_distrito_cliente_proveedor,
            id_tipo_persona,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=id_tipo_persona) AS ds_tipo_persona,
            (CASE
            WHEN razon_social='' THEN CONCAT(nombres,' ',ape_paterno,' ',ape_materno)
            WHEN nombres='' AND ape_paterno='' AND ape_materno='' THEN razon_social
            ELSE 'Existe un conflicto'
            END) ds_nombre_cliente_proveedor,
            id_tipo_documento,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=id_tipo_documento) AS ds_tipo_documento,
            num_documento,
            direccion_fiscal as direccion_fiscal_cliente_proveedor,
            email as email_cliente_proveedor,
            contacto_registro,
            telefono,
            celular,
            id_tipo_giro,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=id_tipo_giro) AS ds_tipo_giro
            FROM clientes_proveedores
            where id_tipo_persona='615' and id_empresa='$id_empresa';
        ");
        return $resultados->result();
    }

    public function index_productos()
    {
        $id_empresa = $this->session->userdata("id_empresa");

        $resultados = $this->db->query("
        SELECT 
        a.id_producto,
        a.stock,
        CONCAT('PRO',a.id_producto) AS id_general,
        UPPER(a.codigo_producto) as codigo_producto,
        a.id_almacen,
        (select descripcion from detalle_multitablas where id_dmultitabla=a.id_almacen) as ds_almacen,
        a.id_unidad_medida,
        (SELECT abreviatura FROM detalle_multitablas WHERE id_dmultitabla=a.id_unidad_medida) AS ds_unidad_medida,
        a.id_sunat,
        (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=a.id_sunat) AS ds_codigo_sunat,
        UPPER(a.descripcion_producto) as descripcion_producto,
        a.id_moneda,
        (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=a.id_moneda) AS ds_moneda,
        a.precio_costo,
        a.porcentaje,
        a.ganancia_unidad,
        a.precio_unitario,
        a.rentabilidad,
        a.id_grupo,
        (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=a.id_grupo) AS ds_grupo,
        a.id_marca_producto,
        (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=a.id_marca_producto) AS ds_marca_producto,
        
        a.stock
        FROM productos a
        where a.id_empresa='$id_empresa'
        ORDER BY a.id_producto ASC
        ");
        return $resultados->result();
    }


    public function index_comodin()
    {
        $id_empresa = $this->session->userdata("id_empresa");

        $resultados = $this->db->query(
            "
            SELECT
            a.id_comodin,
            CONCAT('COM',a.id_comodin) AS id_general,
            a.codigo_producto,
            a.descripcion_producto,
            a.id_marca_producto,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=a.id_marca_producto) AS ds_marca_producto,
            a.id_unidad_medida,
            (SELECT abreviatura FROM detalle_multitablas WHERE id_dmultitabla=a.id_unidad_medida) AS ds_unidad_medida,
            a.id_moneda,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=a.id_moneda) AS ds_moneda,
            a.precio_unitario,
            a.nombre_proveedor
            FROM comodin a
            where a.id_empresa='$id_empresa'
            ORDER BY a.id_comodin ASC
        "
        );
        return $resultados->result();
    }

    public function tipo_cambio()
    {
        $resultados = $this->db->query("
        select * from tipo_cambio where id_tipo_cambio='1'");
        return $resultados->row();
    }

    public function validar_existencia_comodin_registrar($id_cotizacion)
    {
        $resultados = $this->db->query(
            "
            SELECT 
            COUNT(*) AS cantidad_num_comodin,
            item
            FROM detalle_cotizacion
            WHERE id_cotizacion='$id_cotizacion' AND id_comodin != '0';
            "
        );
        return $resultados->row();
    }

    public function aprobar_estado($id_cotizacion)
    {
        return $this->db->query(
            "
            update cotizacion set
            id_estado_cotizacion='858',
            fecha_aprobacion=NOW()
            where id_cotizacion='$id_cotizacion'
            "
        );
    }

    public function cambiar_estado_pendiente_orden_despacho($id_orden_despacho)
    {
        return $this->db->query(
            "
            update orden_despacho set
            id_estado_orden_despacho='861'
            where id_orden_despacho='$id_orden_despacho'
            "
        );
    }

    public function registrar_grupo_vame_orden_despacho()
    {
        return $this->db->query(
            "
            INSERT INTO grupo_vame_orden_despacho
            (
            id_grupo_vame
            )
            VALUES
            (
            ''
            )
            "
        );
    }

    public function registrar_inversiones_alpev_orden_despacho()
    {
        return $this->db->query(
            "
            INSERT INTO inversiones_alpev_orden_despacho
            (
            id_inversion_alpev
            )
            VALUES
            (
            ''
            )
            "
        );
    }

    public function registrar_orden_despacho(
        $id_cotizacion,
        $id_orden_despacho_empresa,
        $id_empresa
    ) {
        return $this->db->query(
            "
        INSERT INTO orden_despacho
        (
            id_orden_despacho,
            id_cotizacion,fecha_orden_despacho,id_estado_orden_despacho,id_orden_despacho_empresa,id_empresa
        )
        VALUES
        (
            '',
            '$id_cotizacion',CURDATE(),'861','$id_orden_despacho_empresa','$id_empresa'
        )"
        );
    }

    public function enlace_actualizar_cabecera($id_cotizacion)
    {
        $resultados = $this->db->query(
            "
            SELECT
            a.fecha_cotizacion,
            a.validez_oferta_cotizacion,
            a.fecha_vencimiento_validez_oferta,
            a.ds_condicion_pago,
            a.id_cliente_proveedor,
            a.ds_nombre_cliente_proveedor,
            a.ds_departamento_cliente_proveedor,
            a.ds_provincia_cliente_proveedor,
            a.ds_distrito_cliente_proveedor,
            a.direccion_fiscal_cliente_proveedor,
            a.email_cliente_proveedor,
            a.clausula,
            a.lugar_entrega,
            a.nombre_encargado,
            a.observacion,
            a.valor_venta_total_sin_d,
            a.descuento_total,
            a.valor_venta_total_con_d,
            a.igv,
            a.precio_venta,
            a.id_condicion_pago
            FROM
            cotizacion a
            LEFT JOIN clientes_proveedores b ON b.id_cliente_proveedor=a.id_cliente_proveedor
            LEFT JOIN trabajadores c ON c.id_trabajador=a.id_trabajador
            where a.id_cotizacion='$id_cotizacion'
            "
        );
        return $resultados->row();
    }

    public function enlace_actualizar_detalle($id_cotizacion)
    {
        $resultados = $this->db->query(
            "
            SELECT
            a.item,
            a.codigo_producto,
            a.descripcion_producto,
            a.ds_unidad_medida,
            a.ds_marca_producto,
            a.precio_ganancia AS precio_u,
            a.cantidad,
            a.d,
            a.d_unidad,
            a.precio_descuento AS precio_u_d,
            a.d_cant_total,
            a.valor_venta_sin_d,
            a.valor_venta_con_d,
            a.dias_entrega
            FROM 
            detalle_cotizacion a
            WHERE a.id_cotizacion='$id_cotizacion'
            "
        );
        return $resultados->result();
    }

    public function index_modal_cabecera_productos($id_cotizacion)
    {
        $resultados = $this->db->query(
            "
            SELECT
            DATE_FORMAT(a.fecha_cotizacion,'%d/%m/%Y') AS fecha_emision,a.validez_oferta_cotizacion,
            DATE_FORMAT(a.fecha_vencimiento_validez_oferta,'%d/%m/%Y') AS fecha_vencimiento_validez_oferta,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=id_moneda) AS ds_moneda,
            a.ds_condicion_pago,a.ds_nombre_cliente_proveedor,
            b.num_documento,b.direccion_fiscal,lugar_entrega,a.ds_nombre_trabajador,
            c.celular,c.email,a.observacion,a.valor_venta_total_sin_d,a.valor_venta_total_con_d,a.descuento_total,a.igv,a.precio_venta,a.clausula,a.nombre_encargado
            FROM
            cotizacion a
            LEFT JOIN clientes_proveedores b ON b.id_cliente_proveedor=a.id_cliente_proveedor
            LEFT JOIN trabajadores c ON c.id_trabajador=a.id_trabajador
            where a.id_cotizacion='$id_cotizacion'
        "
        );
        return $resultados->row();
    }

    public function index_modal_detalle_productos($id_cotizacion)
    {
        $resultados = $this->db->query(
            "
            SELECT
            a.item,
            a.cantidad,
            a.codigo_producto,
            a.descripcion_producto,
            a.ds_marca_producto,
            a.ds_unidad_medida,
            a.precio_ganancia AS precio_u,
            a.d,
            a.precio_descuento AS precio_u_d,
            FORMAT(a.valor_venta_con_d,2) AS valor_venta,
            a.dias_entrega
            FROM 
            detalle_cotizacion a
            WHERE a.id_cotizacion='$id_cotizacion'
        "
        );
        return $resultados->result();
    }
}
