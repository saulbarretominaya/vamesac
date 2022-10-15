<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_inicio extends CI_Model
{

  public function ingresar($usuario, $contraseña)
  {
    $resultados = $this->db->query(
      "
      SELECT
      a.id_usuario,a.id_trabajador,
      a.usuario,a.id_empresa,
      (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=a.id_empresa) AS ds_accesos_empresas,
      (SELECT abreviatura FROM detalle_multitablas WHERE id_dmultitabla=a.id_rol) AS ds_rol_usuario,
      (SELECT ruc FROM detalle_multitablas WHERE id_dmultitabla=a.id_empresa) AS ds_ruc_empresa,
      CONCAT(b.nombres,' ',b.ape_paterno,' ',b.ape_materno) AS ds_nombre_trabajador,
      (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=b.id_empresa) AS ds_trabaja_rrhh,
      (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=b.id_almacen) AS ds_sucursal,
      (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=b.id_cargo_trabajador) AS ds_cargo_trabajador
      FROM usuarios a
      LEFT JOIN trabajadores b ON b.id_trabajador=a.id_trabajador
      WHERE a.usuario= '$usuario' AND a.password ='$contraseña'
    "
    );
    return $resultados->row();
  }

  public function index_productos()
  {
    $resultados = $this->db->query(
      "
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
        ROUND(a.precio_unitario,2) as precio_unitario,
        a.rentabilidad,
        a.id_grupo,
        (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=a.id_grupo) AS ds_grupo,
        a.id_marca_producto,
        (SELECT descripcion FROM detalle_multitablas WHERE id_dmultitabla=a.id_marca_producto) AS ds_marca_producto,
        a.stock
        FROM productos a
        ORDER BY a.id_producto ASC
    "
    );
    return $resultados->result();
  }

  public function registrar(
    $nombre,
    $num_documento,
    $telefono,
    $correo,
    $direccion,
    $id_cotizacion_empresa,
    $igv,
    $valor_venta_t,
    $precio_venta
  ) {
    return $this->db->query(
      "
             INSERT INTO cotizacion
            (
                id_cotizacion,
                serie_cotizacion,categoria,id_trabajador,ds_nombre_trabajador,fecha_cotizacion,
                validez_oferta_cotizacion,fecha_vencimiento_validez_oferta,id_cliente_proveedor,num_documento,ds_nombre_cliente_proveedor,ds_departamento_cliente_proveedor,
                ds_provincia_cliente_proveedor,ds_distrito_cliente_proveedor,direccion_fiscal_cliente_proveedor,email_cliente_proveedor,
                clausula,lugar_entrega,nombre_encargado,observacion,
                id_condicion_pago,ds_condicion_pago,numero_dias_condicion_pago,fecha_condicion_pago,
                valor_venta_total_sin_d,valor_venta_total_con_d,
                descuento_total,igv,precio_venta,valor_cambio,id_moneda,id_estado_cotizacion,id_cotizacion_empresa,id_empresa
            )
            VALUES
            (
                '',
                '','PRODUCTOS',NULL,'ASISTENTE VIRTUAL',NOW(),
                '1',date_add(now(), interval 1 day),NULL,'$num_documento','$nombre','',
                '','','$direccion','$correo',
                '','','$telefono','',
                '866','CONTADO','',NULL,
                '$valor_venta_t','$valor_venta_t',
                '','$igv','$precio_venta','','1','857','$id_cotizacion_empresa','3'
            )
            "
    );
  }

  public function lastID()
  {
    return $this->db->insert_id();
  }

  public function registrar_detalle(
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
            dias_entrega,id_moneda,item,id_estado_cotizacion,fecha_cotizacion
            )
            VALUES
            (
            '', 
            '$id_cotizacion','$id_producto','',
            '$codigo_producto','$descripcion_producto',
            '$id_unidad_medida','$ds_unidad_medida','$id_marca_producto','$ds_marca_producto',
            '$cantidad',
            '$precio_unitario','$precio_unitario','','','',
            '','','','',
            '$valor_venta','$valor_venta',
            '','1','$item','977',NOW());
        "
    );
  }
}
