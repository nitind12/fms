	$('body').on('click','.payhere',function(){
 
		

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
				str = str + '<form name="frm" id="frmSubmtInvoice">';
				str = str + '<table  align ="center" style="width: 800px; font-size: 13px; font-family: verdana; border:#808080 solid 1px; background: #ffffff" class="table print_me">';
				str = str + '<tbody>'
				str = str + '<tr height="100">';
				str = str + '<td align="left" style="width: 150px; padding: 0px 0px 0px 8px; vertical-align: middle">Date: <u>'+obj.curr_date+'</u>';
				str = str + '</td>';
				str = str + '<td align="center" style="width: 500px;padding: 0px 0px 0px 8px; vertical-align: middle"><h4 align="center"><b>The Demo School</b><br>Receipt</h4>';
				str = str + '</td>';
				//str = str + '<td align="right" style="width: 150px;font-size: 13px; padding: 0px 8px 0px 0px; vertical-align: middle">Receipt No.: <span style=" padding: 0px;" id="receiptNo"></span>'+obj.discount['receipt_ID']+' </td>';
				str = str + '</tr>';

				str = str + '<tr>';
				str = str + '<td colspan="3">';
				str = str + '<table class="table">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td>';
				str = str + '<table class="table" style="border:#ff0000 solid 0px; width: 360px;">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td width="100">Reg. No. </td>';
				str = str + '<td>'+obj.students['student_ID']+'</td>';
				str = str + '<input type="hidden" id="_student_'+obj.students['student_ID']+'" name="stdid_" value="'+obj.students['student_ID']+'">';
				str = str + '<input type="hidden" id="_invoice_'+obj.students['invoice_ID']+'"" name="invoiceid_" value="'+obj.students['invoice_ID']+'">';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td>Name:</td>'
				str = str + '<td>'+obj.students['first_Name']+' '+obj.students['last_Name']+'</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td>Class:</td>'
				str = str + '<td>'+obj.students['class_sess_ID']+'</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td>Session:</td>'
				str = str + '<td>'+obj.students['session_ID']+'</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td>Father:</td>'
				str = str + '<td>'+obj.students['fathers_Name']+'</td>';
				str = str + '</tr>';
				str = str + '</td>';
				
				

				str = str + '<tr>';
				str = str + '<td colspan="2" style="color: #900000; text-decoration: underline; padding: 10px 0px 0px 0px">Fee Detail Below:</td>';
				str = str + '</tr>';
				str = str + '<tr style="background: #f0f0f0; color: #900000">';
				str = str + '<td>Actual Fee: </td>';
				str = str + '<td style="background: #f0f0f0; color: #900000">Rs.&nbsp&nbsp'+obj.students['actual_Amount']+'/-</td>';
				str = str + '</tr>'

				str = str + '<tr style="background: #f0f0f0; color: #900000">';
				str = str + '<td>Previous Due: </td>';
				str = str + '<td style="background: #f0f0f0; color: #900000">Rs.&nbsp&nbsp'+obj.students['actual_due_Amount']+'/-</td>';
				str = str + '</tr>';


				str = str + '<tr style="background: #f0f0f0; color: #900000">';
				str = str + '<td>Total Due: </td>';
				$total_due=parseInt(obj.students['actual_Amount']) + parseInt(obj.students['actual_due_Amount']);
				str = str + '<td style="background: #f0f0f0; color: #900000"><b>Rs.&nbsp&nbsp</b>'+$total_due+'/-</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';


				due_Amount='';
				discount_Amount='';
				//tfine='';
				//t_amount='';
				
				str = str + '<td>';
				str = str + '<table class="table" style="border-bottom: #000000 solid 1px; border:#ff0000 solid 0px; width: 360px; float: right">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td width = "200px">Total Due</td>';
	//			due_Amount=obj.students['due_Amount'];
				str = str + '<td width="160px"><label class="receipt_label">: Rs.</label><input type="hidden" id="due_amnt_input" name="due_amnt_input" value="'+$total_due+'" style="width: 100px; padding: 0px; border:#f0f0f0 solid 1px">'+$total_due+'/-</td>';
				str = str + '</td>';
				str = str + '</tr>';
			
				



				str = str + '<tr>';
				str = str + '<td style="color: #909000">Discount? <span style="float: right; padding: 8px 0px; font-size: 11px" class="fa fa-minus"></span><div style="float: left; font-size: 8px; color: #0000ff; clear: both"></div>';
				str = str + '</td>';
				discount_Amount=obj.students['applicable_discount_Amount'];
				str = str + '<td>'
				str = str + '<label class="receipt_label">: Rs.</label><span class="receipt_content">' +discount_Amount+'/-</td>';
				str = str + '<input type="hidden" id="_discount_" name="_discount_" value="'+discount_Amount+'" style="width: 100px; padding: 0px; background: #f0f000; border:#000000 solid 0px">';
				str = str + '</td>'
				str = str + '</tr>';
				
				str = str + '<tr>';
				str = str + '<td style="color: #909000">Fine? <span style="float: right; padding: 8px 0px; font-size: 11px" class="fa fa-plus"></span>';
				str = str + '</td>';
				str = str + '<td>';
				str = str + '<label class="receipt_label">: Rs.</label><span class="receipt_content"><input type="text" id="fine" value "" name="_fine_" style="width: 100px; padding: 0px; background: #f0f000; border:#000000 solid 0px">/-</span>';
				str = str + '</td>';
				str = str + '</tr>';

				str = str + '<tr style="font-weight: bold">';
				str = str + '<td>Total</td>';
				

				str = str + '<td>';
				str = str + '<label class="receipt_label" id="receipt_label">: Rs. </label><span class="receipt_content"><span class="total_amnt" id="total_amnt_display"></span><input type="hidden" id="total_amnt" name="total_amnt" value="1000" style="width: 100px; padding: 0px; border:#000000 solid 0px; font-weight: bold">/-</span>';
				str = str + '</td>';
				
			
				
				str = str + '</tr>';

				str = str + '<tr>';
				str = str + '<td><input type="button" class="btn btn-danger" style="border-radius: 3px; padding: 1px 3px; font-size: 11px" id="update_total" value="Update">';
				str = str + '</td>';
				str = str + '<td style="font-size: 10px; text-align: right; width: 200px"><span id="total_amnt_in_words"> </span>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td width="200px" style="background: #406373; color: #ffffff">Paid Amount </td>';
				str = str + '<td width="160px" style="background: #406373; color: #ffffff"><label class="receipt_label">: Rs. </label><span class="receipt_content"><input type="text" id="paid_amount" name="paid_amount" placeholder="" value="" style="width: 100px; padding: 0px; border:#f0f0f0 solid 1px; color: #0000ff; font-weight: bold">/-</span>';
				str = str + '</td>';
				str = str + '</tr>';

				
				str = str + '<tr>';
				str = str + '<td style="font-size: 13px; color: #0000ff; padding:8px 0px 0px 8px">Payment Mode </td>';
				str = str + '<td>';
			    str = str + '<select name="PaymentMode" id="PaymentMode" style="color: #0000ff; font-size: 13px; width: 100px">';
			    str= str + '<option value="cash" >Cash</option><option value="cheque">Cheque</option><option value="DD">Demand Draft</option></select>';
			    

			    str = str + '<div class="tab-pane" id="chno" style="display: block">';
			    str = str + '<div style:left">';
			    str = str + '<label>Cheque no</label>';
			  	str = str + '<input type="text"  style="width: 75px; padding: 0px" name="txtno" id="txtnum"';
			  	str = str + '</div>';
			  	str = str + '<div style:right">';
			    str = str + '<label>Cheque Date</label>';
			  	str = str + '<input type="text"  style="width: 75px; padding: 0px" name="txtdate" id="txtnum">';
			  	str = str + '</div>'; 
			  	str = str + '</div>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';
				str = str + '</tr>';


				str = str + '<tr>';
				str = str + '<td colspan="2"><label>Any Remark?</label><div style="clear: both"></div><textarea name="txtDesc" id="txtDesc" style="width: 360px; height:80px"></textarea>';
				str = str + '</td>';
				str = str + '</tr>';

				str = str + '<tr>';
				str = str + '<td colspan="2" style="font-size: 12px; text-align: center"><b>Address</b>: Haldwani<br><b>Mob.</b>: 90129 72556 - <b>Email.</b>: ttchld@gmail.com</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td colspan="2" style="font-size: 10px"><sup>*</sup>Fee Heads: , ADMISSION</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td colspan="2"><div class="col-sm-5" style="visibility:visible;font-size: 10px; text-align: right" ><input type="button"  value="Submit Fee" id="invoice_submit" class="btn btn-primary submit_button"></</div>';
				str = str + '<div class="col-sm-12 hide_button style="margin-top: 10px">';
	            str = str + '<button class="btn btn-danger print_button id="print_submit" onclick="window.print();">Print</button>';
	     	   	str = str + '</div>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '<center></center>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</form>';
		


				
				$('#invoicedatahere').html(str);
			
			}
		});
	});
	$('body').on('click','#update_total', function(){
		tfine=$("#fine").val();
		totalDue= $("#due_amnt_input").val();
		discount=$("#_discount_").val();
		
		totalAmt=parseInt(totalDue)+parseInt(tfine) - parseInt(discount);
		
		$("#receipt_label").html(":Rs. " + totalAmt);
	});

	$('body').on('click','#paymentMode',function(){
		alert('hello')
		$('#chno').css('display', 'block');
	
	});
	$('body').on('click','#print_submit',function(){

		$('#print_submit').hide();
	
	});
	$('body').on('click','#invoice_submit',function(){
	 
			var url_ = site_url_ + "/receipt/generatereceipt/";
			var data_ = $('#frmSubmtInvoice').serialize();
			alert(data_);	
		$.ajax
		({
			type: "POST",
			url: url_,
			data: data_,
			success: function(data)
			{
				//$('#invoicedatahere').html(data)
				var obj = JSON.parse(data);
				if(obj.resultant['res'] == true){
					$('#invoice_submit').removeClass('submit_button');
					$('#print_submit').addClass('print_button');
			}
			/*error: function(xhr, status, error){
				alert(xhr.responseText);
			}*/
		}
		});
	});
		
	





