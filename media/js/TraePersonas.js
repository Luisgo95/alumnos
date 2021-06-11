$(document).ready(function() {
	$('#example').DataTable( {
		"bDeferRender": true,
		"sPaginationType": "full_numbers",
		"ajax": {
			//URL donde se extraen los datos
			"url": "../Controlador/Personas/FuncionTraer.php",
        	"type": "get"
		},
		//Nombres que se decclararon en FuncionTRaeUsuarios.php en la variable tabla
//antes del row
		"columns": [
		{ "data": "id" },
		{ "data": "Nombres" },
		{ "data": "Apellidos" },
		{ "data": "Nit" },
		{ "data": "Nacimiento" },
		{ "data": "Acciones" },
		{ "data": "Asignar" }
		
		],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		        '<option value="5">5</option>'+
		        '<option value="10">10</option>'+
		        '<option value="15">15</option>'+
		        '<option value="20">20</option>'+
		        '<option value="25">25</option>'+
		        '<option value="-1">All</option>'+
		        '</select> registros',
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	});
});
