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
				str = str + '<table class="table table-bordered table-hover table-responsive">';
				str = str + '<tr>';
				str = str + '<td>Reg. No.</td>';
				str = str + '<td>'+obj.students['student_ID']+'</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td>Name</td>'
				str = str + '<td>'+obj.students['first_Name']+' '+obj.students['last_Name']+'</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td>Class</td>'
				str = str + '<td>'+obj.students['class_sess_ID']+'</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td>Session</td>'
				str = str + '<td>'+obj.students['session_ID']+'</td>';
				str = str + '</tr>';
				str = str + '<tr>';
				str = str + '<td>Father</td>'
				str = str + '<td>'+obj.students['fathers_Name']+'</td>';
				str = str + '</tr>';
				str = str + '</table>';

				$('#invoicedatahere').html(str);
			
			}
	});
});
});
