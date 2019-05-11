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
				str = str + '<table class="table table-bordered table-hover table-responsive print_invoice">';
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
							flexible_amount=0;
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

							
												

							for (f=0; f<obj.static.length; f++)	
							{
									if(obj.students[s]['class_sess_ID'] == obj.static[f]['class_sess_ID'])
									{
										var i = obj.static[f]['amount'];
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


								
							for (f=0; f<obj.flexible.length; f++)	
							{
									if(obj.students[s]['student_ID'] == obj.flexible[f]['student_ID'])
									{
										var j = obj.flexible[f]['fee_Head'];
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
					

						
							for (f=0; f<obj.flexible.length; f++)	
							{
									if(obj.students[s]['student_ID'] == obj.flexible[f]['student_ID'])
									{
										var k = obj.flexible[f]['amount'];
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
	
						
							f_amount=0;
							s_amount='';
							total_fee='';	
							for (s1=0; s1<obj.static.length; s1++)
							{
								for (f=0; f<obj.flexible.length; f++)
								{
										
									if(obj.students[s]['class_sess_ID'] == obj.static[s1]['class_sess_ID'])
									{
										s_amount = static_amount;
										if(obj.students[s]['student_ID'] == obj.flexible[f]['student_ID'])
										{	
													f_amount = flexible_amount;
										}			
													if(d_amount == ''){
														s_amount = parseInt(s_amount) - '';
													}else s_amount = parseInt(s_amount) - parseInt(d_amount);
													if(f_amount == 0){
															total_fee=s_amount;
													}else {total_fee = parseInt(s_amount) + parseInt(f_amount);}
												
									}
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
								str = str + '<td><span class="fa fa-lock invoicelock"  id="'+obj.students[s]['student_ID']+"_"+invid+'"></span></td>';
								str= str +'<td><span class="fa" id="undo_'+obj.students[s]['student_ID']+'" ></span></td>';
								}
								else {//str = str + '<td><span class="fa fa-print printinvoice" id="'+obj.students[s]['student_ID']+"_"+invid+'"  ></span></td>';
								str = str +'<td><a href="'+site_url_+"/invoiceprint/index/"+invid+'" target="_blank"><span class="fa fa-print printinvoice"></span></a></td>';
								str= str +'<td><span class="fa fa-undo undo_invoice" id="undo_'+invid+'" ></span></td>';
								}
								
								dues='';
								for (f=0; f<obj.invoice.length; f++)	
							{
									if(obj.students[s]['student_ID'] == obj.invoice[f]['student_ID'])
									{
										
										dues = obj.invoice[f]['due_Amount'];
									}
							}
							if(invid=='x'){
							str = str + '<td class="due" id="due_'+invid+'">'+dues+'</td>';
							}
							else{
							str = str + '<td class="due" id="due_'+invid+'">'+dues+'</td>';
							}
							if(invid == 'x'){
								//str = str + '<td></td>';
								str= str +'<td><span class="fa" id="payhere_'+obj.students[s]['student_ID']+'" ></span></td>';
								str = str + '<td><span class="fa fa-print"></span></td>';
							} else {
								arr=invid.split("_");
								str = str + '<td> <span class="fa fa-play payhere" id="payhere_'+obj.students[s]['student_ID']+"_"+invid+'"  ></span></td>';
								str = str + '<td> <a href="'+site_url_+'/preceipt/print_/'+arr[1]+'"  target="_blank" <span class="fa fa-print"></span></a></td>';
							}
	
					
					str = str + "</tr>";
				}
				str = str + "</table>"
					$('#invoicedatahere').html(str);
					//str = str + '</table>';
				}
		});
	return false;
	});

	/*$('body').on('click','.printinvoice',function(){
 
		//alert(this.id);

		var str = this.id;
		var arr = str.split("_");
		var stdid = arr[0];
		var invid = arr[2];
		var url_ = site_url_ + "/invoiceprint/index/"+stdid+"/"+invid;
		var data_ = $(this).serialize();
		$.ajax({
			type: "GET",
			url: url_,
			data: data_,
			success: function(data){
				//alert(data);
				//$('#invoicedatahere').html(data)
				var obj = JSON.parse(data);
			}
		});
	return false;
});*/
	$('body').on('click','.invoicelock',function(){
	 
			//alert(this.id);

			var str = this.id;
			var arr = str.split("_");
			var stdid = arr[0];
			var invid = arr[2];
			var url_ = site_url_ + "/invoice/generateInvoice/"+stdid;
			var data_ = $('#frmInvoice').serialize();
			//alert(data_);
			
		$.ajax
		({
			type: "GET",
			url: url_,
			data: data_,
			success: function(data)
			{
				//$('#invoicedatahere').html(data)
				var obj = JSON.parse(data);
				if(obj.resultant['res'] == true){
					$('#'+str).removeClass('fa-lock');
					$('#'+str).addClass('fa-print');
					$('#'+str).removeClass('invoicelock');
					$('#'+str).addClass('printinvoice');
					var newid = str+"_invid_"+obj.resultant['newinvid'];
					$('#'+str).attr('id', newid);
					id_new = 'undo_invid_'+obj.resultant['newinvid'];
					id_= 'undo_'+stdid;
					$('#'+id_).addClass('fa-undo undo_invoice');
					$('#'+id_).attr('id', id_new);
					//alert('hello');
					id_new2 = 'payhere_'+stdid+'_invid_'+obj.resultant['newinvid'];
					id1_='payhere_'+stdid;
					$('#'+id1_).addClass('fa-play payhere');
					$('#'+id1_).attr('id', id_new2);
					id_new3='due_'+obj.resultant['newinvid'];
					id4_='due_'+invid;
					$('#'+id4).addClass('due');
					$('#'+id4_).attr('id', id_new3);



				}
			}
		});
		
	});
	$('body').on('click','.undo_invoice',function(){
	 
			//alert(this.id);
			var str = this.id;
			var arr = str.split("_");
			var stdid = arr[0];
			var invid = arr[2];
			var url_ = site_url_ + "/invoice/deleteInvoice/"+invid;
			var data_ = $('#frmInvoice').serialize();
			
		$.ajax
		({
			type: "GET",
			url: url_,
			data: data_,
			success: function(data)
			{
				//$('#invoicedatahere').html(data)
				var obj = JSON.parse(data);
				$('#'+str).removeClass('fa-undo undo_invoice');
				str1='due_'+
				$('#'+str1).addClass('fa-lock invoicelock');

			}
			/*error: function(xhr, status, error){
				alert(xhr.responseText);
			}*/
		});
		
	});
});