$(function(){
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
				str = str + "<th>Class Name</th>";
				str = str + "<th>Action</th>";

				str = str + "</tr>";
				for(i=0; i<obj.clssTotal.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.clssTotal[i]['course'] + ' ' + obj.clssTotal[i]['sem_ID'] + ' ' + obj.clssTotal[i]['section'] +"</td>";
					str = str + "<td>" + "<span class='fa fa-pencil'></span>" + "|" + "<span class='fa fa-remove'></span>" +  "</td>";

					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#print').html(str);
			}
		});
		    return false;
	});