$('body').on('click','.printreceipt',function(){
 
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
				str= str + ''
				str = str + '<table  align ="center" style="width: 800px; font-size: 13px; font-family: verdana; border:#808080 solid 1px; background: #ffffff" class="table print_me">';
				str = str + '<center>';
				str = str + '<div class="col-sm-12 hide_button" style="margin-top: 10px">';
	            str = str + '<button class="btn btn-danger print_button" onclick="window.print();">Print</button>';
	     	   	str = str + '</div>';
	     	   	str = str + '</center>';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td>';
				str = str + '<table border="0" class="myfont table_" style="border:#009900 solid 0px">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td>';
				str = str + '<table border="0" alif cellpadding="0" cellspacing="0" class="table_" style="border:#009900 solid 0px">';
				str = str + '<tbody>';
				str = str + '<tr class="feeHeader">';

				str = str + '<td width="100"><img src="https://school.teamfreelancers.com/assets_/default-demo/logo/4.jpg?ver=1.4" width="100">';
				str = str + '</td>';
				str = str + '<td width="500" align="center" style="width: 500px;padding: 0px 0px 0px 8px; vertical-align: middle"><span class="header_text"><b>The Demo School, Haldwani</b><br><span style="font-weight: 100">Fee Receipt <br><span style="font-size: 13px; font-weight: bold">2019, April</span></span></span>';
				str = str + '</td>';
				str = str + '<td width="100">';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str =str  + '</td>';


				/*str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td>';
				str = str + '<table border="0" cellpadding="0" cellspacing="0" class="table_" style="border:#009900 solid 0px">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td class="myline_" colspan="4">';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td colspan="4">';
				str = str + '<table border="0" cellpadding="0" cellspacing="0" class="table_" style="border:#009900 solid 0px">';
				str = str + '<tbody>';
				
				str = str + '<tr>';
				str = str + '<td align="left" class="space_td">Receipt No.:</td>';
				str = str + '<td>'
				str = str + '</td>';
				str = str + '<td align="center" style="width: 500px;padding: 0px 0px 0px 8px; vertical-align: middle" class="space_td"><div style="width:150px; background: #f0f0f0; border-radius: 5px">Office Copy</div>';
				str = str + '</td>';

				str = str + '<td align="right" class="space_td">Date:';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';
				str = str + '</tr>';

				str = str + '<tr>';
				str = str + '<td class="myline_" colspan="4">';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td style="height: 10px">';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr class="myfont">';
				str = str + '<td colspan="2" width="50%" valign="top">';
				str = str + '<table class="table" style="border:#ff0000 solid 0px; width: 360px;"   cellpadding="5">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td class="label_" width="100">Reg. no.</td>';
				str = str + '<td>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td class="label_">Name</td>';
				str = str + '<td>';
				str =str +  '</td>';
				
				str = str + '</tr>';


				str = str + '<tr>';
				str = str + '<td class="label_">Father</td>';
				str = str + '<td>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td class="label_">Class</td>';
				str = str + '<td>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td class="label_">Invoice No.</td>';
				str = str + '<td>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';
								

				str = str + '<td colspan="2" width="50%" valign="top">';
				str = str + '<table class="table" style="border:#ff0000 solid 0px; width: 360px;"  cellpadding="5">';
				str = str + '<tbody>';
				str = str + '<tr valign="top">';
				str = str + '<td class="label_" width="130">Submission Date</td>';
				str = str + '<td>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr valign="top">';
				str = str + '<td class="label_" width="130">Heads</td>';
				str = str + '<td>Admission </td>';
				str = str + '</tr>';
				str = str + '<tr valign="top">';
				str = str + '<td class="label_">Mode </td>'; 
				str = str +	'<td>';
				str = str + '</td>';
				str = str + '<td class="content"></td>';
				str = str + '</tr>';
				
				str = str + '<tr valign="top">';
				str = str + '<td class="label_">Total Paid1213</td>';
				str = str + '<td><b>Rs. </b>/- &nbsp';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';

				str = str + '<tr>';
				str = str + '<td class="myline_" colspan="4">';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td colspan="4" style="height: 10px">';
				str = str + '</td>';
				str = str + '</tr>';


				str = str + '<tr>';
				str = str + '<td colspan="4">';
				str = str + '<table border="0" cellpadding="5" class="table_" style="border:#009900 solid 0px">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td colspan="2" colspan="2" style="font-size: 12px; text-align: center" class="address_contact" width="50%"><b>Address</b><br> Haldwani, Haldwani, UTTARAKHAND (INDIA)<br><b>Contact</b>: 90129 72556<br<b>Email</b>: ttchld@gmail.com<br>';
				str = str + '</td>';
				str = str + '<td colspan="2" width="50%" align="right" valign="bottom" style="font-size: 12px">Authorized Signatory</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';
				str = str + '</tr>';


				str = str + '<tr>';
				str = str + '<div class="myline_" colspan="4"></div>';
				
				str = str + '</tr>';

				str = str + '<tr>';
				str = str + '<td colspan="4" colspan="2" style="font-size: 12px; text-align: center" class="optionalNote">*Optional fee is not compulsory for student. Those student enrolled for additional facilities are required to submit the same<br>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</br>';




				str = str + '<table  align ="center" style="width: 800px; font-size: 13px; font-family: verdana; border:#808080 solid 1px; background: #ffffff" class="table print_me">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td>';
				str = str + '<table border="0" class="myfont table_" style="border:#009900 solid 0px">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td>';
				str = str + '<table border="0" cellpadding="0" cellspacing="0" class="table_" style="border:#009900 solid 0px">';
				str = str + '<tbody>';
				str = str + '<tr class="feeHeader">';
				str = str + '<td width="100"><img src="https://school.teamfreelancers.com/assets_/default-demo/logo/4.jpg?ver=1.4" width="100">';
				str = str + '</td>';
				str = str + '<td width="500" align="center" style="width: 500px;padding: 0px 0px 0px 8px; vertical-align: middle"><span class="header_text"><b>The Demo School, Haldwani</b><br><span style="font-weight: 100">Fee Receipt <br><span style="font-size: 13px; font-weight: bold">2019, April</span></span></span>';
				str = str + '</td>';
				str = str + '<td width="100">';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str =str  + '</td>';


				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td>';
				str = str + '<table border="0" cellpadding="0" cellspacing="0" class="table_" style="border:#009900 solid 0px">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td class="myline_" colspan="4">';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td colspan="4">';
				str = str + '<table border="0" cellpadding="0" cellspacing="0" class="table_" style="border:#009900 solid 0px">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td align="left" class="space_td">Receipt No.:</td>';
				str = str + '<td>';
				str = str = '</td>';
				str = str + '<td align="center" style="width: 500px;padding: 0px 0px 0px 8px; vertical-align: middle" class="space_td"><div style="width:150px; background: #f0f0f0; border-radius: 5px">Student Copy</div>';
				str = str + '</td>';
				str = str + '<td align="right" class="space_td">Date:</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';
				str = str + '</tr>';

				str = str + '<tr>';
				str = str + '<td class="myline_" colspan="4">';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td style="height: 10px">';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr class="myfont">';
				str = str + '<td colspan="2" width="50%" valign="top">';
				str = str + '<table class="table" style="border:#ff0000 solid 0px; width: 360px;"   cellpadding="5">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td class="label_" width="100">Reg. no.</td>';
				str = str + '<td>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td class="label_">Name</td>';
				str = str + '<td>';
				str = str + '</td>';
				
				str = str + '</tr>';


				str = str + '<tr>';
				str = str + '<td class="label_">Father</td>';
				str = str + '<td>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td class="label_">Class</td>';
				str = str + '<td>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td class="label_">Invoice No.</td>';
				str = str + '<td>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';
								

				str = str + '<td colspan="2" width="50%" valign="top">';
				str = str + '<table class="table" style="border:#ff0000 solid 0px; width: 360px;"  cellpadding="5">';
				str = str + '<tbody>';
				str = str + '<tr valign="top">';
				str = str + '<td class="label_" width="130">Submission Date</td>';
				str = str + '<td>';
				str + str + '</td>';
				str = str + '</tr>';
				str = str + '<tr valign="top">';
				str = str + '<td class="label_" width="130">Heads</td>';
				str = str + '<td>Admission </td>';
				str = str + '</tr>';
				str = str + '<tr valign="top">';
				str = str + '<td class="label_">Mode </td>'; 
				str = str +	'<td>';
				str = str + '</td>';
				str = str + '<td class="content"></td>';
				str = str + '</tr>';
				
				str = str + '<tr valign="top">';
				str = str + '<td class="label_">Total Paid</td>';
				str = str + '<td><b>Rs. </b>/- &nbsp';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';

				str = str + '<tr>';
				str = str + '<td class="myline_" colspan="4">';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td colspan="4" style="height: 10px">';
				str = str + '</td>';
				str = str + '</tr>';


				str = str + '<tr>';
				str = str + '<td colspan="4">';
				str = str + '<table border="0" cellpadding="5" class="table_" style="border:#009900 solid 0px">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td colspan="2" colspan="2" style="font-size: 12px; text-align: center" class="address_contact" width="50%"><b>Address</b><br> Haldwani, Haldwani, UTTARAKHAND (INDIA)<br><b>Contact</b>: 90129 72556<br<b>Email</b>: ttchld@gmail.com<br>';
				str = str + '</td>';

				str = str + '</br>';

				str = str + '<td colspan="2" width="50%" align="right" valign="bottom" style="font-size: 12px">Authorized Signatory</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';
				str = str + '</tr>';


				str = str + '<tr>';
				str = str + '<td class="myline_" colspan="4">';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td colspan="4" colspan="2" style="font-size: 12px; text-align: center" class="optionalNote">*Optional fee is not compulsory for student. Those student enrolled for additional facilities are required to submit the same<br>';
				str = str + '</td>';
				//str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';
				str = str + '</tr>';
				str = str + '</tbody>';
				str = str + '</table>';
				str = str + '</td>';
				str = str + '</tr>';*/
				



				$('#invoicedatahere').html(str);

			}
		});
	});
