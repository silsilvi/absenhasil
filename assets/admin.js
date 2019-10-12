//date choice sa report
$('#tglp').change(function (e) {
	e.preventDefault();
	var date = $('#tglp').val();
	if(date == '' || date == null){
		$('#hapusscan').hide();
	}else{
		$('#hapusscan').show();
	}

	$.ajax({
		url: 'data/daily_report.php',
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