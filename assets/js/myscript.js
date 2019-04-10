$(function(){
	$('#cmbStudents').change(function(){
		$('#printhere').html("");

		var url_ = site_url_ + "/studentregi/getStudent/"+ $(this).val();
		
		$.ajax({
			type: "GET",
			url: url_,
			success: function(data){
				//alert(data);
				var obj = JSON.parse(data);
				var str = '';
				

				$('#txtfrstnme').val(obj['stud']['first_Name'])

				$('#txtstdid').val(obj['stud']['student_ID']);
				$('#txtfrstnme').val(obj['stud']['first_Name']);
				$('#txtlstnme').val(obj['stud']['last_Name']);
				$('#txtfnme').val(obj['stud']['fathers_Name']);
				$('#txtdte').val(obj['stud']['dob']);
				$('#txtntnlty').val(obj['stud']['nationality']);
				$('#txtbgrp').val(obj['stud']['blood_Group']);
				$('#txtstts').val(obj['stud']['status']);
				$('#txtmnme').val(obj['stud']['mothers_Name']);
				$('#txtusrnme').val(obj['stud']['username']);
				$('#txtctgry').val(obj['stud']['category']);
				$('#txtcntct').val(obj['cont']['contact']);

				
				if(obj['stud']['gender'] == 'MALE'){
				
					$('#txtmle').attr('checked', true);
				} else {
					$('#txtfmle').attr('checked', true);
				}


				/*str = str + "<table class='table table-striped'>";
				str = str + "<tr>";
				str = str + "<th>Student Name</th>";
				str = str + "</tr>";
				for(i=0; i<obj.stud.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.stud[i]['first_Name'] + "</td>";
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#printhere').html(str);
				*/
				// /$('#txtfrstnme').val(obj.stud.first_Name);
			}
		});
	});

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
				for (s=0; s<obj.students.length; s++)
				{
					str = str + "<tr>";
					for(i=0; i<obj.invoice.length; i++){
						if(obj.students[s]['student_ID'] == obj.invoice[i]['student_ID']){
				
						did='';
						fid='';
						d_amount=0;
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
						fix = '';
						for (f=0; f<obj.fee.length; f++)	
						{
							if(obj.students[s]['student_ID'] == obj.fee[f]['student_ID'])
							{
								fix = fix + obj.fee[f]['static_head_Amount'];
							}
						}
						str = str + "<td>"+fix+"</td>";


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
					amnt = 0;
						for (f=0; f<obj.fee.length; f++)
					{
						if(obj.students[s]['student_ID'] == obj.fee[f]['student_ID'])
						{
							amnt = amnt + obj.fee[f]['flexible_head_Amount'];
						} 
					}
					str = str + "<td>"+amnt+"</td>";
						for (d=0; d<obj.discount.length; d++){
							if(obj.students[s]['student_ID'] == obj.discount[d]['student_ID'])
							{
								if(d_amount == 0)
								{
									d_amount = obj.discount[d]['discount_Amount'];	
								} else d_amount =parseInt(d_amount) + parseInt(obj.discount[d]['discount_Amount']);
							}
						}
						
						for (f=0; f<obj.fee.length; f++)
						{
						f_amount=0;
						s_amount=0;
						total_fee=0;	
									if(obj.students[s]['student_ID'] == obj.fee[f]['student_ID'])
									{
													f_amount = obj.fee[f]['flexible_head_Amount'];
													s_amount = obj.fee[f]['static_head_Amount'];
													if(d_amount == 0){
														s_amount = parseInt(s_amount) - 0;
													}else s_amount = parseInt(s_amount) - parseInt(d_amount);
													if(f_amount == 0){
															total_fee=s_amount;
													}else {total_fee = parseInt(s_amount) + parseInt(f_amount);}
												
									}
						}
						str = str + "<td>"+total_fee+"</td>";
						icon="glyphicon-lock";
								if(obj.students[s]['student_ID'] == obj.invoice[i]['student_ID'])
								{
													icon = "glyphicon-print";
													break;
							    }
						str = str + '<td><span class="glyphicon ' + icon + '"></span></td>';
						str = str + "<td></td>";
						str = str + "<td></td>";
						str = str + "<td></td>";
						str = str + '<td><span class="fa fa-print printreceipt" id="'+obj.invoice[i]['invoice_ID']+'"></span></td>';
						
						} else{
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
						}
					}
					str = str + "</tr>";
				}
					$('#invoicedatahere').html(str);
			}
		});
	return false;
	});

});



