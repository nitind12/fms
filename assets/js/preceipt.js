$('body').on('click','.printreceipt',function(){
 
		//alert(this.id);

		var str = this.id;
		var arr = str.split("_");
		var stdid = arr[0];
		var invid = arr[2];
		var url_ = site_url_ + "/receipt/get_invoice_data/"+invid+"/"+stdid;
		/*$.ajax({
			type: "GET",
			url: url_,
			success: function(data){
				//alert(data);
				//$('#invoicedatahere').html(data)
				var obj = JSON.parse(data);
				var str = '';
				str= str + ''
				str = str + '<table  align ="center" style="width: 800px; font-size: 13px; font-family: verdana; border:#808080 solid 1px; background: #ffffff" class="table print_me">';
				str = str + '<tr>';
				str = str + '<td>';
				str = str + '<table border="0" class="myfont table_" style="border:#009900 solid 0px">';
				str = str + '<tbody>';
				str = str + '<tr>';
				str = str + '<td>';
				str = str + '<table border="0" alif cellpadding="0" cellspacing="0" class="table_" style="border:#009900 solid 0px">';
				str = str + '<tbody>';
				str = str + '<tr class="feeHeader">';

				str = str + '<td width="100">';
				str = str + '</td>';
				str = str + '<td width="500" align="center" style="width: 500px;padding: 0px 0px 0px 8px; vertical-align: middle"><span class="header_text"><b>The Demo School, Haldwani</b><br><span style="font-weight: 100">Fee Receipt <br><span style="font-size: 13px; font-weight: bold">2019, April</span>';
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
				str = str + '<td align="left" class="space_td">Receipt No.:';
				str = str + obj.discount['receipt_ID'];
				str = str + '</td>';
				str = str + '<td>'
				str = str + '</td>';
				str = str + '<td align="center" style="width: 500px;padding: 0px 0px 0px 8px; vertical-align: middle" class="space_td"><div style="width:150px; background: #f0f0f0; border-radius: 5px">Office Copy</div>';
				str = str + '</td>';

				str = str + '<td align="right" class="space_td">Date:';
				str = str + obj.curr_date;
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
				str = str + '<td class="label_" width="100">Reg. no.';
				str = str + '</td>';
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




				/*str = str + '<table  align ="center" style="width: 800px; font-size: 13px; font-family: verdana; border:#808080 solid 1px; background: #ffffff" class="table print_me">';
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
				str = str + '</tr>';
				



				$('#invoicedatahere').html(str);

			}
		});
	});