<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_salida_productos extends CI_Model
{

    public function index()
    {
        $id_empresa = $this->session->userdata("id_empresa");

        $resultados = $this->db->query(
            "
            SELECT 
            a.id_cotizacion,
            a.ds_nombre_cliente_proveedor,
            a.ds_nombre_trabajador,
            a.ds_condicion_pago,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=a.id_moneda) AS ds_moneda,
            b.id_orden_despacho,
            c.id_parcial_completa,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=c.id_tipo_orden_parcial_completa) AS ds_estado_tipo_orden_parcial_completa,
            (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=d.id_estado_guia_remision) AS ds_estado_guia_remision,
            (SELECT abreviatura FROM detalle_multitablas WHERE id_dmultitabla=e.id_estado_comprobante) AS ds_estado_comprobante,   
            c.precio_venta,
            d.id_guia_remision,
            d.id_tienda,
            d.ds_serie_guia_remision,
            e.id_comprobante,
            DATE_FORMAT(d.fecha_guia_remision,'%d/%m/%Y') AS fecha_guia_remision,
            e.ds_tipo_comprobante,
            (SELECT serie FROM detalle_multitablas WHERE id_dmultitabla=e.id_tipo_comprobante) AS ds_serie_comprobante,
            e.id_num_comprobante AS num_comprobante,
            DATE_FORMAT(e.fecha_emision,'%d/%m/%Y') AS fecha_comprobante,
            d.ds_sucursal_trabajador
            FROM cotizacion a
            LEFT JOIN orden_despacho b ON b.id_cotizacion=a.id_cotizacion
            LEFT JOIN parciales_completas c ON c.id_orden_despacho=b.id_orden_despacho
            RIGHT JOIN guia_remision d ON d.id_parcial_completa=c.id_parcial_completa
            RIGHT JOIN comprobantes e ON e.id_guia_remision=d.id_guia_remision
            "
        );
        return $resultados->result();
    }


    public function aprobar_estado($id_comprobante)
    {
        return $this->db->query(
            "
            UPDATE comprobantes
            set id_estado_comprobante='902'
            where id_comprobante='$id_comprobante'
            "
        );
    }
}
