<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_nivel_productividad extends CI_Model
{

    public function index_buscar($desde, $hasta)
    {

        $resultados = $this->db->query("
        SELECT (@rownum:=@rownum+1) AS item,
        fecha_emision,
        precio_venta,
        horas_trabajadas,
        ROUND(precio_venta/horas_trabajadas,2) AS nivel_productividad FROM 
        (
        SELECT 
        @rownum:=0,
        CAST(e.fecha_emision AS DATE) fecha_emision,
        SUM(c.precio_venta) AS precio_venta,
        (CASE WHEN DATE_FORMAT(e.fecha_emision, '%W') = 'Saturday' THEN '4' ELSE '8' END) AS horas_trabajadas
        FROM parciales_completas c
        RIGHT JOIN guia_remision d ON d.id_parcial_completa=c.id_parcial_completa
        LEFT JOIN comprobantes e ON e.id_guia_remision=d.id_guia_remision
        GROUP BY CAST(e.fecha_emision AS DATE)
        )a
        HAVING fecha_emision >='$desde' AND fecha_emision <='$hasta'
        ");

        return $resultados->result();
    }

    public function listar_fechas($desde, $hasta)
    {

        $resultados = $this->db->query(
            "
            SELECT (@rownum:=@rownum+1) AS item,
        fecha_emision,
        precio_venta,
        horas_trabajadas,
        ROUND(precio_venta/horas_trabajadas,2) AS nivel_productividad FROM 
        (
        SELECT 
        @rownum:=0,
        CAST(e.fecha_emision AS DATE) fecha_emision,
        SUM(c.precio_venta) AS precio_venta,
        (CASE WHEN DATE_FORMAT(e.fecha_emision, '%W') = 'Saturday' THEN '4' ELSE '8' END) AS horas_trabajadas
        FROM parciales_completas c
        RIGHT JOIN guia_remision d ON d.id_parcial_completa=c.id_parcial_completa
        LEFT JOIN comprobantes e ON e.id_guia_remision=d.id_guia_remision
        GROUP BY CAST(e.fecha_emision AS DATE)
        )a
        HAVING fecha_emision >='$desde' AND fecha_emision <='$hasta'
        "
        );
        return $resultados->result();
    }
}
