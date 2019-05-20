$(function(){
		$('#ttreceipt').html("loading...");

		var url_ = site_url_ + "/classes/getclass/" ;
		var data_=$(this).serialize();
		
		$.ajax({
			type: "GET",
			url: url_,
			data:data_,
			success: function(data){
				//alert(data);
				var obj = JSON.parse(data);
				var str = '';
				str = str + '<table class="table table-bordered table-hover">';
				str = str + "<tr>";
				str = str + "<th> Class</th>";

				str = str + "</tr>";
				for(i=0; i<obj.clss_sesswise.length; i++){
					str = str + "<tr>";
					str = str + '<td class="rec" id="'+obj.clss_sesswise[i]['class_sess_ID']+'">';
					str = str  + obj.clss_sesswise[i]['class_sess_ID'];
					str = str + "</td>";

					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#ttreceipt').html(str);
			}
		});
		    return false;
});
$('body').on('click','.rec',function(){
		$('#ttreceipt1').html("loading...");
		//alert(this.id);
		var str=this.id;
		var url_ = site_url_ + "/receipt/getreceiptdata/"+str ;
		var data_=$(this).serialize();
		
		$.ajax({
			type: "GET",
			url: url_,
			data:data_,
			success: function(data){
				//alert(data);
				var obj = JSON.parse(data);
				var str = '';
				str = str + '<table class="table table-bordered">';
				str = str + "<tr>";
				str = str + "<th>Print</th>";
				str = str + "<th>Receipt ID</th>";
				str = str + "<th>class</th>";
				str = str + "<th>Reg.no</th>";
				str = str + "<th>Name</th>";
				str = str + "<th>Actual Fee</th>";
				str = str + "<th>Discount</th>";
				str = str + "<th>Fine</th>";
				str = str + "<th>Paid Amount</th>";
				str = str + "</tr>";
				for(i=0; i<obj.receiptdata.length; i++){
					str = str + "<tr>";
					str = str +'<td>';
					str = str + '<a href="'+site_url_+"/preceipt/print_/"+obj.receiptdata[i]['invoice_ID']+'" target="_blank"><span class="fa fa-print"></span></a>';
					str = str +'</td>';
					str = str + '<td>';
					str = str + obj.receiptdata[i]['receipt_ID'];
					str = str + '</td>';
					str = str + '<td>';
					str = str + obj.receiptdata[i]['class_sess_ID'];
					str = str + '</td>';
					str = str + '<td>';
					str = str + obj.receiptdata[i]['student_ID'];
					str = str + '</td>';
					str = str + '<td>';
					str = str + obj.receiptdata[i]['first_Name'] + ' ' + obj.receiptdata[i]['last_Name'];
					str = str + '</td>';
					str = str + '<td>';
					str = str + obj.receiptdata[i]['actual_paid_Amount'];
					str = str + '</td>';
					//str = str + '<td>';
					/*amount=obj.invoicedata[i]['actual_Amount'];
					discount=obj.invoicedata[i]['applicable_discount_Amount'];
					total=parseInt(amount)-parseInt(discount);
					str = str + '<td>';
					str = str + total;
					str = str + '</td>';*/
					str = str + '<td>';
					str = str + obj.receiptdata[i]['discount_Amount'];
					str = str + '</td>';
					str = str + '<td>';
					str = str + obj.receiptdata[i]['fine'];
					str = str + '</td>';
					str = str + '<td>';
					str = str + obj.receiptdata[i]['paid'];
					str = str + '</td>';
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#ttreceipt1').html(str);
			}
		});
		    return false;
});