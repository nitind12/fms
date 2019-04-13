$(function(){
$('#frmInvoice').submit(function(){
		$('#invoicedatahere').html("Loading...");

		var url_ = site_url_ + "/receipt/get_data/";
		var data_ = $(this).serialize();
		
		$.ajax({
			type: "GET",
			url: url_,
			data: data_,
			success: function(data){
				//alert(data);
				//$('#invoicedatahere').html(data)
				var obj = JSON.parse(data);
				var str = '';
