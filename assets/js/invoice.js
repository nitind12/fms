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
										var i = obj.fee[f]['static_head_Amount'];
										var arr1 = i.split(',');
										for(f1=0; f1<arr1.length; f1++)
										{
											if(static_amount == 0){	
												static_amount=arr1[f1];
											}else {
												static_amount = parseInt(static_amount) + parseInt(arr1[f1]);
											}
										}
									}
							}
							str = str + "<td>"+static_amount+"</td>";


								
							for (f=0; f<obj.fee.length; f++)	
							{
									if(obj.students[s]['student_ID'] == obj.fee[f]['student_ID'])
									{
										var j = obj.fee[f]['flexible_head_ID'];
										var arr2 = j.split(',');
										for(f2=0; f2<arr2.length; f2++)
										{
											if(fid == '')
											{
												fid = arr2[f2];	
											} else fid = fid + ", " + arr2[f2];
										}
									}
							}								
							str = str + "<td>"+fid+"</td>";
					

						
							for (f=0; f<obj.fee.length; f++)	
							{
									if(obj.students[s]['student_ID'] == obj.fee[f]['student_ID'])
									{
										var k = obj.fee[f]['flexible_head_Amount'];
										var arr3 = k.split(',');
										for(f3=0; f3<arr3.length; f3++)
										{
											if(flexible_amount == 0){	
												flexible_amount=arr3[f3];
											}else {
												flexible_amount = parseInt(flexible_amount) + parseInt(arr3[f3]);
											}	
										}
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
													f_amount = flexible_amount;
													s_amount = static_amount;
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
								str = str + '<td> <span class="fa fa-print printreceipt" id="'+printid+'"></span></td>';
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
				
				
		str = str + '<table border="0" align="center" class="myfont table_" style="border:black solid 1px" cellpadding="10">';
			str = str + '<tbody>';str = str + '<center>';
			str = str + '<center>';
			str = str + '<div class="col-sm-12 hide_button" style="margin-top: 10px">';
            str = str + '<button class="btn btn-danger print_button" onclick="window.print();">Print</button>';
     	   	str = str + '</div>';
     	   	str = str + '</center>';
			str=str + '<tr>';



				str = str +	'<td>';
					str = str +	'<table border="0" class="myfont table_" style="border:black solid 0px">';

						str = str +	'<tbody>';
							str = str + '<tr>';
	    						str = str + '<td align="left">';
									//str= str + '<img src="https://school.teamfreelancers.com/assets_/default-demo/logo/4.jpg?ver=1.4" width="100">';
								str= str + '</td>';
								str = str + '<td style="text-align: center">';
									str = str + '<h1><strong>INVOICE</strong></h1>';
									str = str + '<h4><b>';
									str = str +obj.students['class_sess_ID'];
									str = str +'</b></h4>';
											str = str + '<b style="font-size: 12px"></b>';
												str = str + '<h4><b style="font-size: 12px">Fee Management System</b></h4>';
								str = str +'</td>';
								str = str+	'<td align="right">';
									//str = str+ '<img src="https://school.teamfreelancers.com/assets_/default-demo/logo/4.jpg?ver=1.4" width="100">';
								str = str + '</td>';
							str = str + '</tr>';
							str = str + '<tr>';
								str = str + '<td class="myline_" colspan="3"></td>';
							str = str + '</tr>';
							str = str + '<tr>';
								str = str + '<td colspan="3">';
								


									str = str +	'<table border="0" class="myfont table_" style="border:black solid 0px; font-size: 12px; font-weight: bold">';						
										str = str + '<tbody>';
											str = str + '<tr>';
												//str = str +'<th>INVOICE ID:<th>';
												//str = str + '<td>'+obj.students['invoice_ID']+'</td>';
												//str = str + '<td></td>';
												str = str +	'<td align="right">';
												str= str + '<h6><b>Date: '+obj.curr_date+'</b></h6>';
												str = str +'</td>';
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
									

									str = str + '<table border="0" class="myfont table_" style="border:black solid 0px; font-size: 12px; font-family: &quot;Times New Roman&quot;">';
										str = str + '<tbody>';
											str = str + '<tr>';
												str = str + '<td valign="top">';
													//str = str + '<div style="float:left; font-size: 15px; padding: 0px 0px 10px 0px">To,</div>';
													str = str + '<div style="clear: both"></div>';
													str = str + '<div style="display: block; float: left">';
													str = str + obj.students['first_Name']+' '+obj.students['last_Name'];
													str = str +'<br>Invoice Id:';
													str = str + obj.students['invoice_ID'];
													str = str + '<br>Registration No:';

													str = str + obj.students['student_ID'];
													str = str + '<br>';
													str = str + obj.students['class_sess_ID'];
													str = str + '<br>';
													str = str + '</div>';
												str = str + '</td>';
												//str = str +	'<td valign="top" align="right">';
												//str = str + '<b>Invoice Date: 17/04/2019</b>';
												//str = str + '</td>';
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
								str = str + '<table border="1" class="myfont table_" width="700" height="25" style="border:black solid 0px; font-size: 13px;">';
									str = str +	'<tbody>';
										str = str + '<tr>';
	   										str = str +	'<th class="myline_" colspan="3"></th>';
										str = str + '</tr>';

										str = str + '<tr style="font-weight: bold">';
											str = str + '<th class="sno_ bgcolor_">SNO</th>';
											str = str + '<th class="particular_ bgcolor_" style="width: 475px; padding: 0px 3px">Particulars</th>';
											str = str + '<th class="amount_ bgcolor_" style="text-align: right; padding: 0px 3px">Amount (Rs.)</th>';
										str = str + '</tr>';
										str = str + '<tr>';
											str = str + '<td class="sno_">1</td>';
												str = str + '<td style="width:60px; text-align: right;">';
												str = str + '<div class="content_" style="float: left"><span class="label_">Compulsory Heads</span></div>';
												str = str + '<div style="clear: both; padding:2px"></div>';
												var i = obj.students['static_head_ID'];
												var arr1 = i.split(',');
												var j = obj.students['static_head_Amount'];
												var arr2 = j.split(',');
												static_amount=0;
												for(k=0; k<arr1.length;k++)
												{
													str = str + '<div class="content_r" style="width:60%; float: left">';
													str = str + arr1[k];
													str = str +'<span class="times_">(1 time)</span>';
													str = str + '</div>';
													str = str + '<div class="content_r" style="text-align: left; width:30%; float: right">';
													//for(p=0; p<arr2.length;p++)
													//{
													str = str + arr2[k]+ "/-";
													//str = str + obj.students['static_head_Amount'];
													if(static_amount == 0){
													static_amount=arr2[k];
													}else {
													static_amount=parseInt(static_amount)+parseInt(arr2[k]);
													}
													//str = str + amount1+ "/-";
													str = str + '</div>';
												
												} 
											str = str + '</td>';
											str = str + '<td style="text-align: right; vertical-align: bottom;">'
											//static_amount='';
											//static_amount=obj.students['static_head_Amount'];
											str = str + static_amount+ "/-";
											str = str + '</td>';
										str = str + '</tr>';
										flexible_amount=0;
										fid='';
										fid=obj.students['flexible_head_ID'];
										if(fid != '')
										{
										str = str + '<tr>';
											str = str + '<td class="sno_">2</td>';
												str = str + '<td style="width:60px; text-align: right;">';
												str = str + '<div class="content_" style="float: left"><span class="label_">Flexible Heads</span></div>';
												str = str + '<div style="clear: both; padding:2px"></div>';
												str = str + '<div class="content_r" style="width:60%; float: left">';
												var m = obj.students['flexible_head_ID'];
												var arr3 = m.split(',');
												var n = obj.students['flexible_head_Amount'];
												var arr4 = n.split(',');
												for(a=0; a<arr3.length;a++)
												{
													str = str + '<div class="content_r" style="width:60%; float: left">';
													str = str + arr3[a];
													//str = str +'<span class="times_">(1 time)</span>';
													str = str + '</div>';
													str = str + '<div class="content_r" style="text-align: left; width:30%; float: right">';
													//for(p=0; p<arr2.length;p++)
													//{
													str = str + arr4[a]+ "/-";
													//str = str + obj.students['static_head_Amount'];
													if(flexible_amount == 0){
													flexible_amount=arr4[a];
													}else {
													flexible_amount=parseInt(flexible_amount)+parseInt(arr4[a]);
													}
													//str = str + amount1+ "/-";
													str = str + '</div>';
												
												} 
											str = str + '</td>';
											str = str + '<td style="text-align: right; vertical-align: bottom;">'
											
											str = str + flexible_amount+ "/-";
											str = str + '</td>';
										str = str + '</tr>';
									}
										due= 0;
										due= obj.students['previous_due_Amount'];
										if(due != 0)
										{
											str = str + '<tr>';
											str = str + '<td class="sno_">3</td>';
												str = str + '<td style="width:60px; text-align: right;">';
												str = str + '<div class="content_" style="float: right"><span class="label_">Previous due</span></div>';
												str = str + '<div style="clear: both; padding:2px"></div>';
												str = str + '<div class="content_r" style="width:60%; float: left">';
												str  = str + '</td>';	
												str = str + '<td style="text-align: right; vertical-align: bottom;">'
												str = str + due+ "/-";
												str = str + '</td>';
												str = str + '</div>';
											str = str + '</tr>';
										}
										str = str + '<tr>';
											str = str + '<td colspan="3">'
												str = str +'<div style="float: left; width: 545px; text-align: right; font-weight: bold">Total:</div>';
												str =str + '<div style="float: right; width: 140px; text-align: right;font-weight: bold">';
												//due = '';
												//due = obj.students['previous_due_Amount'];
												total_amount='';
												total_amount=parseInt(static_amount)+parseInt(flexible_amount)+parseInt(due);
												//-parseInt(discount_amount);

												str = str + total_amount+ "/-";
												str = str + '</div>';									
											str = str + '</td>';
										/*str = str + '</tr>';
										str = str + '<tr>';
											str = str + '<td colspan="3" style="height: 10px; text-align: right; vertical-align: top; font-size: 9px"></td>';
										str = str + '</tr>';
										str = str + '<tr>';
											str = str + '<td class="myline_" colspan="3"></td>';
										str = str + '</tr>';
										str = str + '<tr>';
											str = str + '<td colspan="3" style="height: 10px;"></td>';
										str = str + '</tr>';*/
										str = str + '<tr>';
											str = str + '<td colspan="3">';
												str = str + '<table border="0" cellpadding="5" class="table_" style="border:black solid 0px">';
													str = str + '<tbody>';
														str = str + '<tr>';
															str=  str + '<td colspan="2" class="address_contact" width="50%">';
																str = str + '<b>Address:</b><br>';

																str = str + '<b>Fee Management System, Haldwani, UTTARAKHAND (INDIA)</b>';		
																str = str + '<br>';
																str = str + '<b>Contact:</b>';
																str = str + '<b>9690051370</b>';
																str = str + '<br>';
																str = str + '<b>Email:</b>';
																str = str + '<b>fms@gmail.com<b>';
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
											str = str + '<td colspan="3" class="optionalNote" align="right" style="font-size: 10px">'

											str = str +	'<h6>*Optional fee is not compulsory for student. Those student enrolled for additional facilities are required to submit the same.</h6>';
											//str = str + 'align="right" style="font-size: 10px"';
											str = str + '<b>Note:</b>'
											str = str +'<h6> This Invoice is generated for 1 Month.<h6>';
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
	/*	str = str + '<tr>';
			str = str + '<td align="right" style="font-size: 10px">'
				str = str + '<b>Note</b>'
				str = str +'<h6> This Invoice is generated for 1 Year.<h6>';
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