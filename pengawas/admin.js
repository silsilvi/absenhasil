$('#tglp').change(function (e) {
	e.preventDefault();
	var date = $('#tglp').val();
	if(date == '' || date == null){
		$('hapusscanner').hide();
	}else{
		$('hapusscanner').show();
	}

	$.ajax({
		url: 'data/absensanner.php',
		type: 'post',
		data: {
			date:date
		},
		success: function (data) {
			$('#table-sales').html(data);
		},
		error: function(){
			eMsg(330);
		}
	});	
});