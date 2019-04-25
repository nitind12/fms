$(function(){
	$('#txtfmd').change(function(){
		$('#prnthere').html("loading...");

		var url_ = site_url_ + "/flexibleheads/getflexibleheads/" ;
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
				str = str + "<th>Fee Head</th>";
				str = str + "<th>Username</th>";
				str = str + "<th>Date</th>";
				str = str + "<th>Amount</th>";
				str = str + "</tr>";
				for(i=0; i<obj.flex.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.flex[i]['flexible_head_ID'] + "</td>";
					str = str + "<td>" + obj.flex[i]['fee_Head'] + "</td>";
					str = str + "<td>" + obj.flex[i]['amount'] + "</td>";
					str = str + "<td>" + obj.flex[i]['ussername'] + "</td>";
					str = str + "<td>" + obj.flex[i]['date'] + "</td>";

					str = str + "<td>" + "" + "</td>";
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#prnthere').html(str);
			}
		});
		    return false;
	});
});
