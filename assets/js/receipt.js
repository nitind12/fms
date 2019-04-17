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
				var str = '';
				str= str + '<div class=" col-sm-offset-3 col-lg-8 col-lg-offset-3 main dotted">'; 
				str = str + '<h5><b><p class="text-left">Date:22/5/2019</p></b></h5>' ;
				str = str + '<h4><b><p class="text-center">The Demo School</p></b></h4>'; 

				str = str + '<h5><b><p class="text-right">Receipt no.:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p></b></h5>'; 
				
				str = str + '<div class="row"';
				str = str + '<div class="col-md-6">';
				str = str + '<table class="table table-bordered table-hover table-responsive">';
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
				str = str + '</table>';
				


				str = str + '<div class="row">';
				str = str + '<div class="col-md-6">';

				str = str + '<table class="table table-bordered table-hover table-responsive">';
				str = str + '<tr>';
				str = str + '<table><b><u class="text-danger">Fee Details Below:</u></b>'
				str = str + '</tr>';
				str = str + '<table class="table table-bordered table-hover table-responsive">';
				str = str + '<tr>'
				str = str + '<td>Actual Fee:</td>';
				str = str + '</tr>'
				str = str + '<tr>';
				str = str + '<td>Previous Due:</td>';
				str = str + '</tr>';
				str = str + '<td>Total Due:</td>';
				str = str + '</tr>';


				str = str + '<table class="table table-bordered table-hover table-responsive">';
				str = str + '<tr>';
				str = str + '<td>Discount?</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td>Fine?</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td>Total:</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td>Paid Amount:</td>';
				str = str + '</tr>';
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
				str = str + '<button type="button" class="btn btn-danger">Update</button>';

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
				
				






				$('#invoicedatahere').html(str);
			
			}
	});
});
});
