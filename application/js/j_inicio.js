/* Modal 1 */
codigo_producto_duplicado = true;
resultado_campo = true;

$("#id_datatable_productos thead #dtable_codigo").each(function () {
    var title = $(this).text();
    $(this).html('<input type="text" class="border-0" style="width:90px;" placeholder="' + title + '" /> ');
});
$("#id_datatable_productos thead #dtable_descripcion_producto").each(function () {
    var title = $(this).text();
    $(this).html('<input type="text" class="border-0" style="width:400px;" placeholder="' + title + '" /> ');
});
$("#id_datatable_productos thead #dtable_ds_unidad_medida").each(function () {
    var title = $(this).text();
    $(this).html('<input type="text" class="border-0" style="width:50px;" placeholder="' + title + '" /> ');
});
$("#id_datatable_productos thead #dtable_ds_marca_producto").each(function () {
    var title = $(this).text();
    $(this).html('<input type="text" class="border-0" style="width:80px;" placeholder="' + title + '" /> ');
});
$("#id_datatable_productos thead #dtable_precio_unitario").each(function () {
    var title = $(this).text();
    $(this).html('<input type="text" class="border-0" style="width:90px;" placeholder="' + title + '" /> ');
});
// $("#id_datatable_productos").dataTable({

//     initComplete: function () {
//         this.api()
//             .columns()
//             .every(function () {
//                 var that = this;

//                 $("input", this.header()).on("keyup change clear", function () {
//                     if (that.search() !== this.value) {
//                         that.search(this.value).draw();
//                     }
//                 });
//             });
//     },
//     language: {
//         lengthMenu: "Mostrar _MENU_ registros por pagina",
//         zeroRecords: "No se encontraron resultados en su busqueda",
//         searchPlaceholder: "Buscar registros",
//         info: "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
//         infoEmpty: "No existen registros",
//         infoFiltered: "(filtrado de un total de _MAX_ registros)",
//         search: "Buscar:",
//         paginate: {
//             first: "Primero",
//             last: "Último",
//             next: "Siguiente",
//             previous: "Anterior",
//         },
//     },
//     "ordering": false
// });
/*Fin Modal 1 */

$(document).on("click", ".js_seleccionar_modal_producto", function () {

    debugger;
    productos = $(this).val();
    split_productos = productos.split("*");
    // $("#hidden_id_producto").val(split_productos[0]);
    // $("#descripcion_producto").val(split_productos[2]);
    // $("#precio_unitario").val(split_productos[3]);
    $("#hidden_id_producto").val(split_productos[0]);
    $("#hidden_id_general").val(split_productos[1]);
    $("#hidden_codigo_producto").val(split_productos[2]);
    $("#descripcion_producto").val(split_productos[3]);
    $("#hidden_id_unidad_medida").val(split_productos[4]);
    $("#hidden_ds_unidad_medida").val(split_productos[5]);
    $("#hidden_id_marca_producto").val(split_productos[6]);
    $("#hidden_ds_marca_producto").val(split_productos[7]);
    $("#hidden_id_moneda").val(split_productos[8]);
    $("#tipo_moneda_origen").val(split_productos[9]);
    $("#precio_unitario").val(split_productos[10]);
    debugger;
    $("#opcion_target_producto").modal("hide");
});

$("#id_agregar_cotizacion").on("click", function (e) {

    validar_detalle_cotizacion();
    debugger
    var resume_table = document.getElementById("id_table_detalle_cotizacion");
    for (var i = 0, row; row = resume_table.rows[i]; i++) {
        console.log(`Fila': ${i}`);
        $("#hidden_item").val(i + 1);
    }

    var item = $("#hidden_item").val();
    var id_producto = $("#hidden_id_producto").val();
    var codigo_producto = $("#hidden_codigo_producto").val();
    var descripcion_producto = $("#descripcion_producto").val();
    var id_unidad_medida = $("#hidden_id_unidad_medida").val();
    var ds_unidad_medida = $("#hidden_ds_unidad_medida").val();
    var id_marca_producto = $("#hidden_id_marca_producto").val();
    var ds_marca_producto = $("#hidden_ds_marca_producto").val();
    var cantidad = $("#cantidad").val();
    var precio_unitario = $("#precio_unitario").val();
    var valor_venta = $("#valor_venta").val();

    if (resultado_campo == true) {
        html = "<tr>";
        html += "<td width='50px'><input type='text'   name='item[]' 	    value='" + item + "' id='item' class='form-control form-control-sm' readonly=''></td>";
        html += "    <input type='hidden' name='id_producto[]' 				value='" + id_producto + "' id='id_producto' >";
        html += "    <input type='hidden' name='codigo_producto[]' 			value='" + codigo_producto + "' id='codigo_producto' >";
        html += "<td><input type='hidden' name='descripcion_producto[]' 	value='" + descripcion_producto + "'>" + descripcion_producto + "</td>";
        html += "    <input type='hidden' name='id_unidad_medida[]' 		value='" + id_unidad_medida + "'>";
        html += "<td><input type='hidden' name='ds_unidad_medida[]' 		value='" + ds_unidad_medida + "'>" + ds_unidad_medida + "</td>";
        html += "    <input type='hidden' name='id_marca_producto[]' 		value='" + id_marca_producto + "'>";
        html += "<td><input type='hidden' name='ds_marca_producto[]'		value='" + ds_marca_producto + "'>" + ds_marca_producto + "</td>";
        html += "<td><input type='hidden' name='cantidad[]' 				value='" + cantidad + "'>" + cantidad + "</td>";
        html += "<td><input type='hidden' name='precio_unitario[]' 		    value='" + precio_unitario + "'>" + precio_unitario + "</td>";
        html += "<td><input type='hidden' name='valor_venta[]' 		        value='" + valor_venta + "'>" + valor_venta + "</td>";
        html += "<td><button type='button' class='btn btn-outline-danger btn-sm class_eliminar_detalle'><span class='fas fa-trash-alt'></span></button></td>";
        html += "</tr>";
        $("#id_table_detalle_cotizacion tbody").append(html);
        valor_venta_t();
        igv();
        precio_venta();
        limpiar_campos();
    }
});

