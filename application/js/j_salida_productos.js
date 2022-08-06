/* CRUD */
$("#listar").dataTable({

	scrollX: true,
	scrollCollapse: true,
	paging: true,
	searching: true,

	language: {
		lengthMenu: "Mostrar _MENU_ registros por pagina",
		zeroRecords: "No se encontraron resultados en su busqueda",
		searchPlaceholder: "Buscar registros",
		info: "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
		infoEmpty: "No existen registros",
		infoFiltered: "(filtrado de un total de _MAX_ registros)",
		search: "Buscar:",
		paginate: {
			first: "Primero",
			last: "Último",
			next: "Siguiente",
			previous: "Anterior",
		},
	},
	"ordering": false
});

$(document).on("click", ".js_lupa_comprobantes_productos", function () {
	debugger;
	valor_id = $(this).val();
	$.ajax({
		url: base_url + "C_comprobantes/index_modal_productos",
		type: "POST",
		dataType: "html",
		data: {
			id_comprobante: valor_id
		},
		success: function (data) {
			$("#id_target_comprobantes_productos .modal-content").html(data);
		}
	});
});

$(document).on("click", ".btn_aprobar_estado", function () {

	debugger;

	var id_comprobante = $(this).closest('tr').find('#id_comprobante').val();
	var estado_orden = $(this).parents("tr").find("td")[9].innerText;


	if (estado_orden == "PENDIENTE POR ALMACEN") {
		alertify.confirm("Esta seguro que desea aprobarlo",
			function () {
				$.ajax({
					async: false,
					url: base_url + "C_salida_productos/aprobar_estado",
					type: "POST",
					dataType: "json",
					data: {
						id_comprobante: id_comprobante,
					},
					success: function (data) {
						window.location.href = base_url + "C_salida_productos";
					},
				});
			});
	} else if (estado_orden == "ORDEN DESPACHADA") {
		alert("Ya fue Despachada");
	}

});




