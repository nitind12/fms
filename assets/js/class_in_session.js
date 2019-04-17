$(function(){
	$('#txtcsid').change(function(){
		$('#prhere').html("loading...");

		var url_ = site_url_ + "/Class_in_session/getclassinsession/" ;
		var data_=$(this).serialize();
		
		$.ajax({
			type: "GET",
			url: url_,
			data:data_,
			success: function(data){
				//alert(data);
				var obj = JSON.parse(data);
				var str = '';
				str = str + '<table class="table table-bordered">';
				str = str + "<tr>";
				str = str + "<th>class Session ID</th>";
				str = str + "<th>Session ID</th>";
				str = str + "<th>class ID</th>";
				str = str + "</tr>";
				for(i=0; i<obj.csess.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.csess[i]['class_sess_ID'] + "</td>";
					str = str + "<td>" + obj.csess[i]['session_ID'] + "</td>";
					str = str + "<td>" + obj.csess[i]['class_ID'] + "</td>";
					str = str + "<td>" + "" + "</td>";
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#prhere').html(str);
			}
		});
		    return false;
	});
});
