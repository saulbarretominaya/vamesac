<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_porcentaje_crecimiento_ventas extends CI_Model
{

    public function index_buscar($desde, $hasta)
    {

        $resultados = $this->db->query(
            "
            SELECT (@rownum:=@rownum+1) AS item,
            a.* FROM (
            SELECT
            @rownum:=0,
            e.fecha_emision,
            SUM(c.precio_venta) precio_venta
            FROM parciales_completas c
            RIGHT JOIN guia_remision d ON d.id_parcial_completa=c.id_parcial_completa
            LEFT JOIN comprobantes e ON e.id_guia_remision=d.id_guia_remision
            GROUP BY e.fecha_emision
            HAVING e.fecha_emision >='$desde' AND e.fecha_emision <='$hasta'
            )a
            "
        );

        return $resultados->result();
    }

    public function index_buscar2($desde2, $hasta2)
    {

        $resultados = $this->db->query(
            "
            SELECT (@rownum:=@rownum+1) AS item,
            a.* FROM (
            SELECT
            @rownum:=0,
            e.fecha_emision,
            SUM(c.precio_venta) precio_venta
            FROM parciales_completas c
            RIGHT JOIN guia_remision d ON d.id_parcial_completa=c.id_parcial_completa
            LEFT JOIN comprobantes e ON e.id_guia_remision=d.id_guia_remision
            GROUP BY e.fecha_emision
            HAVING e.fecha_emision >='$desde2' AND e.fecha_emision <='$hasta2'
            )a
            "
        );

        return $resultados->result();
    }

    public function listar_fechas($desde, $hasta)
    {

        $resultados = $this->db->query(
            "
            SELECT (@rownum:=@rownum+1) AS item,
            a.* FROM (
            SELECT
            @rownum:=0,
            e.fecha_emision,
            SUM(c.precio_venta) precio_venta
            FROM parciales_completas c
            RIGHT JOIN guia_remision d ON d.id_parcial_completa=c.id_parcial_completa
            LEFT JOIN comprobantes e ON e.id_guia_remision=d.id_guia_remision
            GROUP BY e.fecha_emision
            HAVING e.fecha_emision >='$desde' AND e.fecha_emision <='$hasta'
            )a
        "
        );
        return $resultados->result();
    }

    public function listar_fechas2($desde2, $hasta2)
    {

        $resultados = $this->db->query(
            "
            SELECT (@rownum:=@rownum+1) AS item,
            a.* FROM (
            SELECT
            @rownum:=0,
            e.fecha_emision,
            SUM(c.precio_venta) precio_venta
            FROM parciales_completas c
            RIGHT JOIN guia_remision d ON d.id_parcial_completa=c.id_parcial_completa
            LEFT JOIN comprobantes e ON e.id_guia_remision=d.id_guia_remision
            GROUP BY e.fecha_emision
            HAVING e.fecha_emision >='$desde2' AND e.fecha_emision <='$hasta2'
            )a
        "
        );
        return $resultados->result();
    }

    public function eliminar_temporal()
    {
        return $this->db->query("delete FROM temporal");
    }

    public function insertar_temporal_det(
        $item,
        $fecha_emision,
        $precio_venta,
        $fecha_emision2,
        $precio_venta2
    ) {
        return $this->db->query(
            "
            INSERT INTO temporal
            (
            item,
            fecha_emision,
            precio_venta,
            fecha_emision2,
            precio_venta2
            )
            VALUES
            (
            '$item',
            '$fecha_emision',
            '$precio_venta',
            '$fecha_emision2',
            '$precio_venta2'
            )
        "
        );
    }

    public function listar()
    {

        $resultados = $this->db->query(
            "
            select 
            item,
            fecha_emision,
            precio_venta,
            fecha_emision2,
            precio_venta2,
            ROUND(((precio_venta/precio_venta2)-1)*100,2) AS porcentaje_venta
            from temporal;
            "
        );

        return $resultados->result();
    }
}
