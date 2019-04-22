$(function(){
	$('body').on('click','print',function(){
		alert(this.id);
		/*var str = this.id;
		var arr = str.split("_");
		var stdid = arr[0];
		var invid = arr[2];
		var url_ = site_url_ + "/receipt/get_invoice_data/"+invid+"/"+stdid;
		$.ajax({
			type: "GET",
			url: url_,
			success: function(data){
				//alert(data);
				//$('#invoicedatahere').html(data)
				var obj = JSON.parse(data);
				str = str + '<div class=" col-sm-offset-3 col-lg-8 col-lgg-offset-3 main dotted">';
				str = str + '<table><tr>';
				str = str + '<h4><td align="center" style="width: 150px;font-size:13px; padding: 0px 8px 0px 0px; vertical-align: middle">Invoice</span></td></h4>';

				/*str = str + '<table class="table table-bordered table-hover table-responsive">';
				str = str + '<tr>';
				str = str + '<th>INVOICE</th>';
				str = str + '<td></td>';
				//str = str + '<td>'+obj.invoice['invoice_ID']+'</td>';
				str = str + '</tr>';
				str = str + '</table>';
				$('#invoicedatahere').html(str);
			}
	});*/
});
});