$(document).on("click", ".js_seleccionar_modal_cotizacion", function () {

    debugger;

    validar_registrar();
    if (resultado_campo == true) {

        //CABECERA
        var nombre = $("#nombre").val();
        var num_documento = $("#num_documento").val();
        var telefono = $("#telefono").val();
        var correo = $("#correo").val();
        var direccion = $("#direccion").val();
        var igv = $("#igv").val();
        var valor_venta_t = $("#valor_venta_t").val();
        var precio_venta = $("#precio_venta").val();


        //DETALLE
        var item = Array.prototype.slice.call(document.getElementsByName("item[]")).map((o) => o.value);
        var id_producto = Array.prototype.slice.call(document.getElementsByName("id_producto[]")).map((o) => o.value);
        var codigo_producto = Array.prototype.slice.call(document.getElementsByName("codigo_producto[]")).map((o) => o.value);
        var descripcion_producto = Array.prototype.slice.call(document.getElementsByName("descripcion_producto[]")).map((o) => o.value);
        var id_unidad_medida = Array.prototype.slice.call(document.getElementsByName("id_unidad_medida[]")).map((o) => o.value);
        var ds_unidad_medida = Array.prototype.slice.call(document.getElementsByName("ds_unidad_medida[]")).map((o) => o.value);
        var id_marca_producto = Array.prototype.slice.call(document.getElementsByName("id_marca_producto[]")).map((o) => o.value);
        var ds_marca_producto = Array.prototype.slice.call(document.getElementsByName("ds_marca_producto[]")).map((o) => o.value);
        var cantidad = Array.prototype.slice.call(document.getElementsByName("cantidad[]")).map((o) => o.value);

        var precio_unitario = Array.prototype.slice.call(document.getElementsByName("precio_unitario[]")).map((o) => o.value);
        var valor_venta = Array.prototype.slice.call(document.getElementsByName("valor_venta[]")).map((o) => o.value);

        debugger;

        $.ajax({
            async: false,
            url: base_url + "C_inicio/registrar",
            type: "POST",
            dataType: "json",
            data: {

                //CABECERA
                nombre: nombre,
                num_documento: num_documento,
                telefono: telefono,
                correo: correo,
                direccion: direccion,
                igv: igv,
                valor_venta_t: valor_venta_t,
                precio_venta, precio_venta,

                //DETALLE
                item: item,
                id_producto: id_producto,
                codigo_producto: codigo_producto,
                descripcion_producto: descripcion_producto,
                id_unidad_medida: id_unidad_medida,
                ds_unidad_medida: ds_unidad_medida,
                id_marca_producto: id_marca_producto,
                ds_marca_producto: ds_marca_producto,
                cantidad: cantidad,
                precio_unitario: precio_unitario,
                valor_venta: valor_venta

            },
            success: function (data) {
                debugger;
                alert("COTIZACION REGISTRADA EXITOSA")
                $("#opcion_target_cotizacion").modal("hide");
            },
        });
    };
});

function valor_venta_t() {
    var acumulador = 0;
    $("#id_table_detalle_cotizacion tbody tr").each(function () {
        var posicion_valor_venta = $(this).find("td:eq(6)").text();
        valor_venta = Number(posicion_valor_venta);
        acumulador = (acumulador + valor_venta)
        $("#valor_venta_t").val(acumulador.toFixed(2));
    });
}

function igv() {
    var valor_venta_t = Number($("#valor_venta_t").val());
    var igv = (valor_venta_t * 0.18);
    $("#igv").val(igv.toFixed(2));
}

