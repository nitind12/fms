
	$('body').on('click','.payhere',function(){
 
 		//alert(this.id);
		var str = this.id;
		var arr = str.split("_");
		var stdid = arr[1];
		var invid = arr[3];
		var url_ = site_url_ + "/receipt/get_receipt_data/"+invid+"/"+stdid;
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
				str = str + '<input type="hidden" id="_date_'+obj.curr_date+'" name="date_" value="'+obj.curr_date+'">';
				str = str + '</td>';
				str = str + '<td align="center" style="width: 500px;padding: 0px 0px 0px 8px; vertical-align: middle"><h4 align="center"><b>The Demo School,Haldwani </b><br>Receipt</h4>';
				str = str + '</td>'; 
				//receptID = parseInt(obj.discount['receipt_ID']) +1;
				//str = str + '<td align="right" style="width: 150px;font-size: 13px; padding: 0px 8px 0px 0px; vertical-align: middle">Receipt No.: <span style=" padding: 0px;" id="receiptNo">'+ receptID +'</span>';
				str = str + '<td align="right" style="width: 150px;font-size: 13px; padding: 0px 8px 0px 0px; vertical-align: middle">Receipt No.: <span style=" padding: 0px;" id="receiptNo"></span>';
				
				str = str + '</td>';
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
				str = str + '<td style="background: #f0f0f0; color: #900000">Rs.&nbsp&nbsp'+obj.students['previous_due_Amount']+'/-</td>';
				str = str + '</tr>';


				str = str + '<tr style="background: #f0f0f0; color: #900000">';
				str = str + '<td>Total Due: </td>';
				$total_due=parseInt(obj.students['actual_Amount']) + parseInt(obj.students['previous_due_Amount']);
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
			    

			    /*str = str + '<div class="tab-pane fade" id="chno">';
			    str = str + '<div style:left">';
			    str = str + '<label>Cheque no</label>';
			  	str = str + '<input type="text"  style="width: 75px; padding: 0px" name="txtno" id="txtnum"';
			  	str = str + '</div>';
			  	str = str + '<div style:right">';
			    str = str + '<label>Cheque Date</label>';
			  	str = str + '<input type="text"  style="width: 75px; padding: 0px" name="txtdate" id="txtnum">';
			  	str = str + '</div>'; 
			  	str = str + '</div>';*/
			  	str = str + '<div style="border-radius: 5px; background: rgb(80, 80, 80); color: rgb(255, 255, 255); padding: 0px 3px; width: 100%; float: left; display: block; border: 0px solid rgb(255, 0, 0);" id="_noncashdetail">';
			  	str = str + '<div style="float: left; display: none" id="_ccdd_no"><div style="float: left"><b style="font-size: 9px">Cheque</b> No.<br><input type="text" style="width: 75px; padding: 0px" name="txtCCDDNumber" id="txtCCDDNumber">&nbsp;</div><div style="float: right"><b id="_ccdd_dt" style="font-size: 9px">Cheque</b> Date<br><input type="text" style="width: 75px; padding: 0px" name="txtCCDDDate" id="txtCCDDDate"></div></div>';
			  	str = str + '</div>';
			  	str = str + '<div style="float: right"><b id="_ccdd_dt" style="font-size: 9px">';




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
				str = str + '<td colspan="2"><div class="col-sm-5" style="visibility:visible;font-size: 10px; text-align: right" ><input type="button"  value="Submit Fee" id="invoice_submit" class="btn btn-primary submit_button"></div>';
				//str = str + '<div class="col-sm-12 hide_button style="margin-top: 10px">';
				//alert(obj.students['invoice_ID']);receipt_msg
				str = str + '<div class="col-sm-5" style="visibility:visible;font-size: 10px; text-align: right" id="print_submit"><div style="float: right; color: #ff0000; padding: 0px 0px 0px 0px"><a href="'+site_url_+'/preceipt/print_/'+obj.students['invoice_ID']+'" class="btn btn-danger" target="_blank" id="printreceipt_button">Print Fee</a></div><div style="float: right; color: #ff0000; padding: 0px 10px 0px 0px" id="receipt_msg"></div>';

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
				$('#printreceipt_button').hide();
			
			}
		});
		return false;
	});
	$('body').on('click','#update_total', function(){
		tfine=$("#fine").val();
		if(tfine != 0)
		{
		totalDue= $("#due_amnt_input").val();
		discount=$("#_discount_").val();
		
		totalAmt=parseInt(totalDue)+parseInt(tfine) - parseInt(discount);
		}else{
			totalDue= $("#due_amnt_input").val();
		discount=$("#_discount_").val();
		
		totalAmt=parseInt(totalDue) - parseInt(discount);
		}
		
		$("#receipt_label").html(":Rs. " + totalAmt);
		$('#total_amnt_in_words').html(convertNumberToWords(totalAmt));
	});



	$('body').on('change','#PaymentMode',function(){
		if($(this).val() == 'cash'){
			$('#_ccdd_no').hide();
		} else if($(this).val()!='cash'){
			$('#_ccdd_no').show();
		}
	});
	
	$('body').on('click','#invoice_submit',function(){
	 
			var url_ = site_url_ + "/receipt/generatereceipt/";
			var data_ = $('#frmSubmtInvoice').serialize();
		$.ajax
		({
			type: "POST",
			url: url_,
			data: data_,
			success: function(data)
			{
				//$('#invoicedatahere').html(data)
				var obj = JSON.parse(data);
				if(obj.resultant.bool == true){
					$('#invoice_submit').hide();
					$('#printreceipt_button').show();
					//alert("record inserted successfully")
					//$('#printreceipt_button').attr('href', site_url_+"/preceipt/print_/"+obj.resultant.recptid);
					$('#receiptNo').html(obj.resultant.recptid);
					$('#receipt_msg').html("Your record has been successfully inserted !");	
				}
			/*error: function(xhr, status, error){
				alert(xhr.responseText);
			}*/
		}
		});
		return false;
	});


	function convertNumberToWords(amount) {
    var words = new Array();
    words[0] = '';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
    amount = amount.toString();
    var atemp = amount.split(".");
    var number = atemp[0].split(",").join("");
    var n_length = number.length;
    var words_string = "";
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = "";
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + " ";
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Crores ";
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Lakhs ";
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += "Hundred and ";
            } else if (i == 6 && value != 0) {
                words_string += "Hundred ";
            }
        }
        words_string = words_string.split("  ").join(" ");
    }
    return words_string;
}





