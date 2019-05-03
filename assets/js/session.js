$(function(){
	$('#txtsid').change(function(){
		$('#prnthere').html("loading...");

		var url_ = site_url_ + "/sessions/getsession/" ;
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
				str = str + "<th>Session</th>";
				str = str + "<th>Session Start</th>";
				str = str + "<th>Session End</th>";
				str = str + "<th>Actions</th>";
				str = str + "</tr>";
				for(i=0; i<obj.sess.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.sess[i]['session_ID'] + "</td>";
					str = str + "<td>" + obj.sess[i]['session_Start'] + "</td>";
					str = str + "<td>" + obj.sess[i]['session_End'] + "</td>";
						str = str + '<td>';
					str = str + '<span class=" fa fa-pencil print"></span>';
					str = str + "/" +'<span class="fa fa-remove del" id="'+obj.sess['Session_ID']+'"></span>';
					str = str +  '</td>';
				
				
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#prnthere').html(str);
			}
		});
		    return false;
	});
});
