$(function(){
$('#frmAmount').submit(function(){
		$('#totaldisplayhere').html("Loading...");

		var url_ = site_url_ + "/totaldisplay/total/";
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
				str = str + '<table class="table table-bordered table-hover table-responsive print_invoice">';
				str = str + '<tr>';
				str = str + '<th>Receipt ID</th>';
				str = str + '<th>Paid Date</th>';
				str = str +	'<th>Class</th>';
				str = str + '<th>Invoice</th>';
				str = str + '<th>Collection(Rs.)</th>';
				str = str + '<th>Mode</th>';
				str = str +'</tr>';
				for(s=0;s<obj.studenttotal.length;s++)
				{
					for(r=0;r<obj.receipttotal.length;r++)
				{
					str = str +'<tr>';
					if(obj.studenttotal[s]['student_ID'] == obj.receipttotal[r]['student_ID']){
					str = str + "<td>"+obj.receipttotal[r]['receipt_ID']+"</td>";
					str = str + "<td>"+obj.receipttotal[r]['receipt_ID']+"</td>";
					str = str + "<td>"+obj.receipttotal[r]['class_ID']+"</td>";
					str = str + "<td>"+obj.receipttotal[r]['invoice_ID']+"</td>";
					str = str + "<td>"+obj.receipttotal[r]['paid']+"</td>";
					str = str + "<td>"+obj.receipttotal[r]['fee_Mode']+"</td>";
					}
					str = str +'</tr>';

				}
			}
				str = str +'</table>';	
				$('#totaldisplayhere').html(str);
			}
		});
		    return false;
	});
});
