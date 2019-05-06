/*var str = '';
		//str = str + '<span class="@media">'
		//str = str + '</span>';
		//str =str + '<div id="printme" >';		
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
											str = str + '<td class="sno_">1.</td>';
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
											str = str + '<td class="sno_">2.</td>';
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
											str = str + '<td class="sno_">3.</td>';
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
										/*str = str + '<tr>';
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
		str = str +'</tr>';*/
	/*str = str +'</tbody>';
str = str +'</table>';		
//str = str +'</div>';
			$('#invoicedatahere').html(str);*/
			