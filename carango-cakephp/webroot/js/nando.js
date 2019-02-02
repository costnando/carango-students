// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
  	"language": {
		"sEmptyTable": "Nenhum registro encontrado",
	    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
	    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
	    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
	    "sInfoPostFix": "",
	    "sInfoThousands": ".",
	    "sLengthMenu": "_MENU_ resultados por página",
	    "sLoadingRecords": "Carregando...",
	    "sProcessing": "Processando...",
	    "sZeroRecords": "Nenhum registro encontrado",
	    "sSearch": "Pesquisar",
	    "oPaginate": {
	        "sNext": "Próximo",
	        "sPrevious": "Anterior",
	        "sFirst": "Primeiro",
	        "sLast": "Último"
	    },
	    "oAria": {
	        "sSortAscending": ": Ordenar colunas de forma ascendente",
	        "sSortDescending": ": Ordenar colunas de forma descendente"
	    }
	}
  });
});

// Popover
$(function () {
	$('[data-toggle="popover"]').popover();
});

// Mask Inputs
$(function(){
	// CPF
	$('[name="cpf"]').mask('000.000.000-00');
	// CEP
	$('[name="cep"]').mask('00000-000');
	// Phone
	$('[name="phone"]').mask('(00) 0000-00009');
	$('[name="phone"]').on('keyup', function(){
		var count_input = $(this).val().replace(/\D/g, '').length;
		if(count_input == 11) {
			$(this).mask('(00) 00000-0000');
		} else {
			$(this).mask('(00) 0000-00009');
		}
	});
});

// Search CEP
$('[name="cep"]').on('paste keyup', function(e){
	e.preventDefault();
	var cep        = $(this).val().replace(/\D/g, '');
	var cep_length = cep.length;
	if(cep == '') {
		$('[name="address"]').val('');
		$('[name="district"]').val('');
		$('[name="city"]').val('');
		$('[name="state"]').val('');
	} else if(cep_length == 8) {
		$('[name="address"]').val('...');
		$('[name="district"]').val('...');
		$('[name="city"]').val('...');
		$('[name="state"]').val('...');
		$.ajax({
			url: 'https://viacep.com.br/ws/'+ cep +'/json/',
			dataType: 'JSON',
			success: function(data){
				if(data.erro == true) {
					alert('CEP não encontrado!');
					$('[name="address"]').val('');
					$('[name="district"]').val('');
					$('[name="city"]').val('');
					$('[name="state"]').val('');
				} else {
					$('[name="address"]').val(data.logradouro);
					$('[name="district"]').val(data.bairro);
					$('[name="city"]').val(data.localidade);
					$('[name="state"]').val(data.uf);
				}
			}
		});
	}
});