function precio_venta() {
    var valor_venta_t = Number($("#valor_venta_t").val());
    var igv = Number($("#igv").val());
    var precio_venta = valor_venta_t + igv;
    $("#precio_venta").val(precio_venta.toFixed(2));
}

function limpiar_campos() {

    var count = $('#id_table_detalle_cotizacion tr').length;

    $("#hidden_id_producto").val("");
    $("#hidden_codigo_producto").val("");
    $("#descripcion_producto").val("");
    $("#hidden_id_unidad_medida").val("");
    $("#hidden_ds_unidad_medida").val("");
    $("#hidden_id_marca_producto").val("");
    $("#hidden_ds_marca_producto").val("");
    $("#precio_unitario").val("");
    $("#cantidad").val("");
    $("#valor_venta").val("");

    if (count == 1) {
        $("#valor_venta_t").val("");
        $("#igv").val("");
    }
}

$(document).on("click", ".class_eliminar_detalle", function () {

    $(this).closest("tr").remove();
    generar_item();
    valor_venta_t();
    igv();
    precio_venta();
    limpiar_campos();
});

function generar_item() {

    debugger;
    var acumulador = 0;
    $("#id_table_detalle_cotizacion tbody tr").each(function () {
        acumulador = acumulador + 1;
        $(this).closest('tr').find('#item').val(acumulador);
    });
}

$("#cantidad").on("keyup", function () {

    var cantidad = $("#cantidad").val();
    var precio_unitario = $("#precio_unitario").val();

    if (precio_unitario == "") {
        alert("Seleccione un producto");
        $("#cantidad").val("");
    }
    else if (cantidad == "" || isNaN(cantidad)) {
        $("#cantidad").val("");
        $("#valor_venta").val("");
    } else {
        valor_venta = cantidad * precio_unitario
        $("#valor_venta").val(valor_venta.toFixed(2));

    }


});

function validar_detalle_cotizacion() {


    $("#id_table_detalle_cotizacion tbody tr").each(function () {
        id_producto_table = $(this).find("#id_producto").val();
        var id_producto = $("#hidden_id_producto").val();

        if (id_producto_table == id_producto) {
            codigo_producto_duplicado = false;
            return false;
        }

    });

    var descripcion_producto = $("#descripcion_producto").val();
    var precio_unitario = $("#precio_unitario").val();
    var cantidad = $("#cantidad").val();



    if (descripcion_producto == "") {
        alert("Seleccione un producto")
        resultado_campo = false;
    }
    else if (precio_unitario == "") {
        alert("Ingrese el precio unitario")
        resultado_campo = false;
    }
    else if (cantidad == "") {
        alert("Ingrese una Cantidad")
        resultado_campo = false;
    }
    else if (codigo_producto_duplicado == false) {
        alert("El producto: " + descripcion_producto + ", ya existe en la tabla detalle");
        resultado_campo = false;
        codigo_producto_duplicado = true;
    }
    else {
        resultado_campo = true;

    }

};

function validar_registrar() {

    var count_detalle_cotizacion = $('#id_table_detalle_cotizacion tr').length;
    var nombre = $("#nombre").val();
    var num_documento = $("#num_documento").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();
    var direccion = $("#direccion").val();


    if (nombre == "") {
        alert("Registre un nombre")
        resultado_campo = false;
    }
    else if (num_documento == "") {
        alert("Registre su RUC/DNI")
        resultado_campo = false;
    }
    else if (telefono == "") {
        alert("Registre su telefono")
        resultado_campo = false;
    }
    else if (correo == "") {
        alert("Registre su correo")
        resultado_campo = false;
    }
    else if (direccion == "") {
        alert("Registre su direccion")
        resultado_campo = false;
    }
    else if (count_detalle_cotizacion == "1") {
        alert("Debe registrar al menos 1 producto en el detalle de cotizacion")
        resultado_campo = false;
    }
    else {
        resultado_campo = true;
    }
}

$("#nombre").on("keyup", function (e) {

    debugger;
    var c = (e.keyCode ? e.keyCode : e.which);
    if ((c >= 65 & c <= 90) || c == 8 || c == 13 || c == 32 || c == 16 || c == 20 | c == 192) {
    } else {
        $("#nombre").val("");
    }

});

$("#num_documento").on("keyup", function (e) {

    var c = (e.keyCode ? e.keyCode : e.which);
    var tam = $("#num_documento").val();
    if ((c >= 48 & c <= 57) || c == 8 || c == 13) {
        if (tam.length > 11) {
            $("#num_documento").val("");
        }
    } else {
        $("#num_documento").val("");
    }
});

$("#telefono").on("keyup", function (e) {

    var c = (e.keyCode ? e.keyCode : e.which);
    var tam = $("#telefono").val();
    if ((c >= 48 & c <= 57) || c == 8 || c == 13) {
        if (tam.length > 9) {
            $("#telefono").val("");
        }
    } else {
        $("#telefono").val("");
    }
});
