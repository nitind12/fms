$(function(){
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
				str = str + '<table style="width: 800px; font-size: 13px; font-family: verdana; border:#808080 solid 1px; background: #ffffff" class="table print_me">';
				str=str+'<div class="col-sm-2 col-sm-offset-3 col-lg-8 col-lg-offset-3 main dotted">';

				str = str + '<table>';
				str = str + '<tbody>';
				str = str + '<td align="left" style="width: 150px; padding: 0px 0px 0px 8px; vertical-align: middle">Date: <u>18/04/2019</u></td>' ;
				str = str + '<td align="center" style="width: 500px;padding: 0px 0px 0px 8px; vertical-align: middle"><h4 align="center"><b>The Demo School</b><br>Receipt</h4></td>'; 

				str = str + '<td align="right" style="width: 150px;font-size: 13px; padding: 0px 8px 0px 0px; vertical-align: middle">Receipt No. <span style="border-radius: 5px; border: #000000 solid 1px; padding: 5px;" id="receiptNo">?</span></td>'; 
				str = str + '</tr></table>';
				
				var str = '';

				str = str + '<table style="width: 800px; font-size: 13px; font-family: verdana; border:2; solid 1px; background: #ffffff" class="table print_me">';
				str= str + '<tr>';
				str = str + '<td align="left" style="width: 150px;font-size: 13px; padding: 0px 8px 0px 0px; vertical-align: middle"><b>Date: 27/2/2019</b></span></td>'; 
				str = str + '<td align="center" style="width: 500px;padding: 0px 0px 0px 8px; vertical-align: middle"><h4 align="center"><b>The Demo School</b><br>Receipt</h4></td>';
				str = str + '<td align="right" style="width: 150px;font-size: 13px; padding: 0px 8px 0px 0px; vertical-align: middle"><b>Receipt No.</b></td>'; 
				str = str + '</tr>';

				str = str + '<div class="row"';
				str = str + '<div class="col-md-12">';
				str = str + '<table class="table-bordered">'
				str = str + '<td>';
				str = str + '<tr>';
				str = str + '<td>Reg. No.:</td>';
				str = str + '<td>'+obj.students['student_ID']+'</td>';
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
				str = str + '</table>';
				


				str = str + '<div class="row">';
				str = str + '<div class="col-md-6">';

				str = str + '<table class="table table-bordered table-hover table-responsive">';
				str = str + '<tr>';
				str = str + '<table><b><u class="text-danger">Fee Details Below:</u></b>'
				str = str + '</tr>';
				str = str + '<table class="table table-bordered table-hover table-responsive">';
				str = str + '<tr>';
				str = str + '<td style="background: #f0f0f0; color: #900000"><b>Actual Fee:</b></td>';

				str = str + '<td style="background: #f0f0f0; color: #900000">Rs.&nbsp&nbsp'+obj.students['actual_Amount']+'</td>';
				str = str + '</tr>'
				str = str + '<tr>';
				str = str + '<td style="background: #f0f0f0; color: #900000"><b>Previous Due:</b></td>';
				str = str + '<td style="background: #f0f0f0; color: #900000">Rs.&nbsp&nbsp'+obj.students['actual_due_Amount']+'</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td style="background: #f0f0f0; color: #900000"><b>Total Due:</b></td>';
				str = str + '<td style="background: #f0f0f0; color: #900000"><b>Rs.&nbsp&nbsp</b>'+obj.students['due_Amount']+'</td>';
				str = str + '</tr>';
				str = str + '</table>';
				str = str + '</table>';
				str = str + '</table>';


				due_Amount='';
				discount_Amount='';
				fine='';
				total='';
			    str = str + '<table class="table table-bordered table-hover table-responsive">';
			    str = str + '<tr>';
				str = str + '<td>Total Due: <span style="float: right; padding: 8px 0px; font-size: 11px" class="fa fa-plus"></span></td>';
				due_Amount=obj.students['due_Amount'];
				str = str + '<td>Rs.&nbsp&nbsp'+due_Amount+'</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td style="color: #909000">Discount? <span style="float: right; padding: 8px 0px; font-size: 11px" class="fa fa-minus"></span><div style="float: left; font-size: 8px; color: #0000ff; clear: both"></div></td>';
				str = str + '<td>Rs.<input type="text" id="_discount_" name="_discount_" value="0" style="width: 100px; padding: 0px; background: #f0f000; border:#000000 solid 0px"></td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td style="color: #909000">Fine? <span style="float: right; padding: 8px 0px; font-size: 11px" class="fa fa-plus"></span><div style="float: left; font-size: 8px; color: #0000ff; clear: both"></div></td>';
				str = str + '<td>Rs.<input type="text" id="_fine_" name="_fine_" value="0" style="width: 100px; padding: 0px; background: #f0f000; border:#000000 solid 0px"></td>';
				
				str = str + '</tr>';
				
				str = str + '<tr>';
				str = str + '<td>Total:</td>';
				

				str = str + '<td>';
				str = str + '</td>';
				str = str + '</tr>';
				
				str = str + '</table>';
				str = str + '<button type="button" class="btn btn-danger">Update</button>';
				str = str + '<table class="table table-bordered table-hover table-responsive">';
				str = str + '<tr>';
				str = str + '<td width="200px" style="background: #406373; color: #ffffff">Paid Amount </td>';
				str = str + '<td width="160px" style="background: #406373; color: #ffffff"><label class="receipt_label">: Rs. </label><span class="receipt_content"><input type="text" id="paid_amount" name="paid_amount" placeholder="" value="" style="width: 100px; padding: 0px; border:#f0f0f0 solid 1px; color: #0000ff; font-weight: bold"></span></td>';
 		
 				str = str + '</tr>';

				/*str = str + '<div class="form-group">';
			    str = str + '<label for="usr">Paid Amount (Rs.)</label>';
 				str = str +  '<input type="text" class="form-control" id="usr">';
				/*str = str + '</div><td>td width="200px" style="background: #406373; color: #ffffff">Paid Amount</td>';*/
				str = str + '</table>';
				
				
				

				
				str = str + '<table class="table table-bordered table-hover table-responsive">';
				str = str + '<label>Payment Mode:</label>';
				str = str + '<select>';
				str = str + '<option>Cash</option>';
				str = str + '<option>Cheque</option>';
				str = str + '<option>Demand Draft</option>';
				str = str + '<option>Other</option>';
				str = str + '</select>';
				
				str = str + '</table>';
				
				str = str + '<table class="table table-bordered table-hover table-responsive">';
				str = str + '<tr>';
				str = str + '<table><b><usr class="text-danger">Any Remark?</u></b>'
				str = str + '</tr>';
				str = str + '<div class="form-group">';
 				str = str + '<label for="comment"></label>';
  				str = str + '<textarea class="form-control" rows="5" id="comment"></textarea>';
				str = str + '</div>';
				str = str + '</tr>';
				str = str + '</table>';
				str = str + '<button type="button" class="btn btn-primary">Submit Fee</button>';
				
				str = str + '<table class="table table-bordered table-hover table-responsive">';

				str = str + '<tr><td colspan="3" style="font-size: 12px; text-align: center"><b>Address</b>: Haldwani<br><b>Mob.</b>: 90129 72556 - <b>Email.</b>: ttchld@gmail.com</td>';
				str = str + '</table>';
				str = str + '</table>';


				$('#invoicedatahere').html(str);
			
			}
	});
});
});
