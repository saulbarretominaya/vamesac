<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_porcentaje_crecimiento_ventas extends CI_Model
{

    public function index_buscar($desde, $hasta)
    {

        $resultados = $this->db->query(
            "
            SELECT (@rownum:=@rownum+1) AS item,
            id_comprobante_vr,
            fecha_vr,
            valor_reciente_vr,
            id_comprobante_va,
            fecha_va,
            valor_reciente_va,
            round(((valor_reciente_vr/valor_reciente_va)-1)*100,2) as porcentaje_venta
            FROM
            (
            SELECT 
            @rownum:=0,

            e.id_comprobante AS id_comprobante_vr,
            CAST(e.fecha_emision AS DATE) fecha_vr,
            SUM(c.precio_venta) AS valor_reciente_vr,

            (SELECT id_comprobante FROM comprobantes WHERE id_comprobante=e.id_comprobante-1) AS id_comprobante_va,
            (SELECT CAST(fecha_emision AS DATE) FROM comprobantes WHERE id_comprobante=e.id_comprobante-1) AS fecha_va,
            (SELECT SUM(precio_venta) FROM parciales_completas WHERE id_parcial_completa=c.id_parcial_completa-1) AS valor_reciente_va


            FROM parciales_completas c
            RIGHT JOIN guia_remision d ON d.id_parcial_completa=c.id_parcial_completa
            LEFT JOIN comprobantes e ON e.id_guia_remision=d.id_guia_remision
            GROUP BY CAST(e.fecha_emision AS DATE)
            )a
            HAVING fecha_vr >='$desde' AND fecha_vr <='$hasta'
            "
        );

        return $resultados->result();
    }

    public function listar_fechas($desde, $hasta)
    {

        $resultados = $this->db->query(
            "
             SELECT (@rownum:=@rownum+1) AS item,
            id_comprobante_vr,
            fecha_vr,
            valor_reciente_vr,
            id_comprobante_va,
            fecha_va,
            valor_reciente_va,
            round(((valor_reciente_vr/valor_reciente_va)-1)*100,2) as porcentaje_venta
            FROM
            (
            SELECT 
            @rownum:=0,

            e.id_comprobante AS id_comprobante_vr,
            CAST(e.fecha_emision AS DATE) fecha_vr,
            SUM(c.precio_venta) AS valor_reciente_vr,

            (SELECT id_comprobante FROM comprobantes WHERE id_comprobante=e.id_comprobante-1) AS id_comprobante_va,
            (SELECT CAST(fecha_emision AS DATE) FROM comprobantes WHERE id_comprobante=e.id_comprobante-1) AS fecha_va,
            (SELECT SUM(precio_venta) FROM parciales_completas WHERE id_parcial_completa=c.id_parcial_completa-1) AS valor_reciente_va


            FROM parciales_completas c
            RIGHT JOIN guia_remision d ON d.id_parcial_completa=c.id_parcial_completa
            LEFT JOIN comprobantes e ON e.id_guia_remision=d.id_guia_remision
            GROUP BY CAST(e.fecha_emision AS DATE)
            )a
            HAVING fecha_vr >='$desde' AND fecha_vr <='$hasta'
        "
        );
        return $resultados->result();
    }
}
