/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.14-MariaDB : Database - vamesac
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vamesac` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `vamesac`;

/*Table structure for table `carga_inicial` */

DROP TABLE IF EXISTS `carga_inicial`;

CREATE TABLE `carga_inicial` (
  `id_carga_inicial` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_carga_inicial` date DEFAULT NULL,
  `id_tipo_ingreso` int(10) DEFAULT NULL,
  `id_moneda` int(10) DEFAULT NULL,
  `tipo_cambio` varchar(10) DEFAULT NULL,
  `id_cliente_proveedor` int(10) DEFAULT NULL,
  `ds_nombre_cliente_proveedor` varchar(200) DEFAULT NULL,
  `num_guia` varchar(100) DEFAULT NULL,
  `num_orden_compra` varchar(100) DEFAULT NULL,
  `id_tipo_comprobante` int(10) DEFAULT NULL,
  `fecha_comprobante` date DEFAULT NULL,
  `num_comprobante` varchar(20) DEFAULT NULL,
  `observacion` varchar(100) DEFAULT NULL,
  `monto_total` decimal(18,2) DEFAULT NULL,
  `id_trabajador` int(10) DEFAULT NULL,
  `ds_nombre_trabajador` varchar(200) DEFAULT NULL,
  `id_carga_inicial_empresa` int(10) DEFAULT NULL,
  `id_empresa` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_carga_inicial`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `carga_inicial` */

LOCK TABLES `carga_inicial` WRITE;

insert  into `carga_inicial`(`id_carga_inicial`,`fecha_carga_inicial`,`id_tipo_ingreso`,`id_moneda`,`tipo_cambio`,`id_cliente_proveedor`,`ds_nombre_cliente_proveedor`,`num_guia`,`num_orden_compra`,`id_tipo_comprobante`,`fecha_comprobante`,`num_comprobante`,`observacion`,`monto_total`,`id_trabajador`,`ds_nombre_trabajador`,`id_carga_inicial_empresa`,`id_empresa`) values (5,'2022-08-15',731,1,'13432',1,'TOTTUS  ','wwwww','wwwwwwwwwww',69,'2022-08-15','wwwwwwwwwwwwwww','wwwwwwwwwww',4.00,1,'SAUL BARRETO MINAYA',100,3),(6,'2022-08-18',729,1,'1111',1,'TOTTUS  ','1111','1',69,'2022-08-18','11','111',1.00,1,'SAUL BARRETO MINAYA',6,3);

UNLOCK TABLES;

/*Table structure for table `chatbot` */

DROP TABLE IF EXISTS `chatbot`;

CREATE TABLE `chatbot` (
  `id_chatbot` int(10) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(100) DEFAULT NULL,
  `respuesta` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_chatbot`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `chatbot` */

LOCK TABLES `chatbot` WRITE;

insert  into `chatbot`(`id_chatbot`,`pregunta`,`respuesta`) values (1,'Tienes un nombre como te llamas','Mi nombre es Cortana.'),(2,'Donde vives','Yo vivo en San Francisco'),(3,'Tienes sentimientos','No, soy una inteligencia artificial');

UNLOCK TABLES;

/*Table structure for table `clientes_proveedores` */

DROP TABLE IF EXISTS `clientes_proveedores`;

