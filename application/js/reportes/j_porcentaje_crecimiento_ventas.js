


$(document).on("click", ".buscar", function () {

	var desde = $("#desde").val();
	var hasta = $("#hasta").val();

	var desde2 = $("#desde2").val();
	var hasta2 = $("#hasta2").val();

	debugger;

	$.ajax({
		//async: false,
		url: base_url + "reportes/C_porcentaje_crecimiento_ventas/index_buscar",
		type: "POST",
		//dataType: "json",
		dataType: "html",
		data: {
			desde: desde,
			hasta: hasta,
			desde2: desde2,
			hasta2: hasta2,
		},
		success: function (data) {
			debugger;
			//window.location.href = base_url + "C_nivel_productividad/index_buscar";
			$(".mostrar_registros").html(data);

		},
	});

});

$(document).on("click", ".calcular", function () {
	debugger;

	var item = Array.prototype.slice.call(document.getElementsByName("item[]")).map((o) => o.value);
	var fecha_emision = Array.prototype.slice.call(document.getElementsByName("fecha_emision[]")).map((o) => o.value);
	var precio_venta = Array.prototype.slice.call(document.getElementsByName("precio_venta[]")).map((o) => o.value);

	var fecha_emision2 = Array.prototype.slice.call(document.getElementsByName("fecha_emision2[]")).map((o) => o.value);
	var precio_venta2 = Array.prototype.slice.call(document.getElementsByName("precio_venta2[]")).map((o) => o.value);



	$.ajax({
		async: false,
		url: base_url + "reportes/C_porcentaje_crecimiento_ventas/insertar_temporal",
		type: "POST",
		dataType: "json",
		dataType: "html",
		data: {
			item: item,
			fecha_emision: fecha_emision,
			precio_venta: precio_venta,
			fecha_emision2: fecha_emision2,
			precio_venta2: precio_venta2
		},
		success: function (data) {
			debugger;
			window.location.href = base_url + "reportes/C_porcentaje_crecimiento_ventas/listar";
			// $(".mostrar_registros").html(data);

		},
	});

});

$(document).on("click", ".restablecer", function () {

	// var desde = $("#desde").val();
	// var hasta = $("#hasta").val();

	debugger;

	$.ajax({
		//async: false,
		url: base_url + "reportes/C_porcentaje_crecimiento_ventas/index_restablecer",
		type: "POST",
		//dataType: "json",
		dataType: "html",
		// data: {
		// 	desde: desde,
		// 	hasta: hasta,
		// },
		success: function (data) {
			debugger;
			//window.location.href = base_url + "C_nivel_productividad/index_buscar";
			$(".mostrar_registros").html(data);

		},
	});

});








