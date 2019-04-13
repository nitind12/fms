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
								for(i=0; i<obj.invoice.length; i++)
								{	
									if(obj.students[s]['student_ID'] == obj.invoice[i]['student_ID'])
									{
													icon = "glyphicon-print";
													break;
							    	}
							    }
								str = str + '<td><span class="glyphicon ' + icon + '"></span></td>';
								
								str = str + "<td></td>";

								due_Amount='';
								for (f=0; f<obj.fee.length; f++)	
							{
									if(obj.students[s]['student_ID'] == obj.fee[f]['student_ID'])
									{
										dues = obj.fee[f]['due_Amount'];
									}
							} 
							str = str + "<td>"+dues+"</td>";

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

						
								
								str = str + '<td><a href="prnreceipt"> <span class="fa fa-print printreceipt"  ></span></a></td>';
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
});