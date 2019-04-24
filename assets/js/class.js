$(function(){
	$('#textcourse').change(function(){
		$('#print').html("loading...");

		var url_ = site_url_ + "/classes/getclass/" ;
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
				str = str + "<th>Course</th>";
				str = str + "<th>Semester</th>";
				str = str + "<th>Section</th>";

				str = str + "</tr>";
				for(i=0; i<obj.clss.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.clss[i]['course'] + "</td>";
					str = str + "<td>" + obj.clss[i]['semester'] + "</td>";
					str = str + "<td>" + obj.clss[i]['section'] + "</td>";

					str = str + "<td>" + "" + "</td>";
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#print').html(str);
			}
		});
		    return false;
	});
});
