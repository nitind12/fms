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
				str = str + '<table class="table table-bordered table-hover table-responsive">';
				str = str + '<tr>';
				str = str + '<th>Reg.No</th>';
				str = str + '<th>Name</th>';
				str = str +	'<th>Discount</th>';
				str = str + '<th>Fix Fee</th>';
				str = str + '<th>Opted Fee</th>';
				str = str + '<th>Amount</th>';
				str = str +'<th>Total Fee</th>';
				str = str +'<th>Invoice</th>';
				str = str +'<th>Undo Invoice</th>';
				str = str +'<th>Dues</th>';
				str = str +'<th>Pay Fee</th>';
				str = str +'<th>Print Receipt</th>';
				str = str +'</tr>';
				//str = str + "</table>";
				for (s=0; s<obj.students.length; s++)
				{
					str = str + "<tr>";
					//for(i=0; i<obj.invoice.length; i++)
					//{
					//	if(obj.students[s]['student_ID'] == obj.invoice[i]['student_ID'])
					//	{
				
							did='';
							fid='';
							d_amount='';
							static_amount='';
							flexible_amount='';
							str = str + "<td>"+obj.students[s]['student_ID']+"</td>";
							str = str + "<td>"+obj.students[s]['first_Name']+' '+obj.students[s]['last_Name']+"</td>"; 						
							

							for (d=0; d<obj.discount.length; d++)
							{
									if(obj.students[s]['student_ID'] == obj.discount[d]['student_ID'])
									{
										if(did == '')
										{
											did = obj.discount[d]['discount_Type'];	
										} else did =  did +','+ obj.discount[d]['discount_Type'];
									}
							}
							str = str + "<td>"+did+"</td>";

							

							for (f=0; f<obj.fee.length; f++)	
							{
									if(obj.students[s]['student_ID'] == obj.fee[f]['student_ID'])
									{
										static_amount = obj.fee[f]['static_head_Amount'];
									}
							}
							str = str + "<td>"+static_amount+"</td>";


								
							for (f=0; f<obj.fee.length; f++)	
							{
									if(obj.students[s]['student_ID'] == obj.fee[f]['student_ID'])
									{
										if(fid == '')
										{
											fid = obj.fee[f]['fee_Head'];	
										} else fid = fid + ", " + obj.fee[f]['fee_Head'];
									}
							}								
							str = str + "<td>"+fid+"</td>";
					

						
							for (f=0; f<obj.fee.length; f++)	
							{
									if(obj.students[s]['student_ID'] == obj.fee[f]['student_ID'])
									{
										flexible_amount = obj.fee[f]['flexible_head_Amount'];
									}
							} 
							str = str + "<td>"+flexible_amount+"</td>";
						


							for (d=0; d<obj.discount.length; d++)
							{
									if(obj.students[s]['student_ID'] == obj.discount[d]['student_ID'])
									{
										if(d_amount == 0)
										{
											d_amount = obj.discount[d]['discount_Amount'];	
										} else d_amount =parseInt(d_amount) + parseInt(obj.discount[d]['discount_Amount']);
									}
							}
	
						
							f_amount='';
							s_amount='';
							total_fee='';	
							for (f=0; f<obj.fee.length; f++)	
							{
										
									if(obj.students[s]['student_ID'] == obj.fee[f]['student_ID'])
									{
													f_amount = obj.fee[f]['flexible_head_Amount'];
													s_amount = obj.fee[f]['static_head_Amount'];
													if(d_amount == ''){
														s_amount = parseInt(s_amount) - '';
													}else s_amount = parseInt(s_amount) - parseInt(d_amount);
													if(f_amount == ''){
															total_fee=s_amount;
													}else {total_fee = parseInt(s_amount) + parseInt(f_amount);}
												
									}
							}
							str = str + "<td>"+total_fee+"</td>";

						
								icon="glyphicon-lock";
								invid = 'x';
								printid = 'x'; 
								for(i=0; i<obj.invoice.length; i++)
								{	
									if(obj.students[s]['student_ID'] == obj.invoice[i]['student_ID'])
									{
													icon = "glyphicon-print";
													invid = 'invid_'+obj.invoice[i]['invoice_ID'];
													printid = 'print_'+obj.invoice[i]['invoice_ID'];
													break;
							    	}
							    }

								if(invid == 'x'){    
								str = str + '<td><span class="glyphicon ' + icon + '"></span></td>';
								}
								else {str = str + '<td><span class="fa fa-print printinvoice" id="'+obj.students[s]['student_ID']+"_"+invid+'"  ></span></td>';
								}
								str= str +"<td></td>";
								dues='';
								for (f=0; f<obj.fee.length; f++)	
							{
									if(obj.students[s]['student_ID'] == obj.fee[f]['student_ID'])
									{
										
										dues = obj.fee[f]['due_Amount'];
									}
							} 
							str = str + "<td>"+dues+"</td>";
							if(invid == 'x'){
								str = str + '<td></td>';
								str = str + '<td></td>';
							} else {
								str = str + '<td> <span class="fa fa-play payhere" id="'+obj.students[s]['student_ID']+"_"+invid+'"  ></span></td>';
								str = str + '<td> <span class="fa fa-print printreceipt" id="'+obj.students[s]['student_ID']+"_"+invid+'"></span></td>';
							}
					//	}		

					   /* else
					    {
							str = str + "<td>"+obj.students[s]['student_ID']+"</td>";
							str = str + "<td>"+obj.students[s]['first_Name']+' '+obj.students[s]['last_Name']+"</td>";
							str = str + "<td></td>";
							str = str + "<td></td>";
							str = str + "<td></td>";
							str = str + "<td></td>";
							str = str + "<td></td>";
							str = str + '<td><span class="glyphicon glyphicon-lock"></span></td>';
							str = str + "<td></td>";
							str = str + "<td></td>";
							str = str + "<td></td>";
							str = str + '<td><span class="fa fa-print"></span></td>';
						}*/
					//}
					
					str = str + "</tr>";
				}
				str = str + "</table>"
					$('#invoicedatahere').html(str);
					//str = str + '</table>';
				}
		});
	return false;
	});

	$('body').on('click','.printinvoice',function(){
 
		//alert(this.id);

		var str = this.id;
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
				var str = '';
				
		str = str + '<table border="1" class="myfont table_" cellpadding="10">';

			str = str + '<tbody>';
			str=str + '<tr>';

				str = str +	'<td>';
					str = str +	'<table border="0" class="myfont table_" style="border:#009900 solid 0px">';

						str = str +	'<tbody>';
							str = str + '<tr>';
	    						str = str + '<td align="left">';
									//<img src="https://school.teamfreelancers.com/assets_/default-demo/logo/4.jpg?ver=1.4" width="100">
								str= str + '</td>';
								str = str + '<td style="text-align: center">';
									str = str + '<h1>INVOICE</h1>';
											str = str + '<b style="font-size: 12px"></b>';
												str = str + '<h4><b style="font-size: 12px">Fee Management System</b></h4>';
								str = str +'</td>';
								str = str+	'<td align="right">';
									//<img src="https://school.teamfreelancers.com/assets_/default-demo/logo/4.jpg?ver=1.4" width="100">
								str = str + '</td>';
							str = str + '</tr>';
							str = str + '<tr>';
								str = str + '<td class="myline_" colspan="3"></td>';
							str = str + '</tr>';
							str = str + '<tr>';
								str = str + '<td colspan="3">';
									str = str +	'<table border="0" class="myfont table_" style="border:#009900 solid 0px; font-size: 12px; font-weight: bold">';						
										str = str + '<tbody>';
											str = str + '<tr>';
												str = str +'<td>Invoice Id:'+obj.students['invoice_ID']+'</td';
												str = str + '<td></td>';
												str = str +	'<td align="right">Date: 20/04/2019</td>';
											str = str + '</tr>';
										str = str +	'</tbody>';
									str = str + '</table>';
								str = str + '</td>';
							str = str + '</tr>';
							str = str + '<tr>';
								str = str +	'<td class="myline_" colspan="3"></td>';
							str = str + '</tr>';
							str = str + '<tr>';
								str = str +	'<td style="height: 5px" colspan="3"></td>';
							str = str + '</tr>';
							str = str + '<tr>';
	   							str = str +	'<td colspan="3" valign="top">';
									str = str + '<table border="0" class="myfont table_" style="border:#009900 solid 0px; font-size: 12px; font-family: &quot;Times New Roman&quot;">';
										str = str + '<tbody>';
											str = str + '<tr>';
												str = str + '<td valign="top">';
													str = str + '<div style="float:left; font-size: 15px; padding: 0px 0px 10px 0px">To,</div>';
													str = str + '<div style="clear: both"></div>';
													str = str + '<div style="display: block; float: left">';
													//Aditya Singh xx,<br>
													//Reg. No. - 2018071438,<br>
													//CLASS (Nursery),<br>
													str = str + '</div>';
												str = str + '</td>';
												str = str +	'<td valign="top" align="right">';
												str = str + '<b>Invoice Date: 17/04/2019</b>';
												str = str + '</td>';
											str = str + '</tr>';
										str = str + '</tbody>';
									str = str + '</table>';
								str = str + '</td>';
							str = str + '</tr>';
							str = str + '<tr>';
								str = str + '<td style="height: 5px" colspan="3"></td>';
							str = str + '</tr>';
							str = str + '<tr>';
	    						str = str + '<td colspan="3">';
								str = str + '<table border="0" class="myfont table_" width="700" height="25" style="border:#009900 solid 0px; font-size: 13px;">';
									str = str +	'<tbody>';
										str = str + '<tr>';
	   										str = str +	'<th class="myline_" colspan="3"></th>';
										str = str + '</tr>';

										str = str + '<tr style="font-weight: bold">';
											str = str + '<th class="sno_ bgcolor_">SNO</th>';
											str = str + '<th class="particular_ bgcolor_" style="width: 475px; padding: 0px 3px">Particulars</th>';
											str = str + '<th class="amount_ bgcolor_" align="right" style="padding: 0px 3px">Amount (Rs.)</th>';
										str = str + '</tr>';
										str = str + '<tr>';
											str = str + '<td class="sno_">1</td>';
												str = str + '<td style="width:60px; text-align: right;">';
												str = str + '<div class="content_"><span class="label_">Compulsory Heads</span><br>ADMISSION<span class="times_">(1 time)</span><br></div>';
												str = str + '<div class="content_r"><br>1000.00<br></div>';
											str = str + '</td>';
											str = str + '<td style="text-align: right; vertical-align: bottom;">1000.00</td>';
										str = str + '</tr>';	
										str =str +'<tr>';
											str = str + '<td colspan="3" style="padding:10px 0px"></td>';
										str = str + '</tr>';
										str =str + '<tr style="height: 50px;">';
											str = str + '<td colspan="3">&nbsp;</td>';
										str = str + '</tr>';
										str = str + '<tr>';
											str = str + '<td colspan="3" style="height: 120px"></td>';
										str  = str + '</tr>';
										str = str + '<tr>';
											str = str + '<td class="myline_" colspan="3"></td>';
										str =  str + '</tr>';
										str = str + '<tr>';
											str = str + '<td colspan="3">'
												str = str +'<div style="float: left; width: 545px; text-align: right; font-weight: bold">Total</div>';
												str =str + '<div style="float: right; width: 140px; text-align: right;font-weight: bold">1000.00</div>';									
											str = str + '</td>';
										str = str + '</tr>';
										str = str + '<tr>';
											str = str + '<td colspan="3" style="height: 10px; text-align: right; vertical-align: top; font-size: 9px"></td>';
										str = str + '</tr>';
										str = str + '<tr>';
											str = str + '<td class="myline_" colspan="3"></td>';
										str = str + '</tr>';
										str = str + '<tr>';
											str = str + '<td colspan="3" style="height: 10px;"></td>';
										str = str + '</tr>';
										str = str + '<tr>';
											str = str + '<td colspan="3">';
												str = str + '<table border="0" cellpadding="5" class="table_" style="border:#009900 solid 0px">';
													str = str + '<tbody>';
														str = str + '<tr>';
															str=  str + '<td colspan="2" class="address_contact" width="50%">';
																str = str + '<b>Address</b><br>';

															//The Demo School, Haldwani, UTTARAKHAND (INDIA)															<br>
																str = str + '<b>Contact</b>: 90129 72556<br>';
																str = str + '<b>Email</b>: ttchld@gmail.com<br>';
															str = str + '</td>';
															str = str + '<td colspan="2" width="50%" align="right" valign="bottom" style="font-size: 12px">Authorized Signatory</td>';
															str = str + '</td>';
														str = str + '</tr>';
													str = str +'</tbody>';
												str = str + '</table>';
											str = str + '</td>';
										str = str + '</tr>';
										str = str + '<tr>';
											str = str + '<td class="myline_" colspan="4"></td>';

										str = str + '</tr>';
										str = str + '<tr>';
											str = str + '<td colspan="3" class="optionalNote">'
												//*Optional fee is not compulsory for student. Those student enrolled for additional facilities are required to submit the same.
											str = str + '</td>';
										str = str + '</tr>';
									str = str +'</tbody>';
								str = str + '</table>';
							str = str + '</td>';
						str = str + '</tr>';

					str = str + '</tbody>';
				str = str + '</table>';
			str =str + '</td>';
		str = str + '</tr>';
		str = str + '<tr>';
			str = str + '<td align="right" style="font-size: 10px">'
				str = str + '<b>Note</b>'
				//: This Invoice is generated for 1 Month.
			str = str + '</td>';
		str = str +'</tr>';
	str = str +'</tbody>'
str = str +'</table>'		
				/*str= str + '<>';
				str = str + '<tr>';
				str = str + '<th>INVOICE</th>';
				str = str + '</tr>';
				str = str + '</table>';*/
				$('#invoicedatahere').html(str);
			
			}
	});
});
});