CREATE TABLE `clientes_proveedores` (
  `id_cliente_proveedor` int(10) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) DEFAULT NULL,
  `ape_paterno` varchar(50) DEFAULT NULL,
  `ape_materno` varchar(50) DEFAULT NULL,
  `num_documento` varchar(20) DEFAULT NULL,
  `razon_social` varchar(20) DEFAULT NULL,
  `direccion_fiscal` varchar(50) DEFAULT NULL,
  `direccion_alm1` varchar(50) DEFAULT NULL,
  `direccion_alm2` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `linea_credito_soles` decimal(18,2) DEFAULT NULL,
  `linea_credito_dolares` decimal(18,2) DEFAULT NULL,
  `credito_unitario_soles` decimal(18,2) DEFAULT NULL,
  `credito_unitario_dolares` decimal(18,2) DEFAULT NULL,
  `disponible_soles` decimal(18,2) DEFAULT NULL,
  `disponible_dolares` decimal(18,2) DEFAULT NULL,
  `linea_opcional` varchar(50) DEFAULT NULL,
  `linea_opcional_unitaria` decimal(18,2) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contacto_registro` varchar(50) DEFAULT NULL,
  `email_cobranza` varchar(60) DEFAULT NULL,
  `contacto_cobranza` varchar(60) DEFAULT NULL,
  `id_origen` int(10) DEFAULT NULL,
  `id_condicion` int(10) DEFAULT NULL,
  `id_tipo_persona` int(10) DEFAULT NULL,
  `id_tipo_persona_sunat` int(10) DEFAULT NULL,
  `id_tipo_documento` int(10) DEFAULT NULL,
  `id_departamento` int(10) DEFAULT NULL,
  `id_provincia` int(10) DEFAULT NULL,
  `id_distrito` int(10) DEFAULT NULL,
  `id_tipo_giro` int(10) DEFAULT NULL,
  `id_linea_disponible` int(10) DEFAULT NULL,
  `id_condicion_pago` int(10) DEFAULT NULL,
  `id_tipo_cliente_pago` int(10) DEFAULT NULL,
  `id_trabajador` int(10) DEFAULT NULL,
  `ds_nombre_trabajador` varchar(200) DEFAULT NULL,
  `id_cliente_proveedor_empresa` int(10) DEFAULT NULL,
  `id_empresa` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_cliente_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `clientes_proveedores` */

LOCK TABLES `clientes_proveedores` WRITE;

insert  into `clientes_proveedores`(`id_cliente_proveedor`,`nombres`,`ape_paterno`,`ape_materno`,`num_documento`,`razon_social`,`direccion_fiscal`,`direccion_alm1`,`direccion_alm2`,`telefono`,`celular`,`linea_credito_soles`,`linea_credito_dolares`,`credito_unitario_soles`,`credito_unitario_dolares`,`disponible_soles`,`disponible_dolares`,`linea_opcional`,`linea_opcional_unitaria`,`email`,`contacto_registro`,`email_cobranza`,`contacto_cobranza`,`id_origen`,`id_condicion`,`id_tipo_persona`,`id_tipo_persona_sunat`,`id_tipo_documento`,`id_departamento`,`id_provincia`,`id_distrito`,`id_tipo_giro`,`id_linea_disponible`,`id_condicion_pago`,`id_tipo_cliente_pago`,`id_trabajador`,`ds_nombre_trabajador`,`id_cliente_proveedor_empresa`,`id_empresa`) values (1,'TOTTUS','','','76787897','','Direccion Fiscal San Juan de Lurigancho','','','(96) 052-8429','987-897-897_ ',0.00,0.00,0.00,14.16,0.00,-3.59,'',0.00,'','','','',618,620,615,617,594,612,613,614,625,0,17,0,1,'SAUL BARRETO MINAYA',1,3),(2,'PLAZA VEZ','','','76270276','','Jr. San Martin 543 - Pro','','','','',0.00,0.00,0.00,5.90,0.00,-1.50,'',0.00,'','','','',618,620,615,617,594,612,613,614,0,0,0,0,1,'SAUL BARRETO MINAYA',2,3),(3,'SAGA FALABELLA','','','76787678','','Direccion Fiscal San Juan de Lurigancho','','','','',0.00,0.00,0.00,0.00,0.00,0.00,'',0.00,'','','','',618,620,615,617,594,612,613,614,0,0,0,0,1,'SAUL BARRETO MINAYA',3,3);

UNLOCK TABLES;

/*Table structure for table `comodin` */

DROP TABLE IF EXISTS `comodin`;

CREATE TABLE `comodin` (
  `id_comodin` int(10) NOT NULL AUTO_INCREMENT,
  `id_categoria_comodin` int(10) DEFAULT NULL,
  `codigo_producto` varchar(50) DEFAULT NULL,
  `descripcion_producto` varchar(100) DEFAULT NULL,
  `id_marca_producto` int(10) DEFAULT NULL,
  `id_unidad_medida` varchar(50) DEFAULT NULL,
  `id_moneda` varchar(10) DEFAULT NULL,
  `precio_unitario` decimal(18,5) DEFAULT NULL,
  `nombre_proveedor` varchar(50) DEFAULT NULL,
  `id_trabajador` int(10) DEFAULT NULL,
  `ds_nombre_trabajador` varchar(200) DEFAULT NULL,
  `id_comodin_empresa` int(10) DEFAULT NULL,
  `id_empresa` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_comodin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `comodin` */

LOCK TABLES `comodin` WRITE;

insert  into `comodin`(`id_comodin`,`id_categoria_comodin`,`codigo_producto`,`descripcion_producto`,`id_marca_producto`,`id_unidad_medida`,`id_moneda`,`precio_unitario`,`nombre_proveedor`,`id_trabajador`,`ds_nombre_trabajador`,`id_comodin_empresa`,`id_empresa`) values (1,904,'wswsw','swsw',300,'264','1',2.00000,'sws',1,'SAUL BARRETO MINAYA',1,3);

UNLOCK TABLES;

/*Table structure for table `comprobantes` */

DROP TABLE IF EXISTS `comprobantes`;

CREATE TABLE `comprobantes` (
  `id_comprobante` int(10) NOT NULL AUTO_INCREMENT,
  `id_tipo_comprobante` int(10) DEFAULT NULL,
  `ds_tipo_comprobante` varchar(100) DEFAULT NULL,
  `fecha_emision` date DEFAULT NULL,
  `dias` varchar(50) DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `orden_compra` varchar(50) DEFAULT NULL,
  `id_condicion_pago` int(10) DEFAULT NULL,
  `ds_condicion_pago` varchar(100) DEFAULT NULL,
  `monto_total_condicion_pago` decimal(18,2) DEFAULT NULL,
  `observacion` varchar(200) DEFAULT NULL,
  `id_guia_remision` int(10) DEFAULT NULL,
  `id_num_comprobante` int(10) DEFAULT NULL,
  `id_estado_comprobante` varchar(50) DEFAULT NULL,
  `id_estado_sunat` varchar(50) DEFAULT NULL,
  `id_trabajador` int(10) DEFAULT NULL,
  `ds_nombre_trabajador` varchar(200) DEFAULT NULL,
  `id_comprobante_empresa` int(10) DEFAULT NULL,
  `id_empresa` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_comprobante`),
  KEY `id_guia_remision` (`id_guia_remision`),
  CONSTRAINT `comprobantes_ibfk_1` FOREIGN KEY (`id_guia_remision`) REFERENCES `guia_remision` (`id_guia_remision`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `comprobantes` */

LOCK TABLES `comprobantes` WRITE;

insert  into `comprobantes`(`id_comprobante`,`id_tipo_comprobante`,`ds_tipo_comprobante`,`fecha_emision`,`dias`,`fecha_vencimiento`,`orden_compra`,`id_condicion_pago`,`ds_condicion_pago`,`monto_total_condicion_pago`,`observacion`,`id_guia_remision`,`id_num_comprobante`,`id_estado_comprobante`,`id_estado_sunat`,`id_trabajador`,`ds_nombre_trabajador`,`id_comprobante_empresa`,`id_empresa`) values (1,69,'FACTURA                                    ','2022-10-24','',NULL,'',0,'Seleccionar',0.00,'',2,1,'900',NULL,1,'SAUL BARRETO MINAYA',1,3),(2,70,'BOLETA                                    ','2022-11-24','',NULL,'',0,'Seleccionar',0.00,'',1,1,'900',NULL,1,'SAUL BARRETO MINAYA',2,3),(3,69,'FACTURA                                    ','2022-10-25','',NULL,'',0,'Seleccionar',0.00,'',3,2,'900',NULL,1,'SAUL BARRETO MINAYA',3,3);

UNLOCK TABLES;

/*Table structure for table `comprobantes_anulados` */

DROP TABLE IF EXISTS `comprobantes_anulados`;

CREATE TABLE `comprobantes_anulados` (
  `id_comprobante_anulado` int(10) NOT NULL AUTO_INCREMENT,
  `id_comprobante` int(10) DEFAULT NULL,
  `motivo` varchar(200) DEFAULT NULL,
  `json_request` varchar(5000) DEFAULT NULL,
  `json_response` varchar(5000) DEFAULT NULL,
  `numero` varchar(100) DEFAULT NULL,
  `enlace` varchar(1000) DEFAULT NULL,
  `sunat_ticket_numero` varchar(100) DEFAULT NULL,
  `aceptada_por_sunat` varchar(100) DEFAULT NULL,
  `sunat_description` varchar(100) DEFAULT NULL,
  `sunat_note` varchar(100) DEFAULT NULL,
  `sunat_responsecode` varchar(100) DEFAULT NULL,
  `sunat_soap_error` varchar(100) DEFAULT NULL,
  `pdf_zip_base64` varchar(100) DEFAULT NULL,
  `xml_zip_base64` varchar(100) DEFAULT NULL,
  `cdr_zip_base64` varchar(100) DEFAULT NULL,
  `enlace_del_pdf` varchar(1000) DEFAULT NULL,
  `enlace_del_xml` varchar(1000) DEFAULT NULL,
  `enlace_del_cdr` varchar(1000) DEFAULT NULL,
  `key` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_comprobante_anulado`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4;

/*Data for the table `comprobantes_anulados` */

LOCK TABLES `comprobantes_anulados` WRITE;

insert  into `comprobantes_anulados`(`id_comprobante_anulado`,`id_comprobante`,`motivo`,`json_request`,`json_response`,`numero`,`enlace`,`sunat_ticket_numero`,`aceptada_por_sunat`,`sunat_description`,`sunat_note`,`sunat_responsecode`,`sunat_soap_error`,`pdf_zip_base64`,`xml_zip_base64`,`cdr_zip_base64`,`enlace_del_pdf`,`enlace_del_xml`,`enlace_del_cdr`,`key`) values (46,1,'SE ANULA PORQUE OMAR ES UN JOVEN INCORREGIBLE','{\"operacion\":\"generar_anulacion\",\"tipo_de_comprobante\":\"1\",\"serie\":\"FFF1\",\"numero\":\"60\",\"motivo\":\"SE ANULA PORQUE OMAR ES UN JOVEN INCORREGIBLE\",\"codigo_unico\":\"\"}','{\"numero\":1000,\"enlace\":\"https://www.nubefact.com/anulacion/7473eb0b-da36-4e73-9617-d6cded406f97\",\"sunat_ticket_numero\":\"2022080100896262171\",\"aceptada_por_sunat\":false,\"sunat_description\":null,\"sunat_note\":\"\",\"sunat_responsecode\":null,\"sunat_soap_error\":null,\"pdf_zip_base64\":null,\"xml_zip_base64\":null,\"cdr_zip_base64\":null,\"enlace_del_pdf\":\"https://www.nubefact.com/anulacion/7473eb0b-da36-4e73-9617-d6cded406f97.pdf\",\"enlace_del_xml\":\"https://www.nubefact.com/anulacion/7473eb0b-da36-4e73-9617-d6cded406f97.xml\",\"enlace_del_cdr\":null,\"key\":\"7473eb0b-da36-4e73-9617-d6cded406f97\",\"voided_document\":{\"numero\":1000,\"enlace\":\"https://www.nubefact.com/anulacion/7473eb0b-da36-4e73-9617-d6cded406f97\",\"sunat_ticket_numero\":\"2022080100896262171\",\"aceptada_por_sunat\":false,\"sunat_description\":null,\"sunat_note\":null,\"sunat_responsecode\":null,\"sunat_soap_error\":null,\"pdf_zip_base64\":null,\"xml_zip_base64\":null,\"cdr_zip_base64\":null,\"enlace_del_pdf\":\"https://www.nubefact.com/anulacion/7473eb0b-da36-4e73-9617-d6cded406f97.pdf\",\"enlace_del_xml\":\"https://www.nubefact.com/anulacion/7473eb0b-da36-4e73-9617-d6cded406f97.xml\",\"enlace_del_cdr\":null,\"key\":\"7473eb0b-da36-4e73-9617-d6cded406f97\"}}','1000','https://www.nubefact.com/anulacion/7473eb0b-da36-4e73-9617-d6cded406f97','2022080100896262171','','','','','','','','','https://www.nubefact.com/anulacion/7473eb0b-da36-4e73-9617-d6cded406f97.pdf','https://www.nubefact.com/anulacion/7473eb0b-da36-4e73-9617-d6cded406f97.xml','','7473eb0b-da36-4e73-9617-d6cded406f97');

UNLOCK TABLES;

/*Table structure for table `comprobantes_emitidos` */

DROP TABLE IF EXISTS `comprobantes_emitidos`;

CREATE TABLE `comprobantes_emitidos` (
  `id_comprobante_emitido` int(10) NOT NULL AUTO_INCREMENT,
  `id_comprobante` int(10) DEFAULT NULL,
  `json_request` varchar(5000) DEFAULT NULL,
  `json_response` varchar(5000) DEFAULT NULL,
  `tipo_de_comprobante` varchar(100) DEFAULT NULL,
  `serie` varchar(100) DEFAULT NULL,
  `numero` varchar(100) DEFAULT NULL,
  `enlace` varchar(1000) DEFAULT NULL,
  `aceptada_por_sunat` varchar(100) DEFAULT NULL,
  `sunat_description` varchar(100) DEFAULT NULL,
  `sunat_note` varchar(100) DEFAULT NULL,
  `sunat_responsecode` varchar(100) DEFAULT NULL,
  `sunat_soap_error` varchar(100) DEFAULT NULL,
  `anulado` varchar(100) DEFAULT NULL,
  `pdf_zip_base64` varchar(100) DEFAULT NULL,
  `xml_zip_base64` varchar(100) DEFAULT NULL,
  `cdr_zip_base64` varchar(100) DEFAULT NULL,
  `cadena_para_codigo_qr` varchar(100) DEFAULT NULL,
  `codigo_hash` varchar(100) DEFAULT NULL,
  `codigo_de_barras` varchar(100) DEFAULT NULL,
  `key` varchar(100) DEFAULT NULL,
  `digest_value` varchar(100) DEFAULT NULL,
  `enlace_del_pdf` varchar(1000) DEFAULT NULL,
  `enlace_del_xml` varchar(1000) DEFAULT NULL,
  `enlace_del_cdr` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_comprobante_emitido`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4;

/*Data for the table `comprobantes_emitidos` */

LOCK TABLES `comprobantes_emitidos` WRITE;

insert  into `comprobantes_emitidos`(`id_comprobante_emitido`,`id_comprobante`,`json_request`,`json_response`,`tipo_de_comprobante`,`serie`,`numero`,`enlace`,`aceptada_por_sunat`,`sunat_description`,`sunat_note`,`sunat_responsecode`,`sunat_soap_error`,`anulado`,`pdf_zip_base64`,`xml_zip_base64`,`cdr_zip_base64`,`cadena_para_codigo_qr`,`codigo_hash`,`codigo_de_barras`,`key`,`digest_value`,`enlace_del_pdf`,`enlace_del_xml`,`enlace_del_cdr`) values (64,2,'{\"operacion\":\"generar_comprobante\",\"tipo_de_comprobante\":\"1\",\"serie\":\"FFF1\",\"numero\":\"62\",\"sunat_transaction\":\"1\",\"cliente_tipo_de_documento\":\"6\",\"cliente_numero_de_documento\":\"20600695771\",\"cliente_denominacion\":\"NUBEFACT SA\",\"cliente_direccion\":\"CALLE LIBERTAD 116 MIRAFLORES - LIMA - PERU\",\"cliente_email\":\"\",\"cliente_email_1\":\"\",\"cliente_email_2\":\"\",\"fecha_de_emision\":\"01/08/2022\",\"fecha_de_vencimiento\":\"\",\"moneda\":\"1\",\"tipo_de_cambio\":\"\",\"porcentaje_de_igv\":\"18.00\",\"descuento_global\":\"\",\"total_descuento\":\"\",\"total_anticipo\":\"\",\"total_gravada\":\"600\",\"total_inafecta\":\"\",\"total_exonerada\":\"\",\"total_igv\":\"108\",\"total_gratuita\":\"\",\"total_otros_cargos\":\"\",\"total\":\"708\",\"percepcion_tipo\":\"\",\"percepcion_base_imponible\":\"\",\"total_percepcion\":\"\",\"total_incluido_percepcion\":\"\",\"detraccion\":\"false\",\"observaciones\":\"\",\"documento_que_se_modifica_tipo\":\"\",\"documento_que_se_modifica_serie\":\"\",\"documento_que_se_modifica_numero\":\"\",\"tipo_de_nota_de_credito\":\"\",\"tipo_de_nota_de_debito\":\"\",\"enviar_automaticamente_a_la_sunat\":\"true\",\"enviar_automaticamente_al_cliente\":\"false\",\"codigo_unico\":\"\",\"condiciones_de_pago\":\"\",\"medio_de_pago\":\"\",\"placa_vehiculo\":\"\",\"orden_compra_servicio\":\"\",\"tabla_personalizada_codigo\":\"\",\"formato_de_pdf\":\"\",\"items\":[{\"unidad_de_medida\":\"NIU\",\"codigo\":\"001\",\"descripcion\":\"DETALLE DEL PRODUCTO\",\"cantidad\":\"1\",\"valor_unitario\":\"500\",\"precio_unitario\":\"590\",\"descuento\":\"\",\"subtotal\":\"500\",\"tipo_de_igv\":\"1\",\"igv\":\"90\",\"total\":\"590\",\"anticipo_regularizacion\":\"false\",\"anticipo_documento_serie\":\"\",\"anticipo_documento_numero\":\"\"},{\"unidad_de_medida\":\"ZZ\",\"codigo\":\"001\",\"descripcion\":\"DETALLE DEL SERVICIO\",\"cantidad\":\"5\",\"valor_unitario\":\"20\",\"precio_unitario\":\"23.60\",\"descuento\":\"\",\"subtotal\":\"100\",\"tipo_de_igv\":\"1\",\"igv\":\"18\",\"total\":\"118\",\"anticipo_regularizacion\":\"false\",\"anticipo_documento_serie\":\"\",\"anticipo_documento_numero\":\"\"}]}','{\"tipo_de_comprobante\":1,\"serie\":\"FFF1\",\"numero\":62,\"enlace\":\"https://www.nubefact.com/cpe/b8f068ea-774f-4804-a417-30513ff7658f\",\"aceptada_por_sunat\":true,\"sunat_description\":\"La Factura Electru00f3nica FFF1-62 ha sido ACEPTADA\",\"sunat_note\":null,\"sunat_responsecode\":\"0\",\"sunat_soap_error\":\"\",\"anulado\":false,\"pdf_zip_base64\":null,\"xml_zip_base64\":null,\"cdr_zip_base64\":null,\"cadena_para_codigo_qr\":\"20600862481 | 01 | FFF1 | 000062 | 108.00 | 708.00 | 01/08/2022 | 6 | 20600695771 | BSEktpV/kMerOZpSEKMMKsPk9KRUCBM1AzIYMdW6bD8= |\",\"codigo_hash\":\"BSEktpV/kMerOZpSEKMMKsPk9KRUCBM1AzIYMdW6bD8=\",\"codigo_de_barras\":\"20600862481 | 01 | FFF1 | 000062 | 108.00 | 708.00 | 01/08/2022 | 6 | 20600695771 | BSEktpV/kMerOZpSEKMMKsPk9KRUCBM1AzIYMdW6bD8= |  |\",\"key\":\"b8f068ea-774f-4804-a417-30513ff7658f\",\"digest_value\":\"BSEktpV/kMerOZpSEKMMKsPk9KRUCBM1AzIYMdW6bD8=\",\"enlace_del_pdf\":\"https://www.nubefact.com/cpe/b8f068ea-774f-4804-a417-30513ff7658f.pdf\",\"enlace_del_xml\":\"https://www.nubefact.com/cpe/b8f068ea-774f-4804-a417-30513ff7658f.xml\",\"enlace_del_cdr\":\"https://www.nubefact.com/cpe/b8f068ea-774f-4804-a417-30513ff7658f.cdr\",\"invoice\":{\"tipo_de_comprobante\":1,\"serie\":\"FFF1\",\"numero\":62,\"enlace\":\"https://www.nubefact.com/cpe/b8f068ea-774f-4804-a417-30513ff7658f\",\"aceptada_por_sunat\":true,\"sunat_description\":\"La Factura Electru00f3nica FFF1-62 ha sido ACEPTADA\",\"sunat_note\":null,\"sunat_responsecode\":\"0\",\"sunat_soap_error\":\"\",\"pdf_zip_base64\":null,\"xml_zip_base64\":null,\"cdr_zip_base64\":null,\"cadena_para_codigo_qr\":\"20600862481 | 01 | FFF1 | 000062 | 108.00 | 708.00 | 01/08/2022 | 6 | 20600695771 | BSEktpV/kMerOZpSEKMMKsPk9KRUCBM1AzIYMdW6bD8= |\",\"codigo_hash\":\"BSEktpV/kMerOZpSEKMMKsPk9KRUCBM1AzIYMdW6bD8=\",\"digest_value\":\"BSEktpV/kMerOZpSEKMMKsPk9KRUCBM1AzIYMdW6bD8=\",\"codigo_de_barras\":\"20600862481 | 01 | FFF1 | 000062 | 108.00 | 708.00 | 01/08/2022 | 6 | 20600695771 | BSEktpV/kMerOZpSEKMMKsPk9KRUCBM1AzIYMdW6bD8= |  |\",\"key\":\"b8f068ea-774f-4804-a417-30513ff7658f\"}}','1','FFF1','62','https://www.nubefact.com/cpe/b8f068ea-774f-4804-a417-30513ff7658f','1','La Factura Electrónica FFF1-62 ha sido ACEPTADA','','0','','','','','','20600862481 | 01 | FFF1 | 000062 | 108.00 | 708.00 | 01/08/2022 | 6 | 20600695771 | BSEktpV/kMerOZpS','BSEktpV/kMerOZpSEKMMKsPk9KRUCBM1AzIYMdW6bD8=','20600862481 | 01 | FFF1 | 000062 | 108.00 | 708.00 | 01/08/2022 | 6 | 20600695771 | BSEktpV/kMerOZpS','b8f068ea-774f-4804-a417-30513ff7658f','BSEktpV/kMerOZpSEKMMKsPk9KRUCBM1AzIYMdW6bD8=','https://www.nubefact.com/cpe/b8f068ea-774f-4804-a417-30513ff7658f.pdf','https://www.nubefact.com/cpe/b8f068ea-774f-4804-a417-30513ff7658f.xml','https://www.nubefact.com/cpe/b8f068ea-774f-4804-a417-30513ff7658f.cdr');

UNLOCK TABLES;

/*Table structure for table `cotizacion` */

DROP TABLE IF EXISTS `cotizacion`;

CREATE TABLE `cotizacion` (
  `id_cotizacion` int(10) NOT NULL AUTO_INCREMENT,
  `serie_cotizacion` varchar(10) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `fecha_cotizacion` date DEFAULT NULL,
  `validez_oferta_cotizacion` varchar(10) DEFAULT NULL,
  `fecha_vencimiento_validez_oferta` date DEFAULT NULL,
  `id_cliente_proveedor` int(10) DEFAULT NULL,
  `num_documento` varchar(50) DEFAULT NULL,
  `ds_nombre_cliente_proveedor` varchar(200) DEFAULT NULL,
  `ds_departamento_cliente_proveedor` varchar(100) DEFAULT NULL,
  `ds_provincia_cliente_proveedor` varchar(100) DEFAULT NULL,
  `ds_distrito_cliente_proveedor` varchar(100) DEFAULT NULL,
  `direccion_fiscal_cliente_proveedor` varchar(200) DEFAULT NULL,
  `email_cliente_proveedor` varchar(100) DEFAULT NULL,
  `clausula` varchar(500) DEFAULT NULL,
  `lugar_entrega` varchar(500) DEFAULT NULL,
  `nombre_encargado` varchar(200) DEFAULT NULL,
  `observacion` varchar(500) DEFAULT NULL,
  `id_condicion_pago` int(10) DEFAULT NULL,
  `ds_condicion_pago` varchar(100) DEFAULT NULL,
  `numero_dias_condicion_pago` varchar(50) DEFAULT NULL,
  `fecha_condicion_pago` date DEFAULT NULL,
  `valor_venta_total_sin_d` decimal(18,2) DEFAULT NULL,
  `valor_venta_total_con_d` decimal(18,2) DEFAULT NULL,
  `descuento_total` decimal(18,2) DEFAULT NULL,
  `igv` decimal(18,2) DEFAULT NULL,
  `precio_venta` decimal(18,2) DEFAULT NULL,
  `valor_cambio` decimal(6,3) DEFAULT NULL,
  `id_moneda` int(10) DEFAULT NULL,
  `id_estado_cotizacion` varchar(10) DEFAULT NULL,
  `fecha_aprobacion` datetime DEFAULT NULL,
  `id_trabajador` int(10) DEFAULT NULL,
  `ds_nombre_trabajador` varchar(200) DEFAULT NULL,
  `id_cotizacion_empresa` int(10) DEFAULT NULL,
  `id_empresa` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_cotizacion`),
  KEY `id_trabajador` (`id_trabajador`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `cotizacion` */

LOCK TABLES `cotizacion` WRITE;

insert  into `cotizacion`(`id_cotizacion`,`serie_cotizacion`,`categoria`,`fecha_cotizacion`,`validez_oferta_cotizacion`,`fecha_vencimiento_validez_oferta`,`id_cliente_proveedor`,`num_documento`,`ds_nombre_cliente_proveedor`,`ds_departamento_cliente_proveedor`,`ds_provincia_cliente_proveedor`,`ds_distrito_cliente_proveedor`,`direccion_fiscal_cliente_proveedor`,`email_cliente_proveedor`,`clausula`,`lugar_entrega`,`nombre_encargado`,`observacion`,`id_condicion_pago`,`ds_condicion_pago`,`numero_dias_condicion_pago`,`fecha_condicion_pago`,`valor_venta_total_sin_d`,`valor_venta_total_con_d`,`descuento_total`,`igv`,`precio_venta`,`valor_cambio`,`id_moneda`,`id_estado_cotizacion`,`fecha_aprobacion`,`id_trabajador`,`ds_nombre_trabajador`,`id_cotizacion_empresa`,`id_empresa`) values (1,'','PRODUCTOS','2022-10-24','5','2022-10-29',1,NULL,'TOTTUS  ','LIMA','LIMA','COMAS','Direccion Fiscal San Juan de Lurigancho','sdfghjk','rfgthj','sdfghwserfgt','wsedrfgterftg','sdfgh',866,'CONTADO','',NULL,24.00,24.00,0.00,4.32,28.32,3.939,1,'858','2022-10-24 19:12:57',1,'SAUL BARRETO MINAYA',1,3),(2,'','PRODUCTOS','2022-10-24','6','2022-10-30',3,NULL,'SAGA FALABELLA  ','LIMA','LIMA','COMAS','Direccion Fiscal San Juan de Lurigancho','hgfdsaASDFGH','JKJHGFDSDFGH','GFDSASDFG','SASDFGBFDSASDF','HBGFDSAS',866,'CONTADO','',NULL,36.00,36.00,0.00,6.48,42.48,3.939,1,'858','2022-10-24 19:12:54',1,'SAUL BARRETO MINAYA',2,3),(3,'','PRODUCTOS','2022-10-25','2','2022-10-27',1,NULL,'TOTTUS  ','LIMA','LIMA','COMAS','Direccion Fiscal San Juan de Lurigancho','kjhgfdsa','jhgfdsa','hbgvcfdxsz','szabhgvfcdxsz','nbhvgfcdx',866,'CONTADO','',NULL,24.00,24.00,0.00,4.32,28.32,3.939,1,'858','2022-10-25 11:00:28',1,'SAUL BARRETO MINAYA',3,3);

UNLOCK TABLES;

/*Table structure for table `detalle_carga_inicial` */

DROP TABLE IF EXISTS `detalle_carga_inicial`;

CREATE TABLE `detalle_carga_inicial` (
  `id_dcarga_inicial` int(10) NOT NULL AUTO_INCREMENT,
  `id_carga_inicial` int(10) DEFAULT NULL,
  `item` varchar(50) DEFAULT NULL,
  `id_almacen` int(10) DEFAULT NULL,
  `ds_almacen` varchar(100) DEFAULT NULL,
  `id_producto` int(10) DEFAULT NULL,
  `codigo_producto` varchar(100) DEFAULT NULL,
  `descripcion_producto` varchar(300) DEFAULT NULL,
  `id_unidad_medida` int(10) DEFAULT NULL,
  `ds_unidad_medida` varchar(100) DEFAULT NULL,
  `id_marca_producto` int(10) DEFAULT NULL,
  `ds_marca_producto` varchar(100) DEFAULT NULL,
  `stock_actual` varchar(100) DEFAULT NULL,
  `nueva_cantidad` varchar(100) DEFAULT NULL,
  `total_stock` varchar(100) DEFAULT NULL,
  `precio_unitario` decimal(18,5) DEFAULT NULL,
  `valor_total` decimal(18,2) DEFAULT NULL,
  `id_estado_carga_inicial` varchar(10) DEFAULT NULL,
  `fecha_carga_inicial` date DEFAULT NULL,
  PRIMARY KEY (`id_dcarga_inicial`),
  KEY `id_carga_inicial` (`id_carga_inicial`),
  CONSTRAINT `detalle_carga_inicial_ibfk_1` FOREIGN KEY (`id_carga_inicial`) REFERENCES `carga_inicial` (`id_carga_inicial`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detalle_carga_inicial` */

LOCK TABLES `detalle_carga_inicial` WRITE;

insert  into `detalle_carga_inicial`(`id_dcarga_inicial`,`id_carga_inicial`,`item`,`id_almacen`,`ds_almacen`,`id_producto`,`codigo_producto`,`descripcion_producto`,`id_unidad_medida`,`ds_unidad_medida`,`id_marca_producto`,`ds_marca_producto`,`stock_actual`,`nueva_cantidad`,`total_stock`,`precio_unitario`,`valor_total`,`id_estado_carga_inicial`,`fecha_carga_inicial`) values (45,5,'1',139,'TIENDA PROCERES',1,'P002','REFLECTORES',262,'S',299,'CENTELSA','0','100','100',1.00000,100.00,'975','2022-08-15'),(46,5,'1',139,'TIENDA PROCERES',1,'P002','REFLECTORES',262,'S',299,'CENTELSA','100','99','199',1.00000,99.00,'975','2022-08-15'),(47,5,'1',139,'TIENDA PROCERES',1,'P002','REFLECTORES',262,'S',299,'CENTELSA','199','1','200',12.00000,12.00,'975','2022-08-16'),(48,5,'1',139,'TIENDA PROCERES',1,'P002','REFLECTORES',262,'S',299,'CENTELSA','200','1','199',12.00000,12.00,'975','2022-08-16'),(49,5,'1',139,'TIENDA PROCERES',1,'P002','REFLECTORES',262,'S',299,'CENTELSA','199','2','201',12.00000,24.00,'975','2022-08-18'),(50,6,'1',139,'TIENDA PROCERES',1,'P002','REFLECTORES',262,'S',299,'CENTELSA','201','1','202',1.00000,1.00,'974','2022-08-18'),(51,5,'1',139,'TIENDA PROCERES',1,'P002','REFLECTORES',262,'S',299,'CENTELSA','202','2','200',325432.00000,650864.00,'975','2022-09-08'),(52,5,'1',139,'TIENDA PROCERES',4,'P003','SOPORTES ELECTRICOS XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',262,'S',300,'MIGUELEZ','73','2','75',2.00000,4.00,'974','2022-09-08');

UNLOCK TABLES;

/*Table structure for table `detalle_condicion_pagos_comprobantes` */

DROP TABLE IF EXISTS `detalle_condicion_pagos_comprobantes`;

CREATE TABLE `detalle_condicion_pagos_comprobantes` (
  `id_dcondicion_pago` int(10) NOT NULL AUTO_INCREMENT,
  `id_comprobante` int(10) DEFAULT NULL,
  `fecha_cuota` date DEFAULT NULL,
  `monto_cuota` decimal(18,2) DEFAULT NULL,
  `id_estado_condicion_pago` varchar(50) DEFAULT NULL,
  `fecha_condicion_pago` datetime DEFAULT NULL,
  PRIMARY KEY (`id_dcondicion_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detalle_condicion_pagos_comprobantes` */

LOCK TABLES `detalle_condicion_pagos_comprobantes` WRITE;

insert  into `detalle_condicion_pagos_comprobantes`(`id_dcondicion_pago`,`id_comprobante`,`fecha_cuota`,`monto_cuota`,`id_estado_condicion_pago`,`fecha_condicion_pago`) values (54,1,'2022-08-02',2.00,'895','2022-08-01 19:03:00');

UNLOCK TABLES;

/*Table structure for table `detalle_cotizacion` */

DROP TABLE IF EXISTS `detalle_cotizacion`;

CREATE TABLE `detalle_cotizacion` (
  `id_dcotizacion` int(10) NOT NULL AUTO_INCREMENT,
  `id_cotizacion` int(10) DEFAULT NULL,
  `id_producto` int(10) DEFAULT NULL,
  `id_comodin` int(10) DEFAULT NULL,
  `codigo_producto` varchar(45) DEFAULT NULL,
  `descripcion_producto` varchar(100) DEFAULT NULL,
  `id_unidad_medida` int(10) DEFAULT NULL,
  `ds_unidad_medida` varchar(100) DEFAULT NULL,
  `id_marca_producto` int(10) DEFAULT NULL,
  `ds_marca_producto` varchar(100) DEFAULT NULL,
  `cantidad` varchar(20) DEFAULT NULL,
  `precio_inicial` decimal(18,5) DEFAULT NULL,
  `precio_ganancia` decimal(18,5) DEFAULT NULL,
  `g` decimal(5,2) DEFAULT NULL,
  `g_unidad` decimal(18,2) DEFAULT NULL,
  `g_cant_total` decimal(18,2) DEFAULT NULL,
  `precio_descuento` decimal(18,5) DEFAULT NULL,
  `d` decimal(5,2) DEFAULT NULL,
  `d_unidad` decimal(18,2) DEFAULT NULL,
  `d_cant_total` decimal(18,2) DEFAULT NULL,
  `valor_venta_sin_d` decimal(18,5) DEFAULT NULL,
  `valor_venta_con_d` decimal(18,5) DEFAULT NULL,
  `dias_entrega` varchar(10) DEFAULT NULL,
  `id_moneda` varchar(10) DEFAULT NULL,
  `item` varchar(50) DEFAULT NULL,
  `id_estado_elaborar_pc` varchar(50) DEFAULT NULL,
  `id_estado_cotizacion` varchar(10) DEFAULT NULL,
  `fecha_cotizacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id_dcotizacion`),
  KEY `id_cotizacion` (`id_cotizacion`),
  KEY `id_producto` (`id_producto`),
  KEY `id_comodin` (`id_comodin`),
  CONSTRAINT `detalle_cotizacion_ibfk_1` FOREIGN KEY (`id_cotizacion`) REFERENCES `cotizacion` (`id_cotizacion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detalle_cotizacion` */

LOCK TABLES `detalle_cotizacion` WRITE;

insert  into `detalle_cotizacion`(`id_dcotizacion`,`id_cotizacion`,`id_producto`,`id_comodin`,`codigo_producto`,`descripcion_producto`,`id_unidad_medida`,`ds_unidad_medida`,`id_marca_producto`,`ds_marca_producto`,`cantidad`,`precio_inicial`,`precio_ganancia`,`g`,`g_unidad`,`g_cant_total`,`precio_descuento`,`d`,`d_unidad`,`d_cant_total`,`valor_venta_sin_d`,`valor_venta_con_d`,`dias_entrega`,`id_moneda`,`item`,`id_estado_elaborar_pc`,`id_estado_cotizacion`,`fecha_cotizacion`) values (1,1,3,0,'P001','ALAMBRES Y CABLES ELECTRICOS',263,'BLS',300,'MIGUELEZ','2',12.00000,12.00000,0.00,0.00,0.00,0.00000,0.00,0.00,0.00,24.00000,24.00000,'5','1','1','870','977','2022-10-24 19:12:21'),(2,2,3,0,'P001','ALAMBRES Y CABLES ELECTRICOS',263,'BLS',300,'MIGUELEZ','3',12.00000,12.00000,0.00,0.00,0.00,0.00000,0.00,0.00,0.00,36.00000,36.00000,'6','1','1','870','977','2022-10-24 19:12:50'),(3,3,3,0,'P001','ALAMBRES Y CABLES ELECTRICOS',263,'BLS',300,'MIGUELEZ','2',12.00000,12.00000,0.00,0.00,0.00,0.00000,0.00,0.00,0.00,24.00000,24.00000,'4','1','1','870','977','2022-10-25 11:00:23');

UNLOCK TABLES;

/*Table structure for table `detalle_multitablas` */

DROP TABLE IF EXISTS `detalle_multitablas`;

CREATE TABLE `detalle_multitablas` (
  `id_dmultitabla` int(10) NOT NULL AUTO_INCREMENT,
  `id_multitabla` int(10) DEFAULT NULL,
  `abreviatura` varchar(200) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `correlativo` varchar(200) DEFAULT NULL,
  `serie` varchar(50) DEFAULT NULL,
  `ruc` varchar(50) DEFAULT NULL,
  `id_estado_dmultitabla` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_dmultitabla`),
  KEY `id_multitabla` (`id_multitabla`),
  CONSTRAINT `detalle_multitablas_ibfk_1` FOREIGN KEY (`id_multitabla`) REFERENCES `multitablas` (`id_multitabla`)
) ENGINE=InnoDB AUTO_INCREMENT=978 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detalle_multitablas` */

LOCK TABLES `detalle_multitablas` WRITE;

insert  into `detalle_multitablas`(`id_dmultitabla`,`id_multitabla`,`abreviatura`,`descripcion`,`correlativo`,`serie`,`ruc`,`id_estado_dmultitabla`) values (1,8,'S/','SOLES',NULL,NULL,NULL,'1'),(2,8,'$','DOLARES',NULL,NULL,NULL,'1'),(3,50,'GV','GRUPO VAME S.A.C.',NULL,NULL,'100','1'),(4,50,'IA','INVERSIONES ALPEV S.A.C.',NULL,NULL,'200','0'),(5,10,'FACT.CONTA','FACT.CONTADO',NULL,NULL,NULL,'1'),(6,10,'FACT.7 DIA','FACT.7 DIAS',NULL,NULL,NULL,'1'),(7,10,'FACT.15 DI','FACT.15 DIAS',NULL,NULL,NULL,'1'),(8,10,'FACT.30 DI','FACT.30 DIAS',NULL,NULL,NULL,'1'),(9,10,'FACT.45 DI','FACT.45 DIAS',NULL,NULL,NULL,'1'),(10,10,'FACT.60 DI','FACT.60 DIAS',NULL,NULL,NULL,'1'),(11,10,'CHEQUE','CHEQUE',NULL,NULL,NULL,'1'),(12,10,'CH.DIF 7 D','CH.DIF 7 DIAS',NULL,NULL,NULL,'1'),(13,10,'CH.DIF 15 ','CH.DIF 15 DIAS',NULL,NULL,NULL,'1'),(14,10,'CH.DIF 20 ','CH.DIF 20 DIAS',NULL,NULL,NULL,'1'),(15,10,'CH.DIF 30 ','CH.DIF 30 DIAS',NULL,NULL,NULL,'1'),(16,10,'50% CONT /','50% CONT / DIF 15 DIAS',NULL,NULL,NULL,'1'),(17,10,'LETRA 30 D','LETRA 30 DIAS',NULL,NULL,NULL,'1'),(18,10,'LETRA 60 D','LETRA 60 DIAS',NULL,NULL,NULL,'1'),(19,10,'LETRA 60/7','LETRA 60/75 DIAS',NULL,NULL,NULL,'1'),(20,10,'LETRA 45 D','LETRA 45 DIAS',NULL,NULL,NULL,'1'),(21,10,'LETRA 50 D','LETRA 50 DIAS',NULL,NULL,NULL,'1'),(22,10,'LETRA 55 D','LETRA 55 DIAS',NULL,NULL,NULL,'1'),(23,10,'LETRA 75 D','LETRA 75 DIAS',NULL,NULL,NULL,'1'),(24,10,'LETRA 90 D','LETRA 90 DIAS',NULL,NULL,NULL,'1'),(25,10,'DEPOSITO E','DEPOSITO EN CUENTA CORRIENTE',NULL,NULL,NULL,'1'),(26,10,'COLLECT','COLLECT',NULL,NULL,NULL,'1'),(27,10,'EFECTIVO','EFECTIVO',NULL,NULL,NULL,'1'),(28,10,'VISA','VISA',NULL,NULL,NULL,'1'),(29,10,'MASTERCARD','MASTERCARD',NULL,NULL,NULL,'1'),(30,10,'CREDITO','CREDITO',NULL,NULL,NULL,'1'),(31,10,'POR DEFINI','POR DEFINIR',NULL,NULL,NULL,'1'),(32,10,'EFECTIVO Y','EFECTIVO Y TARJETA',NULL,NULL,NULL,'1'),(33,10,'CONSIGNACI','CONSIGNACION',NULL,NULL,NULL,'1'),(34,10,'TRANSFEREN','TRANSFERENCIA GRATUITA',NULL,NULL,NULL,'1'),(35,10,'CH.DIF 45 ','CH.DIF 45 DIAS',NULL,NULL,NULL,'1'),(36,10,'FACT. 75 D','FACT. 75 DIAS',NULL,NULL,NULL,'1'),(37,10,'CH.DIF 60 ','CH.DIF 60 DIAS',NULL,NULL,NULL,'1'),(38,10,'50% ADELAN','50% ADELANTO - 50 % CONTRAENTREGA',NULL,NULL,NULL,'1'),(39,10,'LETRA 30/4','LETRA 30/45 DIAS',NULL,NULL,NULL,'1'),(40,10,'FACTURA NE','FACTURA NEGOCIABLE 30 DIAS',NULL,NULL,NULL,'1'),(41,10,'FACTURA NE','FACTURA NEGOCIABLE 45 DIAS',NULL,NULL,NULL,'1'),(42,10,'30%ADELANT','30%ADELANTO / DIF FACTURA 30 DIAS',NULL,NULL,NULL,'1'),(43,10,'LETRA 75 D','LETRA 75 DIAS',NULL,NULL,NULL,'1'),(44,10,'CH/DIF 75 ','CH/DIF 75 DIAS',NULL,NULL,NULL,'1'),(45,10,'CH/DIF 75-','CH/DIF 75-90 DIAS',NULL,NULL,NULL,'1'),(46,10,'CH/DIF 90 ','CH/DIF 90 DIAS',NULL,NULL,NULL,'1'),(47,10,'FACT.NEG 6','FACT.NEG 60 DIAS',NULL,NULL,NULL,'1'),(48,10,'50% ADELAN','50% ADELANTO/DIF - FACTURA 90 DIAS ',NULL,NULL,NULL,'1'),(49,10,'ADELANTO 4','ADELANTO 40%/SALDO-FACT 90 DIAS',NULL,NULL,NULL,'1'),(50,10,'FACT.NEG 5','FACT.NEG 50/60 DIAS',NULL,NULL,NULL,'1'),(51,10,'FACT.50 DI','FACT.50 DIAS',NULL,NULL,NULL,'1'),(52,10,'FACT.75 DI','FACT.75 DIAS',NULL,NULL,NULL,'1'),(53,10,'FACT.80 DI','FACT.80 DIAS',NULL,NULL,NULL,'1'),(54,10,'FACT.90 DI','FACT.90 DIAS',NULL,NULL,NULL,'1'),(55,10,'PAGO QR','PAGO QR',NULL,NULL,NULL,'1'),(56,10,'EFECTIVO D','EFECTIVO DOLARES',NULL,NULL,NULL,'1'),(57,10,'PAGO EFECT','PAGO EFECTIVO',NULL,NULL,NULL,'1'),(58,6,'BCP','BCP',NULL,NULL,NULL,'1'),(59,6,'BBVA','BBVA',NULL,NULL,NULL,'1'),(60,6,'INTERBANK','INTERBANK',NULL,NULL,NULL,'1'),(61,6,'SCOTIABANK','SCOTIABANK',NULL,NULL,NULL,'1'),(62,6,'MIBANCO','MIBANCO',NULL,NULL,NULL,'1'),(63,6,'PICHINCHA','PICHINCHA',NULL,NULL,NULL,'1'),(64,6,'BANBIF','BANBIF',NULL,NULL,NULL,'1'),(65,6,'BANCO GNB','BANCO GNB',NULL,NULL,NULL,'1'),(66,7,'ALTA','ALTA',NULL,NULL,NULL,'1'),(67,7,'MEDIA','MEDIA',NULL,NULL,NULL,'1'),(68,7,'BAJA','BAJA',NULL,NULL,NULL,'1'),(69,1,'FAC','FACTURA',NULL,'F001',NULL,'1'),(70,1,'BOL','BOLETA',NULL,'B001',NULL,'1'),(77,1,'NC','NOTA DE CREDITO',NULL,'NC001',NULL,'1'),(78,1,'ND','NOTA DE DEBITO',NULL,'ND001',NULL,'1'),(92,3,'701111','701111 - TERCEROS - MERCADERIA',NULL,NULL,NULL,'1'),(93,3,'701121','701121 - RELACIONADAS - MERCADERIA',NULL,NULL,NULL,'1'),(94,3,'702111','702111 - PRODUCTOS TERMINADOS - VENTA DE EXPORTACIÓN - TERCEROS',NULL,NULL,NULL,'1'),(95,3,'702211','702211 - PRODUCTOS TERMINADOS - VENTA DE EXPORTACIÓN - TERCEROS',NULL,NULL,NULL,'1'),(96,3,'702221','702221 - SERVICIOS TERMINADOS - EXPORTACIÓN - TERCEROS',NULL,NULL,NULL,'1'),(97,3,'703121','703121 - SERVICIOS TERMINADOS - EXPORTACIÓN - RELACIONADAS',NULL,NULL,NULL,'1'),(98,3,'703211','703211 - SERVICIOS TERMINADOS - LOCAL - TERCEROS',NULL,NULL,NULL,'1'),(99,3,'703221','703221 - SERVICIOS TERMINADOS - LOCAL - RELACIONADAS',NULL,NULL,NULL,'1'),(100,3,'731101','731101 - DESCUENTOS , REBAJAS Y BONIFICACIONES OBTENIDOS - TERCEROS',NULL,NULL,NULL,'1'),(101,3,'731201','731201 - DESCUENTOS , REBAJAS Y BONIFICACIONES OBTENIDOS - RELACIONADAS',NULL,NULL,NULL,'1'),(102,3,'754101','754101 - ALQUILER DE TERRENOS',NULL,NULL,NULL,'1'),(103,3,'754301','754301 - ALQUILER DE MAQUINARIA Y EQUIPO DE EXPLOTACIÓN',NULL,NULL,NULL,'1'),(104,3,'754401','754401 - ALQUILER DE EQUIPO DE TRANSPORTE',NULL,NULL,NULL,'1'),(105,3,'754501','754501 - ALQUILER DE EQUIPO DIVERSOS',NULL,NULL,NULL,'1'),(106,3,'759911','759911 - RECUPERACIÓN DE GASTOS POR CHEQUES DEVUELTOS',NULL,NULL,NULL,'1'),(107,3,'759912','759912 - RECUPERACIÓN DE GASTOS POR LETRA PROTESTADAS',NULL,NULL,NULL,'1'),(108,3,'772101','772101 - INTERES BANCARIOS GANADOS',NULL,NULL,NULL,'1'),(109,3,'775101','775101 - DESCUENTOS OBTENIDOS POR PRONTO PAGO',NULL,NULL,NULL,'1'),(110,3,'776101','776101 - GANANCIA POR DIFERENCIA EN CAMBIO',NULL,NULL,NULL,'1'),(111,3,'777311','777311 - GANANCIA POR REDONDEO',NULL,NULL,NULL,'1'),(112,3,'777312','777312 - REEMBOLSO DE CARTA FIANZA',NULL,NULL,NULL,'1'),(113,3,'777313','777313 - RECUPERACIÓN DE ITF',NULL,NULL,NULL,'1'),(114,3,'791101','791101 - CARGAS IMPUTABLES A CUENTAS DE COSTOS Y GASTOS',NULL,NULL,NULL,'1'),(115,3,'792011','792011 - GASTOS FINANCIEROS IMPUTABLES A CUENTA DE INVENTARIOS',NULL,NULL,NULL,'1'),(119,2,'SERVICIO D','SERVICIO DE TRANSPORTE',NULL,NULL,NULL,'1'),(120,2,'SERVICIO D','SERVICIO DE MONTA CARGA',NULL,NULL,NULL,'1'),(121,2,'SERVICIO D','SERVICIO DE GASOLINA',NULL,NULL,NULL,'1'),(122,2,'PASAJES','PASAJES',NULL,NULL,NULL,'1'),(123,2,'GASTOS ADM','GASTOS ADMINISTRATIVOS',NULL,NULL,NULL,'1'),(124,2,'GASTOS REP','GASTOS REPRESENTATIVO',NULL,NULL,NULL,'1'),(125,2,'GASTOS DE ','GASTOS DE GERENCIA',NULL,NULL,NULL,'1'),(126,2,'ACCESORIOS','ACCESORIOS DE LIMPIEZA',NULL,NULL,NULL,'1'),(127,2,'ACCESORIOS','ACCESORIOS DE DESINFECCIÓN',NULL,NULL,NULL,'1'),(128,2,'ACCESORIOS','ACCESORIOS DE OFICINA',NULL,NULL,NULL,'1'),(129,2,'DECORACIÓN','DECORACIÓN',NULL,NULL,NULL,'1'),(130,2,'CUMPLEAÑOS','CUMPLEAÑOS',NULL,NULL,NULL,'1'),(131,2,'COMIDAS FE','COMIDAS FESTIVAS',NULL,NULL,NULL,'1'),(132,2,'MEDICAMENT','MEDICAMENTOS',NULL,NULL,NULL,'1'),(133,2,'ACCESORIOS','ACCESORIOS DE REPUESTOS',NULL,NULL,NULL,'1'),(134,2,'SERVICIO D','SERVICIO DE RECIBOS LUZ',NULL,NULL,NULL,'1'),(135,2,'SERVICIO D','SERVICIO DE RECIBOS AGUA',NULL,NULL,NULL,'1'),(136,2,'SERVICIO D','SERVICIO DE RECIBOS CELULARES',NULL,NULL,NULL,'1'),(137,2,'SERVICIO D','SERVICIO DE RECIBOS HOSTING',NULL,NULL,NULL,'1'),(138,2,'SERVICIO T','SERVICIO TECNICO',NULL,NULL,NULL,'1'),(139,20,'PRINCIPAL','TIENDA PROCERES',NULL,'T001',NULL,'1'),(140,20,'TIENDA','TIENDA BELLOTA',NULL,'T002',NULL,'0'),(141,20,'TIENDA','TIENDA NICOLINI',NULL,'T003',NULL,'0'),(147,4,'CARGO DE C','CARGO DE CUENTA CORRIENTE',NULL,NULL,NULL,'1'),(148,4,'DEPOSITO','DEPOSITO',NULL,NULL,NULL,'1'),(149,4,'TRANSFEREN','TRANSFERENCIA',NULL,NULL,NULL,'1'),(150,4,'INTERBANCA','INTERBANCARIA',NULL,NULL,NULL,'1'),(151,4,'CHEQUE','CHEQUE',NULL,NULL,NULL,'1'),(152,4,'EFECTIVO','EFECTIVO',NULL,NULL,NULL,'1'),(153,4,'LETRAS','LETRAS',NULL,NULL,NULL,'1'),(154,4,'RETIRO EN ','RETIRO EN EFECTIVO',NULL,NULL,NULL,'1'),(155,4,'CANJE DE L','CANJE DE LETRAS',NULL,NULL,NULL,'1'),(157,4,'FACTURA','FACTURA',NULL,NULL,NULL,'1'),(158,4,'QR','QR',NULL,NULL,NULL,'1'),(159,4,'PLIM','PLIM',NULL,NULL,NULL,'1'),(160,4,'YAPE','YAPE',NULL,NULL,NULL,'1'),(161,4,'ABONO EN B','ABONO EN BANCO',NULL,NULL,NULL,'1'),(162,4,'COLLECT','COLLECT',NULL,NULL,NULL,'1'),(163,4,'VISA','VISA',NULL,NULL,NULL,'1'),(164,4,'MASTERCARD','MASTERCARD',NULL,NULL,NULL,'1'),(165,4,'CREDITO','CREDITO',NULL,NULL,NULL,'1'),(166,4,'CONSIGNACI','CONSIGNACIÓN',NULL,NULL,NULL,'1'),(167,4,'EFECTIVO Y','EFECTIVO Y TARJETA',NULL,NULL,NULL,'1'),(168,5,'PAGO A PRO','PAGO A PROVEEDORES',NULL,NULL,NULL,'1'),(169,5,'PAGO A CLI','PAGO A CLIENTES',NULL,NULL,NULL,'1'),(170,5,'COBRANZA A','COBRANZA A CLIENTES',NULL,NULL,NULL,'1'),(171,5,'COBRANZA A','COBRANZA A PROVEEDORES',NULL,NULL,NULL,'1'),(172,5,'CLIENTES','CLIENTES',NULL,NULL,NULL,'1'),(173,5,'PAGO EXPOR','PAGO EXPORTACIÓN',NULL,NULL,NULL,'1'),(174,5,'PAGO NACIO','PAGO NACIONAL',NULL,NULL,NULL,'1'),(175,5,'PAGO DE ME','PAGO DE MERCADERIAS',NULL,NULL,NULL,'1'),(176,5,'PAGO DE CO','PAGO DE CONECTIVIDAD',NULL,NULL,NULL,'1'),(177,5,'PAGO A BAN','PAGO A BANCOS',NULL,NULL,NULL,'1'),(178,5,'PAGOS ADMI','PAGOS ADMINISTRATIVOS',NULL,NULL,NULL,'1'),(179,5,'PAGOS DE G','PAGOS DE GERENCIA',NULL,NULL,NULL,'1'),(180,5,'PAGOS DE T','PAGOS DE TIENDAS',NULL,NULL,NULL,'1'),(181,5,'PAGOS DE L','PAGOS DE LOCAL',NULL,NULL,NULL,'1'),(182,5,'PAGOS DE T','PAGOS DE TRANSPORTE',NULL,NULL,NULL,'1'),(183,5,'PAGO DE CA','PAGO DE CARROS',NULL,NULL,NULL,'1'),(184,5,'COBRANZA D','COBRANZA DE CHEQUES',NULL,NULL,NULL,'1'),(185,5,'COBRANZA','COBRANZA DE LETRAS',NULL,NULL,NULL,'1'),(186,5,'COBRANZA','COBRANZA DE FACTURAS',NULL,NULL,NULL,'1'),(187,5,'COBRANZA','COBRANZA DE CANJE DE LETRAS',NULL,NULL,NULL,'1'),(188,5,'PAGOS CON ','PAGOS CON CHEQUES',NULL,NULL,NULL,'1'),(189,5,'PAGOS CON ','PAGOS CON LETRAS',NULL,NULL,NULL,'1'),(190,5,'PAGOS CON ','PAGOS CON CANJE DE LETRAS',NULL,NULL,NULL,'1'),(191,5,'PAGOS CON ','PAGOS CON CHEQUES',NULL,NULL,NULL,'1'),(192,5,'PAGOS CON ','PAGOS CON LETRAS',NULL,NULL,NULL,'1'),(193,5,'PAGOS CON ','PAGOS CON CANJE DE LETRAS',NULL,NULL,NULL,'1'),(194,29,'MASCULINO','MASCULINO',NULL,NULL,NULL,'1'),(195,29,'FEMENINO','FEMENINO',NULL,NULL,NULL,'1'),(196,51,'60104912','ALAMBRES Y CABLES ELECTRICOS',NULL,NULL,NULL,'1'),(197,51,'25172906','REFLECTORES',NULL,NULL,NULL,'1'),(198,51,'39121701','SOPORTES EL ECTRICOS',NULL,NULL,NULL,'1'),(199,51,'39131704','BANDEJA DE CABLES',NULL,NULL,NULL,'1'),(200,51,'26121630','ACCESORIOS DE CABLE',NULL,NULL,NULL,'1'),(201,51,'39121704','PLACAS DE PARED',NULL,NULL,NULL,'1'),(202,51,'39121311','ACCESORIOS ELECTRICOS',NULL,NULL,NULL,'1'),(203,51,'46181802','ANTEOJOS DE SEGURIDAD',NULL,NULL,NULL,'1'),(204,51,'46181704','CASCOS DE SEGURIDAD',NULL,NULL,NULL,'1'),(205,51,'46182002','RESPIRADORES',NULL,NULL,NULL,'1'),(206,51,'46181702','ESCUDOS FACIALES',NULL,NULL,NULL,'1'),(207,51,'27112903','ROCIADOR MANUAL',NULL,NULL,NULL,'1'),(208,51,'39122245','INTERRUPTOR MAGNETICO',NULL,NULL,NULL,'1'),(209,51,'41111606','TELUROMETROS',NULL,NULL,NULL,'1'),(210,51,'40171517','TUBO PVC PARA USO COMERCIAL',NULL,NULL,NULL,'1'),(211,51,'20101810','CONMUTADORES',NULL,NULL,NULL,'1'),(212,51,'20111714','CONECTOR DE TUBERIA FLEXIBLE',NULL,NULL,NULL,'1'),(213,51,'26121838','CABLE AUTOMOTRIZ TRENZADO DE 60 VOLTIOS CLASE E',NULL,NULL,NULL,'1'),(214,51,'27111729','JUEGO DE LLAVES',NULL,NULL,NULL,'1'),(215,51,'30262401','ALAMBRE DE COBRE',NULL,NULL,NULL,'1'),(216,51,'31161807','ARANDELAS PLANAS',NULL,NULL,NULL,'1'),(217,51,'39101601','LAMPARAS HALOGENAS',NULL,NULL,NULL,'1'),(218,51,'39101605','LAMPARAS FLUORESCENTES',NULL,NULL,NULL,'1'),(219,51,'39101615','LAMPARAS DE VAPOR DE MERCURIO',NULL,NULL,NULL,'1'),(220,51,'39101804','IGNITOR DE LAMPARA DE SODIO DE ALTA PRESION',NULL,NULL,NULL,'1'),(221,51,'39101901','BALASTO FLUORESCENTE',NULL,NULL,NULL,'1'),(222,51,'39101806','CAPACITOR SECO DE LAMPARA DE SODIO DE ALTA PRESION',NULL,NULL,NULL,'1'),(223,51,'39111501','ARTEFACTOS FLUORESCENTES',NULL,NULL,NULL,'1'),(224,51,'39111521','PLAFONES',NULL,NULL,NULL,'1'),(225,51,'39111522','ILUMINACION COLGANTE',NULL,NULL,NULL,'1'),(226,51,'39111709','UNIDAD DE LUZ DE EMERGENCIA',NULL,NULL,NULL,'1'),(227,51,'39111801','BALASTOS DE LAMPARAS',NULL,NULL,NULL,'1'),(228,51,'39111803','ENCHUFES DE LAMPARAS',NULL,NULL,NULL,'1'),(229,51,'39111818','REFLECTOR DE LAMPARA',NULL,NULL,NULL,'1'),(230,51,'39121110','TABLERO DE INTERRUPTOR DE CIRCUITO',NULL,NULL,NULL,'1'),(231,51,'39121305','CAJAS A PRUEBA DE INTEMPERIE',NULL,NULL,NULL,'1'),(232,51,'39121303','CAJAS ELECTRICAS',NULL,NULL,NULL,'1'),(233,51,'39121330','CAJA DE DISTRIBUCION ELECTRICA',NULL,NULL,NULL,'1'),(234,51,'39121402','ENCHUFES ELECTRICOS',NULL,NULL,NULL,'1'),(235,51,'39121405','TERMINALES DE CABLE O ALAMBRE',NULL,NULL,NULL,'1'),(236,51,'39121432','TERMINALES ELECTRICOS',NULL,NULL,NULL,'1'),(237,51,'39121529','CONTACTORES',NULL,NULL,NULL,'1'),(238,51,'39121534','LUCES INDICADORAS O INDICADORES LUMINOSOS',NULL,NULL,NULL,'1'),(239,51,'39121545','PARADAS DE EMERGENCIA',NULL,NULL,NULL,'1'),(240,51,'39121633','INTERRUPTOR DE CIRCUITO',NULL,NULL,NULL,'1'),(241,51,'39121708','RIEL DIN',NULL,NULL,NULL,'1'),(242,51,'39122315','RELE ELECTROMAGNETICO',NULL,NULL,NULL,'1'),(243,51,'39122245','INTERRUPTOR MAGNETICO',NULL,NULL,NULL,'1'),(244,51,'39121321','FERRETERIA Y ACCESORIOS DE CAJA ELECTRICA',NULL,NULL,NULL,'1'),(245,51,'39121434','CONECTORES DE TUBOS METALICOS ELECTRICOS (EMT)',NULL,NULL,NULL,'1'),(246,51,'39121602','BREAKERS DE CIRCUITO MAGNETICO',NULL,NULL,NULL,'1'),(247,51,'39122315','RELE ELECTROMAGNETICO',NULL,NULL,NULL,'1'),(248,51,'39131607','CORDON PARA AMARRAR CABLES',NULL,NULL,NULL,'1'),(249,51,'39131709','CABLEADO ELECTRICO O CONDUCTOS DE CABLES',NULL,NULL,NULL,'1'),(250,51,'39131714','CANALETAS PARA CABLES',NULL,NULL,NULL,'1'),(251,51,'39131719','TUBERIA METALICA ELECTRICA EMT',NULL,NULL,NULL,'1'),(252,51,'39131720','TUBERIA METALICA ELECTRICA EMT ROSCADA',NULL,NULL,NULL,'1'),(253,51,'40172508','CONECTOR DE TUBO DE PLASTICO PVC',NULL,NULL,NULL,'1'),(254,51,'40172808','CODOS PARA TUBOS DE PLASTICO PVC',NULL,NULL,NULL,'1'),(255,51,'40183002','TUBERIA DE PLASTICO PVC',NULL,NULL,NULL,'1'),(256,51,'44111908','TABLEROS MAGNETICOS O ACCESORIOS',NULL,NULL,NULL,'1'),(257,51,'26121606','CABLE COAXIAL',NULL,NULL,NULL,'1'),(258,51,'26121607','CABLE DE FIBRA OPTICA',NULL,NULL,NULL,'1'),(259,51,'26121609','CABLE DE REDES',NULL,NULL,NULL,'1'),(260,51,'26121608','CABLE AEREO',NULL,NULL,NULL,'1'),(261,51,'26121611','CABLE DESNUDO',NULL,NULL,NULL,'1'),(262,12,'S','SET',NULL,NULL,NULL,'1'),(263,12,'BLS','BOLSA',NULL,NULL,NULL,'1'),(264,12,'BOT','BOTELLA',NULL,NULL,NULL,'1'),(265,12,'CIEN','CIENTO',NULL,NULL,NULL,'1'),(266,12,'CJA','CAJA',NULL,NULL,NULL,'1'),(267,12,'DC','DOCENA',NULL,NULL,NULL,'1'),(268,12,'FC','FRASCO',NULL,NULL,NULL,'1'),(269,12,'GL','GALON',NULL,NULL,NULL,'1'),(270,12,'GM','GRAMOS',NULL,NULL,NULL,'1'),(271,12,'JGO','JUEGO',NULL,NULL,NULL,'1'),(272,12,'KIL','KILOGRAMOS',NULL,NULL,NULL,'1'),(273,12,'KIT','KIT',NULL,NULL,NULL,'1'),(274,12,'LTA','LATA',NULL,NULL,NULL,'1'),(275,12,'LB','LIBRAS',NULL,NULL,NULL,'1'),(276,12,'LT','LITRO',NULL,NULL,NULL,'1'),(277,12,'MC','METROS CUADRADOS',NULL,NULL,NULL,'1'),(278,12,'MCU','METROS CUBICOSCUADRADOS',NULL,NULL,NULL,'1'),(279,12,'MLL','MILLAR',NULL,NULL,NULL,'1'),(280,12,'M','METROS',NULL,NULL,NULL,'1'),(281,12,'OBRA','OBRA',NULL,NULL,NULL,'1'),(282,12,'PAÑO','PAÑO',NULL,NULL,NULL,'1'),(283,12,'PAR','PAR',NULL,NULL,NULL,'1'),(284,12,'PAQ','PAQUETE',NULL,NULL,NULL,'1'),(285,12,'PUN','PUNTO',NULL,NULL,NULL,'1'),(286,12,'PZA','PIEZA',NULL,NULL,NULL,'1'),(287,12,'RLL','ROLLO',NULL,NULL,NULL,'1'),(288,12,'SOBRE','SOBRE',NULL,NULL,NULL,'1'),(289,12,'TON M ','TONELADAS MÉTRICAS',NULL,NULL,NULL,'1'),(290,12,'TERMA','TERMA',NULL,NULL,NULL,'1'),(291,12,'U','UNIDAD',NULL,NULL,NULL,'1'),(292,12,'SERV','SERVICIO',NULL,NULL,NULL,'1'),(293,12,'HRS.H','HORAS HOMBRE',NULL,NULL,NULL,'1'),(294,4,'LC','LETRAS/CHEQUES',NULL,NULL,NULL,'1'),(295,4,'CC','CANJE DE CHEQUES',NULL,NULL,NULL,'1'),(296,4,'FAC','FACTURAS',NULL,NULL,NULL,'1'),(297,4,'ABN','ABONOS',NULL,NULL,NULL,'1'),(298,15,'1','INDECO',NULL,NULL,NULL,'1'),(299,15,'2','CENTELSA',NULL,NULL,NULL,'1'),(300,15,'3','MIGUELEZ',NULL,NULL,NULL,'1'),(301,15,'4','CELSA',NULL,NULL,NULL,'1'),(302,15,'5','BRANDE',NULL,NULL,NULL,'1'),(303,15,'6','BASOR',NULL,NULL,NULL,'1'),(304,15,'7','LEGRAND',NULL,NULL,NULL,'1'),(305,15,'8','BTICINO',NULL,NULL,NULL,'1'),(306,15,'9','STECK',NULL,NULL,NULL,'1'),(307,15,'10','LEDVANCE',NULL,NULL,NULL,'1'),(308,15,'11','ABB',NULL,NULL,NULL,'1'),(309,15,'12','SCHNEIDER ELECTRIC',NULL,NULL,NULL,'1'),(310,15,'13','OPALUX',NULL,NULL,NULL,'1'),(311,15,'14','MENNEKES',NULL,NULL,NULL,'1'),(312,15,'15','PANDUIT',NULL,NULL,NULL,'1'),(313,15,'16','LEVITON',NULL,NULL,NULL,'1'),(314,15,'17','PHILIPS',NULL,NULL,NULL,'1'),(315,15,'18','IMPORTADO',NULL,NULL,NULL,'1'),(316,15,'19','DIXON',NULL,NULL,NULL,'1'),(317,15,'20','GENERAL ELECTRIC',NULL,NULL,NULL,'1'),(318,15,'21','NACIONAL',NULL,NULL,NULL,'1'),(319,15,'22','VAME',NULL,NULL,NULL,'1'),(320,15,'23','PAVCO',NULL,NULL,NULL,'1'),(321,15,'24','SONEL',NULL,NULL,NULL,'1'),(322,15,'25','JOSFEL',NULL,NULL,NULL,'1'),(323,15,'26','BOSCH',NULL,NULL,NULL,'1'),(324,15,'27','DEWALT',NULL,NULL,NULL,'1'),(325,15,'28','BURNDY',NULL,NULL,NULL,'1'),(326,15,'29','CADWELD',NULL,NULL,NULL,'1'),(327,15,'30','3M',NULL,NULL,NULL,'1'),(328,15,'31','THERMOWELD',NULL,NULL,NULL,'1'),(329,15,'32','KELLER',NULL,NULL,NULL,'1'),(330,15,'33','RAYCHEM',NULL,NULL,NULL,'1'),(331,15,'34','SOFAMEL',NULL,NULL,NULL,'1'),(332,15,'35','THORGEL',NULL,NULL,NULL,'1'),(333,15,'36','TKD',NULL,NULL,NULL,'1'),(334,15,'37','FINDER',NULL,NULL,NULL,'1'),(335,15,'38','STRONGER',NULL,NULL,NULL,'1'),(336,15,'39','INTELLI',NULL,NULL,NULL,'1'),(337,15,'40','MECH',NULL,NULL,NULL,'1'),(338,15,'41','HAYDON',NULL,NULL,NULL,'1'),(339,15,'42','METAL CORAZA',NULL,NULL,NULL,'1'),(340,15,'43','JJ',NULL,NULL,NULL,'1'),(341,15,'44','CROUSE HINDS',NULL,NULL,NULL,'1'),(342,15,'45','BELDEN',NULL,NULL,NULL,'1'),(343,15,'46','ELCOPE',NULL,NULL,NULL,'1'),(344,15,'47','B-LINE',NULL,NULL,NULL,'1'),(345,15,'48','KAIFLEX',NULL,NULL,NULL,'1'),(346,15,'49','SOLERA',NULL,NULL,NULL,'1'),(347,15,'50','ONKA',NULL,NULL,NULL,'1'),(348,15,'51','OCAL',NULL,NULL,NULL,'1'),(349,15,'52','GENERAL CABLE',NULL,NULL,NULL,'1'),(350,15,'53','SIEMENS',NULL,NULL,NULL,'1'),(351,15,'54','HONT',NULL,NULL,NULL,'1'),(352,15,'55','PROSTAR',NULL,NULL,NULL,'1'),(353,15,'56','MARLEW',NULL,NULL,NULL,'1'),(354,15,'57','RITTAL',NULL,NULL,NULL,'1'),(355,15,'58','EATON',NULL,NULL,NULL,'1'),(356,15,'59','CORAFLEX',NULL,NULL,NULL,'1'),(357,15,'60','GRAESSLIN',NULL,NULL,NULL,'1'),(358,15,'61','SIEMON',NULL,NULL,NULL,'1'),(359,15,'62','TELE-FONIKA',NULL,NULL,NULL,'1'),(360,15,'63','ALLIED',NULL,NULL,NULL,'1'),(361,15,'64','SOLDEXEL',NULL,NULL,NULL,'1'),(362,15,'65','SCI',NULL,NULL,NULL,'1'),(363,15,'66','PRODUIT',NULL,NULL,NULL,'1'),(364,15,'67','ORBIT',NULL,NULL,NULL,'1'),(365,15,'68','KILLARK',NULL,NULL,NULL,'1'),(366,15,'69','MATUSITA',NULL,NULL,NULL,'1'),(367,15,'70','THOMAS & BETTS',NULL,NULL,NULL,'1'),(368,15,'71','PRIORITY W',NULL,NULL,NULL,'1'),(369,15,'72','KBA',NULL,NULL,NULL,'1'),(370,15,'73','ERICO',NULL,NULL,NULL,'1'),(371,15,'74','COPPERSTEEL',NULL,NULL,NULL,'1'),(372,15,'75','BUSSMAN',NULL,NULL,NULL,'1'),(373,15,'76','PROCOAT',NULL,NULL,NULL,'1'),(374,15,'77','AFC',NULL,NULL,NULL,'1'),(375,15,'78','TPMC - NHT',NULL,NULL,NULL,'1'),(376,15,'79','TECFUSE',NULL,NULL,NULL,'1'),(377,15,'80','WEIFANG',NULL,NULL,NULL,'1'),(378,15,'81','THOR CEM',NULL,NULL,NULL,'1'),(379,15,'82','TELERGON',NULL,NULL,NULL,'1'),(380,15,'83','DSE INC',NULL,NULL,NULL,'1'),(381,15,'84','DNS KOREA',NULL,NULL,NULL,'1'),(382,15,'85','AB-KRAFT',NULL,NULL,NULL,'1'),(383,15,'86','JORMEN',NULL,NULL,NULL,'1'),(384,15,'87','SANDFLEX',NULL,NULL,NULL,'1'),(385,15,'88','FLUKE',NULL,NULL,NULL,'1'),(386,15,'89','EFAPEL',NULL,NULL,NULL,'1'),(387,15,'90','INDEL',NULL,NULL,NULL,'1'),(388,15,'91','TMT',NULL,NULL,NULL,'1'),(389,15,'92','PHOENIX CONTACT',NULL,NULL,NULL,'1'),(390,15,'93','SATRA',NULL,NULL,NULL,'1'),(391,15,'94','SYLVANIA',NULL,NULL,NULL,'1'),(392,15,'95','ORTAC ELEKTRIC',NULL,NULL,NULL,'1'),(393,15,'96','CEPER',NULL,NULL,NULL,'1'),(394,15,'97','CIRMAKER',NULL,NULL,NULL,'1'),(395,15,'98','GREENLEE',NULL,NULL,NULL,'1'),(396,15,'99','KNIPEX',NULL,NULL,NULL,'1'),(397,15,'100','KEC',NULL,NULL,NULL,'1'),(398,15,'101','HILTI',NULL,NULL,NULL,'1'),(399,15,'102','LS',NULL,NULL,NULL,'1'),(400,15,'103','HAUFE',NULL,NULL,NULL,'1'),(401,15,'104','OSRAM',NULL,NULL,NULL,'1'),(402,15,'105','KHOMAX',NULL,NULL,NULL,'1'),(403,15,'106','GOLED',NULL,NULL,NULL,'1'),(404,15,'107','CRC',NULL,NULL,NULL,'1'),(405,15,'108','NETKEY',NULL,NULL,NULL,'1'),(406,15,'109','CATU',NULL,NULL,NULL,'1'),(407,15,'110','TALMA',NULL,NULL,NULL,'1'),(408,15,'111','LIGHTECH',NULL,NULL,NULL,'1'),(409,15,'112','HELLA',NULL,NULL,NULL,'1'),(410,15,'113','FERRAZ',NULL,NULL,NULL,'1'),(411,15,'114','BASLIGTH',NULL,NULL,NULL,'1'),(412,15,'115','TERRAWELD',NULL,NULL,NULL,'1'),(413,15,'116','PRIME CONDUIT',NULL,NULL,NULL,'1'),(414,15,'117','CARLON',NULL,NULL,NULL,'1'),(415,15,'118','RAMCRO',NULL,NULL,NULL,'1'),(416,15,'119','UNITED INSULATION',NULL,NULL,NULL,'1'),(417,15,'120','GASPY',NULL,NULL,NULL,'1'),(418,15,'121','STANLEY',NULL,NULL,NULL,'1'),(419,15,'122','DURACELL',NULL,NULL,NULL,'1'),(420,15,'123','ECCO',NULL,NULL,NULL,'1'),(421,15,'124','TIERRAGEL',NULL,NULL,NULL,'1'),(422,15,'125','CIRCULAR',NULL,NULL,NULL,'1'),(423,15,'126','POWER SUPPLY',NULL,NULL,NULL,'1'),(424,15,'127','E-BASLIGHT/PHILIPS',NULL,NULL,NULL,'1'),(425,15,'128','THORCEM',NULL,NULL,NULL,'1'),(426,15,'129','BEISIT',NULL,NULL,NULL,'1'),(427,15,'130','BUSSMANN',NULL,NULL,NULL,'1'),(428,15,'131','FLEXIKABEL',NULL,NULL,NULL,'1'),(429,15,'132','EATON - CROUSE HINDS',NULL,NULL,NULL,'1'),(430,15,'133','NAVIABOX',NULL,NULL,NULL,'1'),(431,15,'134','WOER',NULL,NULL,NULL,'1'),(432,15,'135','AUTONICS',NULL,NULL,NULL,'1'),(433,15,'136','IONIFLASH',NULL,NULL,NULL,'1'),(434,15,'137','CINTA',NULL,NULL,NULL,'1'),(435,15,'138','DARLUX',NULL,NULL,NULL,'1'),(436,15,'139','POWERTRONIC',NULL,NULL,NULL,'1'),(437,15,'140','ORBIS',NULL,NULL,NULL,'1'),(438,15,'142','CIRCUTOR',NULL,NULL,NULL,'1'),(439,15,'143','AMPROBE',NULL,NULL,NULL,'1'),(440,15,'144','PARA-RAYOS',NULL,NULL,NULL,'1'),(441,15,'145','NAVIA',NULL,NULL,NULL,'1'),(442,15,'146','ALEX',NULL,NULL,NULL,'1'),(443,15,'147','TIBOX',NULL,NULL,NULL,'1'),(444,15,'148','OCAL BLUE',NULL,NULL,NULL,'1'),(445,15,'149','I-VICSIL',NULL,NULL,NULL,'1'),(446,15,'150','I-PST',NULL,NULL,NULL,'1'),(447,15,'151','DEXSON',NULL,NULL,NULL,'1'),(448,15,'152','MUTSULAN',NULL,NULL,NULL,'1'),(449,15,'153','AMP-COMMSCOPE',NULL,NULL,NULL,'1'),(450,15,'154','INTERPLAST',NULL,NULL,NULL,'1'),(451,15,'155','OATEY',NULL,NULL,NULL,'1'),(452,15,'156','OZ/GEDNEY',NULL,NULL,NULL,'1'),(453,52,'1','VAME',NULL,NULL,NULL,'1'),(454,52,'2','NACIONAL',NULL,NULL,NULL,'1'),(455,15,'141','UNISTRUT',NULL,NULL,NULL,'1'),(456,15,'157','THOMPSOM',NULL,NULL,NULL,'1'),(457,15,'158','CMP',NULL,NULL,NULL,'1'),(458,15,'159','MANELSA',NULL,NULL,NULL,'1'),(459,15,'160','ALLEN BRADLEY',NULL,NULL,NULL,'1'),(460,15,'161','SOUTHWIRE',NULL,NULL,NULL,'1'),(461,15,'162','INDECO SA',NULL,NULL,NULL,'1'),(462,15,'163','EXTECH',NULL,NULL,NULL,'1'),(463,15,'164','CANTEX',NULL,NULL,NULL,'1'),(464,15,'165','CROUSE HINDS UL',NULL,NULL,NULL,'1'),(465,15,'166','ECOGEL',NULL,NULL,NULL,'1'),(466,15,'167','TH',NULL,NULL,NULL,'1'),(467,15,'168','SCAME',NULL,NULL,NULL,'1'),(468,15,'169','LOCTITE',NULL,NULL,NULL,'1'),(469,15,'170','HP&T ELECTRIC (PERU)',NULL,NULL,NULL,'1'),(470,15,'171','WHEATLAND',NULL,NULL,NULL,'1'),(471,15,'172','DUPRO',NULL,NULL,NULL,'1'),(472,15,'173','UNIVER',NULL,NULL,NULL,'1'),(473,15,'174','NAVIA CONDUIT',NULL,NULL,NULL,'1'),(474,15,'175','JASON',NULL,NULL,NULL,'1'),(475,15,'176','SCHNEIDER',NULL,NULL,NULL,'1'),(476,15,'177','POWER CONECTOR',NULL,NULL,NULL,'1'),(477,15,'178','SIAM',NULL,NULL,NULL,'1'),(478,15,'179','I-GALVANIC',NULL,NULL,NULL,'1'),(479,15,'180','I-STRUT',NULL,NULL,NULL,'1'),(480,15,'181','APPLETON',NULL,NULL,NULL,'1'),(481,15,'182','NJZ LIGHTING',NULL,NULL,NULL,'1'),(482,15,'183','IPEX KRALOY',NULL,NULL,NULL,'1'),(483,15,'184','TUBOPLAST',NULL,NULL,NULL,'1'),(484,15,'185','TKL',NULL,NULL,NULL,'1'),(485,15,'186','HARVEL',NULL,NULL,NULL,'1'),(486,15,'187','KIMPLAST',NULL,NULL,NULL,'1'),(487,15,'188','M.E',NULL,NULL,NULL,'1'),(488,15,'189','BEGHELLI',NULL,NULL,NULL,'1'),(489,15,'190','REJYRA',NULL,NULL,NULL,'1'),(490,15,'191','REDUCRETE',NULL,NULL,NULL,'1'),(491,15,'192','JOHNSON',NULL,NULL,NULL,'1'),(492,15,'193','HAGER',NULL,NULL,NULL,'1'),(493,15,'194','TRAMONTINA',NULL,NULL,NULL,'1'),(494,15,'195','COPLEFLEX',NULL,NULL,NULL,'1'),(495,15,'196','TOOLS',NULL,NULL,NULL,'1'),(496,15,'197','CHINT',NULL,NULL,NULL,'1'),(497,15,'198','STARKER',NULL,NULL,NULL,'1'),(498,15,'199','TOP CABLE',NULL,NULL,NULL,'1'),(499,15,'200','COPERCLAD',NULL,NULL,NULL,'1'),(500,15,'201','SHURTAPE',NULL,NULL,NULL,'1'),(501,15,'202','CAMSCO',NULL,NULL,NULL,'1'),(502,15,'203','KSS',NULL,NULL,NULL,'1'),(503,15,'204','CALBOND',NULL,NULL,NULL,'1'),(504,15,'205','EPEM',NULL,NULL,NULL,'1'),(505,15,'206','KRALOY',NULL,NULL,NULL,'1'),(506,15,'207','ISKRA',NULL,NULL,NULL,'1'),(507,15,'208','NEXANS',NULL,NULL,NULL,'1'),(508,15,'209','DANFOSS',NULL,NULL,NULL,'1'),(509,15,'210','COMMSCOPE',NULL,NULL,NULL,'1'),(510,15,'211','AMP',NULL,NULL,NULL,'1'),(511,15,'212','ESPAÑOL',NULL,NULL,NULL,'1'),(512,15,'213','ISOELECTRIC',NULL,NULL,NULL,'1'),(513,15,'214','DATATRONIX',NULL,NULL,NULL,'1'),(514,15,'215','IMP',NULL,NULL,NULL,'1'),(515,15,'216','FERRAZ SHAWMUT',NULL,NULL,NULL,'1'),(516,15,'217','ENERGIZER',NULL,NULL,NULL,'1'),(517,15,'218','WONPRO',NULL,NULL,NULL,'1'),(518,15,'219','EVT',NULL,NULL,NULL,'1'),(519,15,'220','PST',NULL,NULL,NULL,'1'),(520,15,'221','REDITEK',NULL,NULL,NULL,'1'),(521,15,'222','ENTRELEC',NULL,NULL,NULL,'1'),(522,15,'223','SIKA',NULL,NULL,NULL,'1'),(523,15,'224','LOTOMASTER',NULL,NULL,NULL,'1'),(524,15,'225','AFL-HYPERSCALE(USA)',NULL,NULL,NULL,'1'),(525,15,'226','FIEMEC',NULL,NULL,NULL,'1'),(526,15,'227','METEL SA',NULL,NULL,NULL,'1'),(527,15,'228','CERRO MOCHO',NULL,NULL,NULL,'1'),(528,15,'229','CHINO',NULL,NULL,NULL,'1'),(529,15,'230','NARVA',NULL,NULL,NULL,'1'),(530,15,'231','ITALIA',NULL,NULL,NULL,'1'),(531,15,'232','IDSEN',NULL,NULL,NULL,'1'),(532,15,'233','INDUQUIMICA',NULL,NULL,NULL,'1'),(533,15,'234','METEL & A',NULL,NULL,NULL,'1'),(534,15,'235','REMAX',NULL,NULL,NULL,'1'),(535,15,'236','TEKNO',NULL,NULL,NULL,'1'),(536,15,'237','CE ITALY',NULL,NULL,NULL,'1'),(537,15,'238','CPP',NULL,NULL,NULL,'1'),(538,15,'239','TORO',NULL,NULL,NULL,'1'),(539,15,'240','FNX-C',NULL,NULL,NULL,'1'),(540,15,'241','AMERICAN STANDAR',NULL,NULL,NULL,'1'),(541,15,'242','AMERICAN ELECTRIC',NULL,NULL,NULL,'1'),(542,15,'243','CONDUMEX',NULL,NULL,NULL,'1'),(543,15,'244','DF',NULL,NULL,NULL,'1'),(544,15,'245','PEGAFAN',NULL,NULL,NULL,'1'),(545,15,'246','LOGICBOX',NULL,NULL,NULL,'1'),(546,15,'247','BAUTY',NULL,NULL,NULL,'1'),(547,15,'248','AVRIL',NULL,NULL,NULL,'1'),(548,15,'249','SCHMERSAL',NULL,NULL,NULL,'1'),(549,15,'250','IRWIN',NULL,NULL,NULL,'1'),(550,15,'251','PORTUGAL',NULL,NULL,NULL,'1'),(551,15,'252','NICHOLSON',NULL,NULL,NULL,'1'),(552,15,'253','KAMASA',NULL,NULL,NULL,'1'),(553,15,'254','TRUPER',NULL,NULL,NULL,'1'),(554,15,'255','KING TONY',NULL,NULL,NULL,'1'),(555,15,'256','BRADY',NULL,NULL,NULL,'1'),(556,15,'257','NICE',NULL,NULL,NULL,'1'),(557,15,'258','MATUSITA (TIGRE)',NULL,NULL,NULL,'1'),(558,15,'259','NICOL',NULL,NULL,NULL,'1'),(559,15,'260','NOBACK',NULL,NULL,NULL,'1'),(560,15,'261','RUBICON',NULL,NULL,NULL,'1'),(561,15,'262','SALICRU',NULL,NULL,NULL,'1'),(562,15,'263','INVT POWER',NULL,NULL,NULL,'1'),(563,15,'264','WEG',NULL,NULL,NULL,'1'),(564,15,'265','REGELTEX',NULL,NULL,NULL,'1'),(565,15,'266','FAMECA',NULL,NULL,NULL,'1'),(566,15,'267','FAMECA ELECTRONICS',NULL,NULL,NULL,'1'),(567,15,'268','SIBILLE OUTILLAGE',NULL,NULL,NULL,'1'),(568,15,'269','VERA',NULL,NULL,NULL,'1'),(569,15,'270','TANHO',NULL,NULL,NULL,'1'),(570,15,'271','TECNOFIL',NULL,NULL,NULL,'1'),(571,15,'272','ALC',NULL,NULL,NULL,'1'),(572,15,'273','BAHCO',NULL,NULL,NULL,'1'),(573,15,'274','RIELLO',NULL,NULL,NULL,'1'),(574,15,'275','OLAM TRANSFORM',NULL,NULL,NULL,'1'),(575,23,'ADO','ADOSADO',NULL,NULL,NULL,'1'),(576,23,'EMPT','EMPOTRADO',NULL,NULL,NULL,'1'),(577,27,'CAS','CAS',NULL,NULL,NULL,'1'),(578,27,'CAP','CAP',NULL,NULL,NULL,'1'),(594,30,'DNI','DNI',NULL,NULL,NULL,'1'),(595,30,'CARNET','CARNET DE EXTRANJERIA',NULL,NULL,NULL,'1'),(596,30,'PERSONA','PERSONA JURIDICA',NULL,NULL,NULL,'1'),(597,30,'PERSONA','PERSONA NATURAL CON NEGOCIO',NULL,NULL,NULL,'1'),(600,31,'PER','PERUANA',NULL,NULL,NULL,'1'),(601,31,'BRA','BRASIL',NULL,NULL,NULL,'1'),(602,31,'MEX','MEXICO',NULL,NULL,NULL,'1'),(603,31,'VEN','VENEZUELA',NULL,NULL,NULL,'1'),(604,9,'601111','NACIONAL',NULL,NULL,NULL,'1'),(605,9,'601112','EXPORTACIÓN',NULL,NULL,NULL,'1'),(606,28,'VEND','VENDEDOR',NULL,NULL,NULL,'1'),(607,28,'ALM','ALMACEN',NULL,NULL,NULL,'1'),(608,32,'CASADO','CASADO',NULL,NULL,NULL,'1'),(609,32,'SOLTERO','SOLTERO',NULL,NULL,NULL,'1'),(610,33,'SEC','SECUNDARIA',NULL,NULL,NULL,'1'),(611,33,'SUP','SUPERIOR',NULL,NULL,NULL,'1'),(612,34,'LIM','LIMA',NULL,NULL,NULL,'1'),(613,35,'LIM','LIMA',NULL,NULL,NULL,'1'),(614,36,'COMAS','COMAS',NULL,NULL,NULL,'1'),(615,37,'CLI','CLIENTE',NULL,NULL,NULL,'1'),(616,37,'PROVE','PROVEEDOR',NULL,NULL,NULL,'1'),(617,38,'PERS. JURI','PERSONA JURIDICA',NULL,NULL,NULL,'1'),(618,39,'NAC','NACIONAL',NULL,NULL,NULL,'1'),(619,39,'EXT','EXTRANJERO',NULL,NULL,NULL,'1'),(620,40,'DOMIC','DOMICILIADO',NULL,NULL,NULL,'1'),(621,40,'NO-DOMIC','NO-DOMICILIADO',NULL,NULL,NULL,'1'),(622,41,'CLI-RETENC','CLIENTE RETENCIÓN',NULL,NULL,NULL,'1'),(623,41,'AGEN-PERCE','AGENTE PERCEPCION',NULL,NULL,NULL,'1'),(624,41,'BUEN-CONTR','BUEN-CONTRIBUYENTE',NULL,NULL,NULL,'1'),(625,42,'VENT-CABLE','VENTA DE CABLE',NULL,NULL,NULL,'1'),(626,42,'VENT-LUM','VENTA DE LUMINARIA',NULL,NULL,NULL,'1'),(627,43,'SOBREGIRAD','SOBREGIRADO-BLOQUEADO',NULL,NULL,NULL,'1'),(628,43,'LINEA DISP','LINEA DISPONIBLE',NULL,NULL,NULL,'1'),(629,43,'RECHAZADO','RECHAZADO',NULL,NULL,NULL,'1'),(630,16,'201111','201111 - MERCADERIA NACIONAL - COSTO',NULL,NULL,NULL,'1'),(631,16,'201112','201112 - MERCADERIA IMPORTADA - COSTO',NULL,NULL,NULL,'1'),(632,16,'201141','201141 - MERCADERIAS - VALOR RAZONABLE',NULL,NULL,NULL,'1'),(633,16,'211111','211111 - COSTO',NULL,NULL,NULL,'1'),(634,16,'211113','211113 - COSTO DE FINALIZACIÓN',NULL,NULL,NULL,'1'),(635,16,'211114','211114 - VALOR RAZONABLE',NULL,NULL,NULL,'1'),(636,16,'221001','221001 - SUBPRODUCTOS',NULL,NULL,NULL,'1'),(637,16,'222001','222001 - DESECHOS Y DESPERDICIOS',NULL,NULL,NULL,'1'),(638,16,'231111','231111 - PRODUCTOS EN PROCESO',NULL,NULL,NULL,'1'),(639,16,'235111','235111 - COSTO',NULL,NULL,NULL,'1'),(640,16,'241111','241111 - MATERIAS PRIMAS - NACIONAL',NULL,NULL,NULL,'1'),(641,16,'241112','241112 - MATERIAS PRIMAS - IMPORTADA',NULL,NULL,NULL,'1'),(642,16,'252111','252111 - SUMINISTROS - COMBUSTIBLES',NULL,NULL,NULL,'1'),(643,16,'252211','252211 - SUMINISTROS - LUBRICANTES',NULL,NULL,NULL,'1'),(644,16,'252411 ','252411 - REPUESTOS',NULL,NULL,NULL,'1'),(645,16,'281001','281001 - MERCADERIA X RECIBIR - NACIONAL',NULL,NULL,NULL,'1'),(646,16,'281002 ','281002 - MERCADERIA X RECIBIR - IMPORTADA',NULL,NULL,NULL,'1'),(647,45,'1','ENERO',NULL,NULL,NULL,'1'),(648,45,'2','FEBRERO',NULL,NULL,NULL,'1'),(649,45,'3','MARZO',NULL,NULL,NULL,'1'),(650,45,'4','ABRIL',NULL,NULL,NULL,'1'),(651,45,'5','MAYO',NULL,NULL,NULL,'1'),(652,45,'6','JUNIO',NULL,NULL,NULL,'1'),(653,45,'7','JULIO',NULL,NULL,NULL,'1'),(654,45,'8','AGOSTO',NULL,NULL,NULL,'1'),(655,45,'9','SETIEMBRE',NULL,NULL,NULL,'1'),(656,45,'10','OCTUBRE',NULL,NULL,NULL,'1'),(657,45,'11','NOVIEMBRE',NULL,NULL,NULL,'1'),(658,45,'12','DICIEMBRE',NULL,NULL,NULL,'1'),(659,46,'1','2021',NULL,NULL,NULL,'1'),(660,46,'2','2022',NULL,NULL,NULL,'1'),(661,46,'3','2023',NULL,NULL,NULL,'1'),(662,46,'4','2024',NULL,NULL,NULL,'1'),(663,46,'5','2025',NULL,NULL,NULL,'1'),(664,46,'6','2026',NULL,NULL,NULL,'1'),(665,46,'7','2027',NULL,NULL,NULL,'1'),(666,46,'8','2028',NULL,NULL,NULL,'1'),(667,46,'9','2029',NULL,NULL,NULL,'1'),(668,46,'10','2030',NULL,NULL,NULL,'1'),(669,46,'11','2031',NULL,NULL,NULL,'1'),(670,46,'12','2032',NULL,NULL,NULL,'1'),(671,46,'13','2033',NULL,NULL,NULL,'1'),(672,46,'14','2034',NULL,NULL,NULL,'1'),(673,46,'15','2035',NULL,NULL,NULL,'1'),(674,46,'16','2036',NULL,NULL,NULL,'1'),(675,46,'17','2037',NULL,NULL,NULL,'1'),(676,46,'18','2038',NULL,NULL,NULL,'1'),(677,46,'19','2039',NULL,NULL,NULL,'1'),(678,46,'20','2040',NULL,NULL,NULL,'1'),(679,46,'21','2041',NULL,NULL,NULL,'1'),(680,46,'22','2042',NULL,NULL,NULL,'1'),(681,46,'23','2043',NULL,NULL,NULL,'1'),(682,46,'24','2044',NULL,NULL,NULL,'1'),(683,46,'25','2045',NULL,NULL,NULL,'1'),(684,46,'26','2046',NULL,NULL,NULL,'1'),(685,46,'27','2047',NULL,NULL,NULL,'1'),(686,46,'28','2048',NULL,NULL,NULL,'1'),(687,46,'29','2049',NULL,NULL,NULL,'1'),(688,46,'30','2050',NULL,NULL,NULL,'1'),(689,46,'31','2051',NULL,NULL,NULL,'1'),(690,46,'32','2052',NULL,NULL,NULL,'1'),(691,46,'33','2053',NULL,NULL,NULL,'1'),(692,46,'34','2054',NULL,NULL,NULL,'1'),(693,46,'35','2055',NULL,NULL,NULL,'1'),(694,46,'36','2056',NULL,NULL,NULL,'1'),(695,46,'37','2057',NULL,NULL,NULL,'1'),(696,46,'38','2058',NULL,NULL,NULL,'1'),(697,46,'39','2059',NULL,NULL,NULL,'1'),(698,46,'40','2060',NULL,NULL,NULL,'1'),(699,46,'41','2061',NULL,NULL,NULL,'1'),(700,46,'42','2062',NULL,NULL,NULL,'1'),(701,46,'43','2063',NULL,NULL,NULL,'1'),(702,46,'44','2064',NULL,NULL,NULL,'1'),(703,46,'45','2065',NULL,NULL,NULL,'1'),(704,46,'46','2066',NULL,NULL,NULL,'1'),(705,46,'47','2067',NULL,NULL,NULL,'1'),(706,46,'48','2068',NULL,NULL,NULL,'1'),(707,46,'49','2069',NULL,NULL,NULL,'1'),(708,46,'50','2070',NULL,NULL,NULL,'1'),(709,28,'SIST','SISTEMA',NULL,NULL,NULL,'1'),(710,28,'RR-HH','RECURSOS HUMANOS',NULL,NULL,NULL,'1'),(711,28,'FINZ','FINANZAS',NULL,NULL,NULL,'1'),(712,28,'GG','GERENTE GENERAL',NULL,NULL,NULL,'1'),(713,28,'GA','GERENCIA ADMINISTRATIVA',NULL,NULL,NULL,'1'),(715,28,'TIENDA','ENCARGADO DE TIENDA',NULL,NULL,NULL,'1'),(716,28,'LOG','LOGISTICA',NULL,NULL,NULL,'1'),(717,28,'CONT','CONTABILIDAD',NULL,NULL,NULL,'1'),(718,28,'MARK','MARKETING',NULL,NULL,NULL,'1'),(719,28,'ASIST','ASISTENTE CONTABILIDAD',NULL,NULL,NULL,'1'),(720,28,'ASIV','ASISTENTE DE VENTAS',NULL,NULL,NULL,'1'),(721,32,'DIVORCIADO','DIVORCIADO',NULL,NULL,NULL,'1'),(722,32,'VIUDO','VIUDO',NULL,NULL,NULL,'1'),(723,31,'CHI','CHILENA',NULL,NULL,NULL,'1'),(724,31,'ECU','ECUADOR',NULL,NULL,NULL,'1'),(725,31,'COL','COLOMBIA',NULL,NULL,NULL,'1'),(726,31,'ARG','ARGENTINA',NULL,NULL,NULL,'1'),(727,31,'EE.UU','ESTADOS UNIDOS',NULL,NULL,NULL,'1'),(728,31,'PAR','PARAGUAY',NULL,NULL,NULL,'1'),(729,25,'ING','INGRESO - CARGA INICIAL',NULL,NULL,NULL,'1'),(730,25,'COM','INGRESO - COMPRA NACIONAL',NULL,NULL,NULL,'1'),(731,25,'DEV','INGRESO - DEVOLUCIÓN DEL CLIENTE',NULL,NULL,NULL,'1'),(732,25,'DEVP','INGRESO - DEVOLUCIÓN DEL PROVEEDOR',NULL,NULL,NULL,'1'),(733,25,'COMI','INGRESO - COMPRA IMPORTADA',NULL,NULL,NULL,'1'),(741,13,'1','CONDUCTORES ELECTRICOS',NULL,NULL,NULL,'1'),(742,13,'2','IMPORTADOS ELECTRICOS',NULL,NULL,NULL,'1'),(743,13,'3','CINTAS AISLANTES',NULL,NULL,NULL,'1'),(744,13,'4','INDECO',NULL,NULL,NULL,'1'),(745,13,'5','CENTELSA',NULL,NULL,NULL,'1'),(746,13,'6','MIGUELEZ',NULL,NULL,NULL,'1'),(747,13,'7','CELSA',NULL,NULL,NULL,'1'),(748,13,'8','BRANDE',NULL,NULL,NULL,'1'),(749,13,'9','	BASOR',NULL,NULL,NULL,'1'),(750,13,'10','LEGRAND',NULL,NULL,NULL,'1'),(751,13,'11','BTICINO',NULL,NULL,NULL,'1'),(752,13,'12','STECK',NULL,NULL,NULL,'1'),(753,13,'13','	LEDVANCE',NULL,NULL,NULL,'1'),(754,13,'14','ABB',NULL,NULL,NULL,'1'),(755,13,'15','	SCHNEIDER ELECTRIC',NULL,NULL,NULL,'1'),(756,13,'16','	OPALUX',NULL,NULL,NULL,'1'),(757,13,'17','MENNEKES',NULL,NULL,NULL,'1'),(758,13,'18','PANDUIT',NULL,NULL,NULL,'1'),(759,13,'19','	LEVITON',NULL,NULL,NULL,'1'),(760,13,'20','PHILIPS',NULL,NULL,NULL,'1'),(761,13,'21','IMPORTADO',NULL,NULL,NULL,'1'),(762,13,'22','DIXON',NULL,NULL,NULL,'1'),(763,13,'23','	GENERAL ELECTRIC',NULL,NULL,NULL,'1'),(764,13,'24','	NACIONAL',NULL,NULL,NULL,'1'),(765,13,'25','VAME',NULL,NULL,NULL,'1'),(766,13,'26','	PAVCO',NULL,NULL,NULL,'1'),(767,13,'27','SONEL',NULL,NULL,NULL,'1'),(768,13,'28','	JOSFEL',NULL,NULL,NULL,'1'),(769,13,'29','BOSCH',NULL,NULL,NULL,'1'),(770,13,'30','DEWALT',NULL,NULL,NULL,'1'),(771,13,'31','	BURNDY',NULL,NULL,NULL,'1'),(772,13,'32','	CADWELD',NULL,NULL,NULL,'1'),(773,13,'33','3M',NULL,NULL,NULL,'1'),(774,13,'34','	THERMOWELD',NULL,NULL,NULL,'1'),(775,13,'35','	KELLER',NULL,NULL,NULL,'1'),(776,13,'36','	RAYCHEM',NULL,NULL,NULL,'1'),(777,13,'37','SOFAMEL',NULL,NULL,NULL,'1'),(778,13,'38','THORGEL',NULL,NULL,NULL,'1'),(779,13,'39','TKD',NULL,NULL,NULL,'1'),(780,13,'40','	FINDER',NULL,NULL,NULL,'1'),(781,13,'41','STRONGER',NULL,NULL,NULL,'1'),(782,13,'42','INTELLI',NULL,NULL,NULL,'1'),(783,13,'43','MECH',NULL,NULL,NULL,'1'),(784,13,'44','	HAYDON',NULL,NULL,NULL,'1'),(785,13,'45','METAL CORAZA',NULL,NULL,NULL,'1'),(786,13,'46','JJ',NULL,NULL,NULL,'1'),(787,13,'47','	CROUSE HINDS',NULL,NULL,NULL,'1'),(788,13,'48','BELDEN',NULL,NULL,NULL,'1'),(789,13,'49','ELCOPE',NULL,NULL,NULL,'1'),(790,13,'50','B-LINE',NULL,NULL,NULL,'1'),(791,13,'51','	KAIFLEX',NULL,NULL,NULL,'1'),(792,13,'52','SOLERA',NULL,NULL,NULL,'1'),(793,13,'53','	ONKA',NULL,NULL,NULL,'1'),(794,13,'54','OCAL',NULL,NULL,NULL,'1'),(795,13,'55','GENERAL CABLE',NULL,NULL,NULL,'1'),(796,13,'56','SIEMENS',NULL,NULL,NULL,'1'),(797,13,'57','HONT',NULL,NULL,NULL,'1'),(798,13,'58','	PROSTAR',NULL,NULL,NULL,'1'),(799,13,'59','MARLEW',NULL,NULL,NULL,'1'),(800,13,'60','RITTAL',NULL,NULL,NULL,'1'),(801,13,'61','EATON',NULL,NULL,NULL,'1'),(802,13,'62','CORAFLEX',NULL,NULL,NULL,'1'),(803,13,'63','GRAESSLIN',NULL,NULL,NULL,'1'),(804,13,'64','SIEMON',NULL,NULL,NULL,'1'),(805,13,'65','TELE-FONIKA',NULL,NULL,NULL,'1'),(806,13,'66','	ALLIED',NULL,NULL,NULL,'1'),(807,13,'67','SOLDEXEL',NULL,NULL,NULL,'1'),(808,13,'68','SCI',NULL,NULL,NULL,'1'),(809,13,'69','PRODUIT',NULL,NULL,NULL,'1'),(810,13,'70','ORBIT',NULL,NULL,NULL,'1'),(811,13,'71','	KILLARK',NULL,NULL,NULL,'1'),(812,13,'72','	MATUSITA',NULL,NULL,NULL,'1'),(813,13,'73','THOMAS & BETTS',NULL,NULL,NULL,'1'),(814,13,'74','PRIORITY W',NULL,NULL,NULL,'1'),(815,13,'75','	KBA',NULL,NULL,NULL,'1'),(816,13,'76','ERICO',NULL,NULL,NULL,'1'),(817,13,'77','	COPPERSTEEL',NULL,NULL,NULL,'1'),(818,13,'78','BUSSMAN',NULL,NULL,NULL,'1'),(819,13,'79','PROCOAT',NULL,NULL,NULL,'1'),(820,13,'80','AFC',NULL,NULL,NULL,'1'),(821,13,'81','TPMC - NHT',NULL,NULL,NULL,'1'),(822,13,'82','	TECFUSE',NULL,NULL,NULL,'1'),(823,13,'83','	WEIFANG',NULL,NULL,NULL,'1'),(824,13,'84','THOR CEM',NULL,NULL,NULL,'1'),(825,13,'85','TELERGON',NULL,NULL,NULL,'1'),(826,13,'86','	DSE INC',NULL,NULL,NULL,'1'),(827,13,'87','DNS KOREA',NULL,NULL,NULL,'1'),(828,13,'88','AB-KRAFT',NULL,NULL,NULL,'1'),(829,13,'89','JORMEN',NULL,NULL,NULL,'1'),(830,13,'90','SANDFLEX',NULL,NULL,NULL,'1'),(831,13,'91','FLUKE',NULL,NULL,NULL,'1'),(832,13,'92','EFAPEL',NULL,NULL,NULL,'1'),(833,13,'93','	INDEL',NULL,NULL,NULL,'1'),(834,13,'94','TMT',NULL,NULL,NULL,'1'),(835,13,'95','	PHOENIX CONTACT',NULL,NULL,NULL,'1'),(836,13,'96','SATRA',NULL,NULL,NULL,'1'),(837,13,'97','SYLVANIA',NULL,NULL,NULL,'1'),(838,13,'98','	ORTAC ELEKTRIC',NULL,NULL,NULL,'1'),(839,13,'99','	CEPER',NULL,NULL,NULL,'1'),(840,13,'100','CIRMAKER',NULL,NULL,NULL,'1'),(841,13,'101','GREENLEE',NULL,NULL,NULL,'1'),(842,13,'102','	KNIPEX',NULL,NULL,NULL,'1'),(843,13,'103','	KEC',NULL,NULL,NULL,'1'),(844,13,'104','		HILTI',NULL,NULL,NULL,'1'),(845,13,'105','LS',NULL,NULL,NULL,'1'),(846,13,'106','	HAUFE',NULL,NULL,NULL,'1'),(847,13,'107','		OSRAM',NULL,NULL,NULL,'1'),(848,13,'108','	KHOMAX',NULL,NULL,NULL,'1'),(849,13,'109','GOLED',NULL,NULL,NULL,'1'),(850,13,'110','CRC',NULL,NULL,NULL,'1'),(851,13,'111','NETKEY',NULL,NULL,NULL,'1'),(852,13,'112','CATU',NULL,NULL,NULL,'1'),(853,13,'113','TALMA',NULL,NULL,NULL,'1'),(854,53,'Correlativ','Productos Automaticos','64',NULL,NULL,'1'),(855,54,'ADMINISTRADOR','',NULL,NULL,NULL,'1'),(856,54,'VENDEDORES','',NULL,NULL,NULL,'1'),(857,55,'0','PENDIENTE',NULL,NULL,NULL,'1'),(858,55,'1','APROBADO',NULL,NULL,NULL,'1'),(859,55,'2','CADUCADO',NULL,NULL,NULL,'1'),(860,55,'3','RECHAZADO',NULL,NULL,NULL,'1'),(861,56,'0','PENDIENTE',NULL,NULL,NULL,'1'),(862,56,'1','APROBADO',NULL,NULL,NULL,'1'),(863,56,'2','DESAPROBADO',NULL,NULL,NULL,'1'),(864,57,'CRED CON CUOTAS','CREDITO CON CUOTAS',NULL,NULL,NULL,'1'),(865,57,'CREDITO','CREDITO',NULL,NULL,NULL,'1'),(866,57,'CONTADO','CONTADO',NULL,NULL,NULL,'1'),(867,58,'1','PARCIAL',NULL,NULL,NULL,'1'),(868,58,'2','COMPLETA',NULL,NULL,NULL,'1'),(869,59,'0','PENDIENTE',NULL,NULL,NULL,'1'),(870,59,'1','FINALIZADO',NULL,NULL,NULL,'1'),(871,60,'VENTA','VENTA',NULL,NULL,NULL,'1'),(872,60,'VENTA SUJETA A CONFIRMAR','VENTA SUJETA A CONFIRMAR',NULL,NULL,NULL,'1'),(873,60,'COMPRA','COMPRA',NULL,NULL,NULL,'1'),(874,60,'CONSIGNACION','CONSIGNACION',NULL,NULL,NULL,'1'),(875,60,'DEVOLUCION','DEVOLUCION',NULL,NULL,NULL,'1'),(876,60,'ENTRE ESTABLECIMIENTO DE LA MISMA EMPRESA','ENTRE ESTABLECIMIENTO DE LA MISMA EMPRESA',NULL,NULL,NULL,'1'),(877,60,'PARA TRANSFORMACION','PARA TRANSFORMACION',NULL,NULL,NULL,'1'),(878,60,'EMISOR ITINERANTE','EMISOR ITINERANTE',NULL,NULL,NULL,'1'),(879,60,'IMPORTACION','IMPORTACION',NULL,NULL,NULL,'1'),(880,60,'EXPORTACION','EXPORTACION',NULL,NULL,NULL,'1'),(881,60,'OTRO','OTRO',NULL,NULL,NULL,'1'),(885,61,'COMPRA','COMPRA',NULL,NULL,NULL,'1'),(886,61,'COBRANZA','COBRANZA',NULL,NULL,NULL,'1'),(887,62,'PENDIENTE','PENDIENTE',NULL,NULL,NULL,'1'),(888,62,'CANCELADO','CANCELADO',NULL,NULL,NULL,'1'),(889,63,'NACIONAL','NACIONAL',NULL,NULL,NULL,'1'),(890,63,'IMPORTADA','IMPORTADA',NULL,NULL,NULL,'1'),(892,64,'0','PENDIENTE',NULL,NULL,NULL,'1'),(893,64,'1','APROBADO',NULL,NULL,NULL,'1'),(894,66,'1','APROBADO',NULL,NULL,NULL,'1'),(895,66,'0','PENDIENTE',NULL,NULL,NULL,'1'),(896,65,'1','REGISTRADO',NULL,NULL,NULL,'1'),(897,65,'0','ELIMINADO',NULL,NULL,NULL,'1'),(898,64,'2','ANULADO',NULL,NULL,NULL,'1'),(900,67,'APROBADO','Que ya fue generado la Factura, pero esta pendiente por entregar los productos por el area de almacen ',NULL,NULL,NULL,'1'),(901,67,'PENDIENTE','Que no tiene asignado si es factura o boleta y num-. comprobante y guia recien lo ha creado',NULL,NULL,NULL,'1'),(903,28,'JEFE DE VENTAS','JEFE DE VENTAS',NULL,NULL,NULL,'1'),(904,68,'PRODUCTOS','PRODUCTOS',NULL,NULL,NULL,'1'),(905,68,'OTROS CONCEPTOS','OTROS CONCEPTOS',NULL,NULL,NULL,'1'),(906,69,'0','RECHAZADO',NULL,NULL,NULL,'1'),(907,69,'1','ACEPTADO',NULL,NULL,NULL,'1'),(908,69,'2','PENDIENTE',NULL,NULL,NULL,'1'),(909,69,'3','ANULADO',NULL,NULL,NULL,'1'),(968,67,'ANULADO','Devolucion del cliente',NULL,NULL,NULL,'1'),(969,70,'PENDIENTE','PORQUE RECIEN HAN GENERADO EL COMPROBANTES',NULL,NULL,NULL,'1'),(970,70,'DESPACHADO','EL ALMACENERO YA ENVIO LOS PRODUCTOS AL CLIENTE',NULL,NULL,NULL,'1'),(971,54,'RR. HH','',NULL,NULL,NULL,'1'),(972,54,'ALMACEN','',NULL,NULL,NULL,'1'),(973,54,'ASISTENTE','',NULL,NULL,NULL,'1'),(974,71,'1','REGISTRADO',NULL,NULL,NULL,'1'),(975,71,'0','ELIMINADO',NULL,NULL,NULL,'1'),(976,72,'0','ELIMINADO',NULL,NULL,NULL,'1'),(977,72,'1','REGISTRADO',NULL,NULL,NULL,'1');

UNLOCK TABLES;

/*Table structure for table `detalle_parciales_completas` */

DROP TABLE IF EXISTS `detalle_parciales_completas`;

CREATE TABLE `detalle_parciales_completas` (
  `id_dparcial_completa` int(10) NOT NULL AUTO_INCREMENT,
  `id_dcotizacion` int(10) DEFAULT NULL,
  `id_parcial_completa` int(10) DEFAULT NULL,
  `id_producto` int(10) DEFAULT NULL,
  `salida_prod` varchar(20) DEFAULT NULL,
  `pendiente_prod` varchar(20) DEFAULT NULL,
  `d_cant_total` decimal(18,2) DEFAULT NULL,
  `valor_venta_sin_d` decimal(18,2) DEFAULT NULL,
  `valor_venta_con_d` decimal(18,2) DEFAULT NULL,
  `item` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_dparcial_completa`),
  KEY `id_parcial_completa` (`id_parcial_completa`),
  KEY `id_dcotizacion` (`id_dcotizacion`),
  CONSTRAINT `detalle_parciales_completas_ibfk_1` FOREIGN KEY (`id_parcial_completa`) REFERENCES `parciales_completas` (`id_parcial_completa`),
  CONSTRAINT `detalle_parciales_completas_ibfk_2` FOREIGN KEY (`id_dcotizacion`) REFERENCES `detalle_cotizacion` (`id_dcotizacion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detalle_parciales_completas` */

LOCK TABLES `detalle_parciales_completas` WRITE;

insert  into `detalle_parciales_completas`(`id_dparcial_completa`,`id_dcotizacion`,`id_parcial_completa`,`id_producto`,`salida_prod`,`pendiente_prod`,`d_cant_total`,`valor_venta_sin_d`,`valor_venta_con_d`,`item`) values (1,2,1,3,'3','0',0.00,36.00,36.00,'1'),(2,1,2,3,'2','0',0.00,24.00,24.00,'1'),(3,3,3,3,'2','0',0.00,24.00,24.00,'1');

UNLOCK TABLES;

/*Table structure for table `grupo_vame_boletas` */

DROP TABLE IF EXISTS `grupo_vame_boletas`;

CREATE TABLE `grupo_vame_boletas` (
  `id_boleta` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_boleta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `grupo_vame_boletas` */

LOCK TABLES `grupo_vame_boletas` WRITE;

insert  into `grupo_vame_boletas`(`id_boleta`) values (1);

UNLOCK TABLES;

/*Table structure for table `grupo_vame_carga_inicial` */

DROP TABLE IF EXISTS `grupo_vame_carga_inicial`;

CREATE TABLE `grupo_vame_carga_inicial` (
  `id_grupo_vame` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_grupo_vame`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `grupo_vame_carga_inicial` */

LOCK TABLES `grupo_vame_carga_inicial` WRITE;

insert  into `grupo_vame_carga_inicial`(`id_grupo_vame`) values (1),(2),(3),(4),(5),(6);

UNLOCK TABLES;

/*Table structure for table `grupo_vame_clientes_proveedores` */

DROP TABLE IF EXISTS `grupo_vame_clientes_proveedores`;

CREATE TABLE `grupo_vame_clientes_proveedores` (
  `id_grupo_vame` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_grupo_vame`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `grupo_vame_clientes_proveedores` */

LOCK TABLES `grupo_vame_clientes_proveedores` WRITE;

insert  into `grupo_vame_clientes_proveedores`(`id_grupo_vame`) values (1),(2),(3);

UNLOCK TABLES;

/*Table structure for table `grupo_vame_comodin` */

DROP TABLE IF EXISTS `grupo_vame_comodin`;

CREATE TABLE `grupo_vame_comodin` (
  `id_grupo_vame` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_grupo_vame`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `grupo_vame_comodin` */

LOCK TABLES `grupo_vame_comodin` WRITE;

insert  into `grupo_vame_comodin`(`id_grupo_vame`) values (1);

UNLOCK TABLES;

/*Table structure for table `grupo_vame_comprobantes` */

DROP TABLE IF EXISTS `grupo_vame_comprobantes`;

CREATE TABLE `grupo_vame_comprobantes` (
  `id_grupo_vame` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_grupo_vame`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `grupo_vame_comprobantes` */

LOCK TABLES `grupo_vame_comprobantes` WRITE;

insert  into `grupo_vame_comprobantes`(`id_grupo_vame`) values (1),(2),(3);

UNLOCK TABLES;

/*Table structure for table `grupo_vame_cotizacion` */

DROP TABLE IF EXISTS `grupo_vame_cotizacion`;

CREATE TABLE `grupo_vame_cotizacion` (
  `id_grupo_vame` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_grupo_vame`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `grupo_vame_cotizacion` */

LOCK TABLES `grupo_vame_cotizacion` WRITE;

insert  into `grupo_vame_cotizacion`(`id_grupo_vame`) values (1),(2),(3);

UNLOCK TABLES;

/*Table structure for table `grupo_vame_facturas` */

DROP TABLE IF EXISTS `grupo_vame_facturas`;

CREATE TABLE `grupo_vame_facturas` (
  `id_factura` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_factura`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `grupo_vame_facturas` */

LOCK TABLES `grupo_vame_facturas` WRITE;

insert  into `grupo_vame_facturas`(`id_factura`) values (1),(2);

UNLOCK TABLES;

/*Table structure for table `grupo_vame_guia_remision` */

DROP TABLE IF EXISTS `grupo_vame_guia_remision`;

CREATE TABLE `grupo_vame_guia_remision` (
  `id_grupo_vame` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_grupo_vame`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `grupo_vame_guia_remision` */

LOCK TABLES `grupo_vame_guia_remision` WRITE;

insert  into `grupo_vame_guia_remision`(`id_grupo_vame`) values (1),(2),(3);

UNLOCK TABLES;

/*Table structure for table `grupo_vame_orden_despacho` */

DROP TABLE IF EXISTS `grupo_vame_orden_despacho`;

CREATE TABLE `grupo_vame_orden_despacho` (
  `id_grupo_vame` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_grupo_vame`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `grupo_vame_orden_despacho` */

LOCK TABLES `grupo_vame_orden_despacho` WRITE;

insert  into `grupo_vame_orden_despacho`(`id_grupo_vame`) values (1),(2),(3);

UNLOCK TABLES;

/*Table structure for table `grupo_vame_parciales_completas` */

DROP TABLE IF EXISTS `grupo_vame_parciales_completas`;

CREATE TABLE `grupo_vame_parciales_completas` (
  `id_grupo_vame` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_grupo_vame`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `grupo_vame_parciales_completas` */

LOCK TABLES `grupo_vame_parciales_completas` WRITE;

insert  into `grupo_vame_parciales_completas`(`id_grupo_vame`) values (1),(2),(3);

UNLOCK TABLES;

/*Table structure for table `grupo_vame_productos` */

DROP TABLE IF EXISTS `grupo_vame_productos`;

CREATE TABLE `grupo_vame_productos` (
  `id_grupo_vame` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_grupo_vame`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

/*Data for the table `grupo_vame_productos` */

LOCK TABLES `grupo_vame_productos` WRITE;

insert  into `grupo_vame_productos`(`id_grupo_vame`) values (1),(2),(3),(4),(5),(6),(7),(8),(9),(10),(11),(12),(13),(14),(15),(16),(17),(18),(19),(20),(21),(22),(23),(24),(25),(26),(27),(28),(29),(30),(31),(32);

UNLOCK TABLES;

/*Table structure for table `grupo_vame_tienda_proceres` */

DROP TABLE IF EXISTS `grupo_vame_tienda_proceres`;

CREATE TABLE `grupo_vame_tienda_proceres` (
  `id_grupo_vame` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_grupo_vame`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `grupo_vame_tienda_proceres` */

LOCK TABLES `grupo_vame_tienda_proceres` WRITE;

insert  into `grupo_vame_tienda_proceres`(`id_grupo_vame`) values (1),(2),(3);

UNLOCK TABLES;

/*Table structure for table `grupo_vame_trabajadores` */

DROP TABLE IF EXISTS `grupo_vame_trabajadores`;

CREATE TABLE `grupo_vame_trabajadores` (
  `id_grupo_vame` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_grupo_vame`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `grupo_vame_trabajadores` */

LOCK TABLES `grupo_vame_trabajadores` WRITE;

insert  into `grupo_vame_trabajadores`(`id_grupo_vame`) values (1),(2);

UNLOCK TABLES;

/*Table structure for table `guia_remision` */

DROP TABLE IF EXISTS `guia_remision`;

CREATE TABLE `guia_remision` (
  `id_guia_remision` int(10) NOT NULL AUTO_INCREMENT,
  `id_parcial_completa` int(10) DEFAULT NULL,
  `tipo_transporte` varchar(100) DEFAULT NULL,
  `ruc` varchar(100) DEFAULT NULL,
  `transportista` varchar(100) DEFAULT NULL,
  `domiciliado` varchar(100) DEFAULT NULL,
  `licencia` varchar(100) DEFAULT NULL,
  `marca_modelo` varchar(100) DEFAULT NULL,
  `placa` varchar(100) DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `id_tipo_envio_guia_remision` int(10) DEFAULT NULL,
  `ds_tipo_envio_guia_remision` varchar(100) DEFAULT NULL,
  `peso_bruto_total` varchar(100) DEFAULT NULL,
  `num_bulto` varchar(100) DEFAULT NULL,
  `punto_partida` varchar(100) DEFAULT NULL,
  `punto_llegada` varchar(100) DEFAULT NULL,
  `contenedor` varchar(100) DEFAULT NULL,
  `embarque` varchar(100) DEFAULT NULL,
  `ds_sucursal_trabajador` varchar(100) DEFAULT NULL,
  `ds_serie_guia_remision` varchar(10) DEFAULT NULL,
  `id_tienda` int(10) DEFAULT NULL,
  `id_estado_guia_remision` varchar(50) DEFAULT NULL,
  `fecha_guia_remision` date DEFAULT NULL,
  `id_trabajador` int(10) DEFAULT NULL,
  `ds_nombre_trabajador` varchar(200) DEFAULT NULL,
  `id_guia_remision_empresa` int(10) DEFAULT NULL,
  `id_empresa` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_guia_remision`),
  KEY `id_parcial_completa` (`id_parcial_completa`),
  KEY `id_sucursal` (`id_tienda`),
  CONSTRAINT `guia_remision_ibfk_1` FOREIGN KEY (`id_parcial_completa`) REFERENCES `parciales_completas` (`id_parcial_completa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `guia_remision` */

LOCK TABLES `guia_remision` WRITE;

insert  into `guia_remision`(`id_guia_remision`,`id_parcial_completa`,`tipo_transporte`,`ruc`,`transportista`,`domiciliado`,`licencia`,`marca_modelo`,`placa`,`observaciones`,`id_tipo_envio_guia_remision`,`ds_tipo_envio_guia_remision`,`peso_bruto_total`,`num_bulto`,`punto_partida`,`punto_llegada`,`contenedor`,`embarque`,`ds_sucursal_trabajador`,`ds_serie_guia_remision`,`id_tienda`,`id_estado_guia_remision`,`fecha_guia_remision`,`id_trabajador`,`ds_nombre_trabajador`,`id_guia_remision_empresa`,`id_empresa`) values (1,2,'','','','','','','','',0,'Seleccionar','','','','','','','TIENDA PROCERES','T001',1,'894','2022-10-24',1,'SAUL BARRETO MINAYA',1,3),(2,1,'','','','','','','','',0,'Seleccionar','','','','','','','TIENDA PROCERES','T001',2,'894','2022-10-24',1,'SAUL BARRETO MINAYA',2,3),(3,3,'','','','','','','','',0,'Seleccionar','','','','','','','TIENDA PROCERES','T001',3,'894','2022-10-25',1,'SAUL BARRETO MINAYA',3,3);

UNLOCK TABLES;

/*Table structure for table `multitablas` */

DROP TABLE IF EXISTS `multitablas`;

CREATE TABLE `multitablas` (
  `id_multitabla` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_tabla` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_multitabla`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4;

/*Data for the table `multitablas` */

LOCK TABLES `multitablas` WRITE;

insert  into `multitablas`(`id_multitabla`,`nombre_tabla`) values (1,'TIPO DE COMPROBANTE'),(2,'MOTIVO DE PAGO'),(3,'CTA VTA'),(4,'MEDIO DE PAGO'),(5,'ASUNTO'),(6,'BANCO'),(7,'PRIORIDAD'),(8,'MONEDA'),(9,'MERCADERIA'),(10,'CONDICION DE PAGO'),(11,'TRANSACCION'),(12,'UNIDAD MEDIDA'),(13,'GRUPO'),(14,'SUB CLASE'),(15,'MARCA PRODUCTOS'),(16,'CTA ENT'),(17,'FAMILIA'),(18,'SUB CLASE DOS'),(19,'CLASE'),(20,'ALMACEN'),(21,'EQUIPO TABLERO'),(22,'PLACA TABLERO'),(23,'MODELO TABLERO'),(24,'SERIE TABLERO'),(25,'TIPO DE INGRESOS'),(26,'NUMERO DE IMPORTANCION'),(27,'TIPO DE TRABAJADOR'),(28,'CARGO TRABAJADOR'),(29,'SEXO'),(30,'TIPO DE DOCUMENTO'),(31,'NACIONALIDAD'),(32,'ESTADO CIVIL'),(33,'GRADO INSTRUCCION'),(34,'DEPARTAMENTO'),(35,'PROVINCIA'),(36,'DISTRITO'),(37,'TIPO PERSONA'),(38,'TIPO DE PERSONA SUNAT'),(39,'ORIGEN'),(40,'CONDICION'),(41,'TIPO DE CLIENTE DE PAGO'),(42,'TIPO DE GIRO'),(43,'LINEA DISPONIBLE'),(44,'DIAS'),(45,'MES'),(46,'AÑO'),(47,'DIAS ENTREGA'),(48,'TASA'),(49,'PRUEBAS QA - SAUL'),(50,'EMPRESA'),(51,'CODIGOS SUNAT'),(52,'MARCA TABLEROS'),(53,'CORRELATIVO PRODUCTOS AUTOMATICOS'),(54,'ROLES'),(55,'ESTADO DE COTIZACION'),(56,'ESTADO DE ORDEN DESPACHO'),(57,'CONDICION DE PAGO COTIZACION'),(58,'TIPO DE ORDEN PARCIALES Y COMPLETAS'),(59,'ESTADO ELABORAR PC'),(60,'TIPO ENVIO - GUIA DE REMISION'),(61,'TIPO DE COMPRA Y COBRANZA'),(62,'ESTADO COMPRAS COBRANZA'),(63,'TIPO ORDEN COMPRA'),(64,'ESTADO PARCIALES COMPLETAS'),(65,'ESTADO DE REGISTRAR O ELIMINAR - DETALLE CONDICION PAGO - MODULO COMPROBANTES '),(66,'ESTADO DE GUIA DE REMISION'),(67,'ESTADO DE COMPROBANTES'),(68,'CATEGORIA DE COMODIN'),(69,'ESTADOS SUNAT NUBEFACT'),(70,'ESTADOS DE SALIDA PRODUCTOS - ALMACEN'),(71,'ESTADO DE REGISTRAR O ELIMINAR - DETALLE CARGA INICIAL - MODULO DE CARGA INICIAL'),(72,'ESTADO DE REGISTRAR O ELIMINAR - DETALLE COTIZACION - MODULO DE CARGA INICIAL');

UNLOCK TABLES;

/*Table structure for table `orden_despacho` */

DROP TABLE IF EXISTS `orden_despacho`;

CREATE TABLE `orden_despacho` (
  `id_orden_despacho` int(10) NOT NULL AUTO_INCREMENT,
  `id_cotizacion` int(10) DEFAULT NULL,
  `resultado_valor_cambio` decimal(18,2) DEFAULT NULL,
  `fecha_orden_despacho` date DEFAULT NULL,
  `linea_credito_uso` decimal(18,2) DEFAULT NULL,
  `id_estado_orden_despacho` varchar(10) DEFAULT NULL,
  `id_estado_elaborar_pc` varchar(10) DEFAULT NULL,
  `id_trabajador` int(10) DEFAULT NULL,
  `ds_nombre_trabajador` varchar(200) DEFAULT NULL,
  `id_orden_despacho_empresa` int(10) DEFAULT NULL,
  `id_empresa` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_orden_despacho`),
  KEY `id_cotizacion` (`id_cotizacion`),
  CONSTRAINT `orden_despacho_ibfk_1` FOREIGN KEY (`id_cotizacion`) REFERENCES `cotizacion` (`id_cotizacion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `orden_despacho` */

LOCK TABLES `orden_despacho` WRITE;

insert  into `orden_despacho`(`id_orden_despacho`,`id_cotizacion`,`resultado_valor_cambio`,`fecha_orden_despacho`,`linea_credito_uso`,`id_estado_orden_despacho`,`id_estado_elaborar_pc`,`id_trabajador`,`ds_nombre_trabajador`,`id_orden_despacho_empresa`,`id_empresa`) values (1,2,NULL,'2022-10-24',NULL,'862','870',1,'SAUL BARRETO MINAYA',1,3),(2,1,NULL,'2022-10-24',NULL,'862','870',1,'SAUL BARRETO MINAYA',2,3),(3,3,NULL,'2022-10-25',NULL,'862','870',1,'SAUL BARRETO MINAYA',3,3);

UNLOCK TABLES;

/*Table structure for table `parciales_completas` */

DROP TABLE IF EXISTS `parciales_completas`;

CREATE TABLE `parciales_completas` (
  `id_parcial_completa` int(10) NOT NULL AUTO_INCREMENT,
  `id_orden_despacho` int(10) DEFAULT NULL,
  `valor_venta_total_sin_d` decimal(18,2) DEFAULT NULL,
  `valor_venta_total_con_d` decimal(18,2) DEFAULT NULL,
  `descuento_total` decimal(18,2) DEFAULT NULL,
  `igv` decimal(18,2) DEFAULT NULL,
  `precio_venta` decimal(18,2) DEFAULT NULL,
  `fecha_parcial_completa` date DEFAULT NULL,
  `id_tipo_orden_parcial_completa` varchar(10) DEFAULT NULL,
  `id_estado_parcial_completa` varchar(10) DEFAULT NULL,
  `id_trabajador` int(10) DEFAULT NULL,
  `ds_nombre_trabajador` varchar(200) DEFAULT NULL,
  `id_parcial_completa_empresa` int(10) DEFAULT NULL,
  `id_empresa` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_parcial_completa`),
  KEY `id_orden_despacho` (`id_orden_despacho`),
  CONSTRAINT `parciales_completas_ibfk_1` FOREIGN KEY (`id_orden_despacho`) REFERENCES `orden_despacho` (`id_orden_despacho`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `parciales_completas` */

LOCK TABLES `parciales_completas` WRITE;

insert  into `parciales_completas`(`id_parcial_completa`,`id_orden_despacho`,`valor_venta_total_sin_d`,`valor_venta_total_con_d`,`descuento_total`,`igv`,`precio_venta`,`fecha_parcial_completa`,`id_tipo_orden_parcial_completa`,`id_estado_parcial_completa`,`id_trabajador`,`ds_nombre_trabajador`,`id_parcial_completa_empresa`,`id_empresa`) values (1,1,36.00,36.00,0.00,6.48,42.48,'2022-10-24','868','893',1,'SAUL BARRETO MINAYA',1,3),(2,2,24.00,24.00,0.00,4.32,28.32,'2022-10-24','868','893',1,'SAUL BARRETO MINAYA',2,3),(3,3,24.00,24.00,0.00,4.32,28.32,'2022-10-25','868','893',1,'SAUL BARRETO MINAYA',3,3);

UNLOCK TABLES;

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id_producto` int(10) NOT NULL AUTO_INCREMENT,
  `codigo_producto` varchar(100) DEFAULT NULL,
  `descripcion_producto` varchar(200) DEFAULT NULL,
  `precio_costo` decimal(18,5) DEFAULT NULL,
  `precio_unitario` decimal(18,5) DEFAULT NULL,
  `porcentaje` varchar(10) DEFAULT NULL,
  `ganancia_unidad` decimal(18,5) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  `rentabilidad` varchar(100) DEFAULT NULL,
  `id_unidad_medida` int(10) DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  `id_marca_producto` int(10) DEFAULT NULL,
  `id_moneda` int(10) DEFAULT NULL,
  `id_sunat` varchar(100) DEFAULT NULL,
  `id_almacen` int(10) DEFAULT NULL,
  `id_trabajador` int(10) DEFAULT NULL,
  `ds_nombre_trabajador` varchar(200) DEFAULT NULL,
  `id_producto_empresa` int(10) DEFAULT NULL,
  `id_empresa` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

/*Data for the table `productos` */

LOCK TABLES `productos` WRITE;

insert  into `productos`(`id_producto`,`codigo_producto`,`descripcion_producto`,`precio_costo`,`precio_unitario`,`porcentaje`,`ganancia_unidad`,`stock`,`rentabilidad`,`id_unidad_medida`,`id_grupo`,`id_marca_producto`,`id_moneda`,`id_sunat`,`id_almacen`,`id_trabajador`,`ds_nombre_trabajador`,`id_producto_empresa`,`id_empresa`) values (3,'P001','ALAMBRES Y CABLES ELECTRICOS',12.00000,12.00000,'',0.00000,'79','0',263,743,300,1,'196',139,1,'SAUL BARRETO MINAYA',3,3);

UNLOCK TABLES;

/*Table structure for table `salida_productos` */

DROP TABLE IF EXISTS `salida_productos`;

CREATE TABLE `salida_productos` (
  `id_salida_producto` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_salida_producto` date DEFAULT NULL,
  `id_comprobante` int(10) DEFAULT NULL,
  `id_estado_salida_producto` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_salida_producto`),
  KEY `id_comprobante` (`id_comprobante`),
  CONSTRAINT `salida_productos_ibfk_1` FOREIGN KEY (`id_comprobante`) REFERENCES `comprobantes` (`id_comprobante`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `salida_productos` */

LOCK TABLES `salida_productos` WRITE;

UNLOCK TABLES;

/*Table structure for table `temporal` */

DROP TABLE IF EXISTS `temporal`;

CREATE TABLE `temporal` (
  `item` varchar(10) DEFAULT NULL,
  `fecha_emision` date DEFAULT NULL,
  `precio_venta` decimal(18,2) DEFAULT NULL,
  `fecha_emision2` date DEFAULT NULL,
  `precio_venta2` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `temporal` */

LOCK TABLES `temporal` WRITE;

insert  into `temporal`(`item`,`fecha_emision`,`precio_venta`,`fecha_emision2`,`precio_venta2`) values ('1','2022-10-24',42.48,'2022-10-25',28.32),('2','2022-10-25',28.32,'0000-00-00',0.00);

UNLOCK TABLES;

/*Table structure for table `tipo_cambio` */

DROP TABLE IF EXISTS `tipo_cambio`;

CREATE TABLE `tipo_cambio` (
  `id_tipo_cambio` int(10) NOT NULL AUTO_INCREMENT,
  `compra` decimal(18,3) DEFAULT NULL,
  `venta` decimal(18,3) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_tipo_cambio`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipo_cambio` */

LOCK TABLES `tipo_cambio` WRITE;

insert  into `tipo_cambio`(`id_tipo_cambio`,`compra`,`venta`,`fecha`) values (1,3.758,3.939,'2022-07-12');

UNLOCK TABLES;

/*Table structure for table `trabajadores` */

DROP TABLE IF EXISTS `trabajadores`;

CREATE TABLE `trabajadores` (
  `id_trabajador` int(10) NOT NULL AUTO_INCREMENT,
  `num_documento` varchar(10) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `ape_paterno` varchar(50) DEFAULT NULL,
  `ape_materno` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `lugar_nacimiento` varchar(100) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `referencia` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `id_tipo_trabajador` int(10) DEFAULT NULL,
  `id_almacen` int(10) DEFAULT NULL,
  `id_cargo_trabajador` int(10) DEFAULT NULL,
  `id_sexo` int(10) DEFAULT NULL,
  `id_tipo_documento` int(10) DEFAULT NULL,
  `id_nacionalidad` int(10) DEFAULT NULL,
  `id_est_civil` int(10) DEFAULT NULL,
  `id_grado_instruccion` int(10) DEFAULT NULL,
  `id_departamento` int(10) DEFAULT NULL,
  `id_provincia` int(10) DEFAULT NULL,
  `id_distrito` int(10) DEFAULT NULL,
  `id_trabajador_empresa` int(10) DEFAULT NULL,
  `id_empresa` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_trabajador`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `trabajadores` */

LOCK TABLES `trabajadores` WRITE;

insert  into `trabajadores`(`id_trabajador`,`num_documento`,`nombres`,`ape_paterno`,`ape_materno`,`email`,`fecha_nacimiento`,`lugar_nacimiento`,`domicilio`,`referencia`,`telefono`,`celular`,`id_tipo_trabajador`,`id_almacen`,`id_cargo_trabajador`,`id_sexo`,`id_tipo_documento`,`id_nacionalidad`,`id_est_civil`,`id_grado_instruccion`,`id_departamento`,`id_provincia`,`id_distrito`,`id_trabajador_empresa`,`id_empresa`) values (1,'76270278','SAUL','BARRETO','MINAYA','saulbarretominaya@gmail.com','1994-01-01','','','','','999999999',577,139,712,194,594,600,609,611,0,0,0,1,3);

UNLOCK TABLES;

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id_empresa` int(10) DEFAULT NULL,
  `id_rol` int(10) DEFAULT NULL,
  `id_trabajador` int(10) DEFAULT NULL,
  `ds_nombre_trabajador` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuarios` */

LOCK TABLES `usuarios` WRITE;

insert  into `usuarios`(`id_usuario`,`usuario`,`password`,`id_empresa`,`id_rol`,`id_trabajador`,`ds_nombre_trabajador`) values (33,'rrhh','rrhh',3,971,1,NULL),(36,'sa','sa',3,855,1,NULL),(37,'vendedores','vendedores',3,856,1,NULL),(38,'almacen','almacen',3,972,1,NULL),(39,'asistente','asistente',3,973,1,NULL);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
