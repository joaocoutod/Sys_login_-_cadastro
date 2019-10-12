
function refresh(){
	location.href='index.php';
}

$("#login").submit(function(e){
	var formData = new FormData($(this)[0]);
	$.ajax({
		url: "app/valida.php?login",
		type: "POST",
		data: formData,
		async: true,
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function(){  $('#loading').show();  },
		beforeSubmit: function(){  $('#loading').show();  },
		success: function(msg){
						    $('#resul1').html(msg);
							$('#loading').hide();
					     }
		});
		e.preventDefault();
	});
		
$("#cadastro").submit(function(e){
	var formData = new FormData($(this)[0]);
	$.ajax({
		url: "app/valida.php?cadastro",
			type: "POST",
			data: formData,
			async: true,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend: function(){$('#loading').show();},
			beforeSubmit: function(){$('#loading').show();},
			success: function(msg){
							$('#resul2').html(msg);
							$('#loading').hide();
			}
	});
	e.preventDefault();
});