$(function(){
		$('#ttinvoice').html("loading...");

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
					str = str + '<td class="invc"  id="'+obj.clss_sesswise[i]['class_sess_ID']+'">';
					str = str  + obj.clss_sesswise[i]['class_sess_ID']; 
					str = str + "</td>";

					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#ttinvoice').html(str);
			}
		});
		    return false;
});
$('body').on('click','.invc',function(){
		$('#ttinvoice1').html("loading...");
		//alert(this.id);
		str = this.id;
		var url_ = site_url_ + "/invoice/getinvoicedata/"+str ;
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
				str = str + '<th>Print Invoice</th>';
				str = str + "<th>Invoice ID</th>";
				str = str + "<th>class</th>";
				str = str + "<th>Reg.no</th>";
				str = str + "<th>Name</th>";
				str = str + "<th>Previous Due</th>";
				str = str + "<th>Invoice Amount</th>";
				str = str + "<th>Need To Pay</th>";
				str = str + "</tr>";
				for(i=0; i<obj.invoicedata.length; i++){
					str = str + "<tr>";
					str = str + '<td>';
					str = str + '<a href="'+site_url_+"/invoiceprint/index/"+'invid_'+obj.invoicedata[i]['invoice_ID']+'" target="_blank"><span class="fa fa-print"></span></a>';
					str = str + '</td>';
					str = str + '<td>';
					str = str + obj.invoicedata[i]['invoice_ID'];
					str = str + '</td>';
					str = str + '<td>';
					str = str + obj.invoicedata[i]['class_sess_ID'];
					str = str + '</td>';
					str = str + '<td>';
					str = str + obj.invoicedata[i]['student_ID'];
					str = str + '</td>';
					str = str + '<td>';
					str = str + obj.invoicedata[i]['first_Name'] + ' ' + obj.invoicedata[i]['last_Name'];
					str = str + '</td>';
					str = str + '<td>';
					str = str + obj.invoicedata[i]['previous_due_Amount'];
					str = str + '</td>';
					//str = str + '<td>';
					amount=obj.invoicedata[i]['actual_Amount'];
					discount=obj.invoicedata[i]['applicable_discount_Amount'];
					total=parseInt(amount)-parseInt(discount);
					str = str + '<td>';
					str = str + total;
					str = str + '</td>';
					str = str + '<td>';
					str = str + obj.invoicedata[i]['due_Amount'];
					str = str + '</td>';
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#ttinvoice1').html(str);
			}
		});
		    return false;
});