$(function(){
		$('#printheres').html("loading...");

		var url_ = site_url_ + "/flexihead_students/getflexihead/" ;
		var data_ = $(this).serialize();
		
		$.ajax({
			type: "GET",
			url: url_,
			data:data_,
			success: function(data){
				var obj = JSON.parse(data);				
				var str = '';
				str = str + '<table class="table table-bordered">';
				str = str + "<tr>";
				str = str + "<th>Flexible Heads</th>";
				str = str + "<th>Amount(INR)</th>";
				str = str + "<th>How Many Times</th>";
				str = str + "<th>Actions</th>";
				str = str + "</tr>";
				for(i=0; i<obj.flex.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.flex[i]['fee_Head'] + "</td>";
					str = str + "<td>" + obj.flex[i]['amount'] + "</td>";
					str = str + "<td>" + obj.flex[i]['how_many_Times'] + "</td>";
					
					str = str + '<td>';
					str = str + '<span class=" fa fa-pencil print" id="'+obj.flex[i]['flexible_head_ID']+'"></span>';
					str = str + "/" +'<span class="fa fa-remove del" id="'+obj.flex[i]['flexible_head_ID']+'"></span>';
					str = str +  '</td>';
					str = str + "</tr>";
				}
				str = str + "</table>";
			

				$('#printheres').html(str);
			}
	 });
		    return false;
});

