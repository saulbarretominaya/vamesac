
$(document).on("click", ".buscar", function () {

	var desde = $("#desde").val();
	var hasta = $("#hasta").val();

	debugger;

	$.ajax({
		//async: false,
		url: base_url + "reportes/C_nivel_productividad/index_buscar",
		type: "POST",
		//dataType: "json",
		dataType: "html",
		data: {
			desde: desde,
			hasta: hasta,
		},
		success: function (data) {
			debugger;
			//window.location.href = base_url + "C_nivel_productividad/index_buscar";
			$(".mostrar_registros").html(data);

		},
	});

});

$(document).on("click", ".restablecer", function () {

	// var desde = $("#desde").val();
	// var hasta = $("#hasta").val();

	debugger;

	$.ajax({
		//async: false,
		url: base_url + "reportes/C_nivel_productividad/index_restablecer",
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







