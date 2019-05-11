$(function(){
		$('#totalclass').html("loading...");

		var url_ = site_url_ + "/displaydue/getduedata/" ;
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
				str = str + "<th> Class</th>";

				str = str + "</tr>";
				for(i=0; i<obj.class_in_session.length; i++){
					str = str + "<tr>";
					str = str + '<td class="classes" id="'+obj.class_in_session[i]['class_sess_ID']+'">';
					str = str  + obj.class_in_session[i]['class_sess_ID']; 
					str = str + '</td>';

					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#totalclass').html(str);
			}
		});
		    return false;
	});
$('body').on('click','.classes',function(){

		$('#totaldues').html("loading...");
		//alert(this.id);
		str = this.id;
		var url_ = site_url_ + "/displaydue/getdata/"+str ;
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
				/*str = str + '<tr>';
					str = str + '<th>';
					str = str  + 'Total Dues(s) in '+obj.invoicedata[i]['class_sess_ID'] +'in'+obj.invoicedata[i]['session_ID'] ; 
					str = str + '</th>';
				str = str + '</tr>'*/ 
				

				str = str + "<tr>";
					str = str + "<th>Invoice Id</th>";
				//str = str + "<th>Invoice Id</th>";
					str = str + "<th>Duration</th>";
					str = str + "<th>Months</th>";
					str = str + "<th>Reg Id</th>";
					str = str + "<th>Name</th>";
					str = str + "<th>Applied Heads</th>";
					str = str + "<th>Amount Due(Rs.)</th>";
				str = str + "</tr>";

				for(i=0; i<obj.invoicedata.length; i++){
				str = str + "<tr>";
					str = str + '<td>';
					str = str  + obj.invoicedata[i]['invoice_ID']; 
					str = str + '</td>';
					str = str + '<td>';
					str = str  + obj.invoicedata[i]['year_From']+','+obj.invoicedata[i]['month_From'] +'to';
					str = str + '<br>';
					str = str +  obj.invoicedata[i]['year_To']+','+obj.invoicedata[i]['month_To']; 
					str = str + '</td>';
					str = str + '<td>1</td>';
					str = str + '<td>';
					str = str  + obj.invoicedata[i]['student_ID']; 
					str = str + '</td>';
					str = str + '<td>';
					str = str  + obj.invoicedata[i]['first_Name']+' '+ obj.invoicedata[i]['last_Name']; 
					str = str + '</td>';
					str = str + '<td>';
					str = str  + obj.invoicedata[i]['static_head_ID']; 
					str = str + '</td>';
					str = str + '<td>';
					str = str  + obj.invoicedata[i]['due_Amount']; 
					str = str + '</td>';
				str = str + "</tr>";
				}
				str = str + "</table>";
				$('#totaldues').html(str);
			}
		});
		    return false;
	});
