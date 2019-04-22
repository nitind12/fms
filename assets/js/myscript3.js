$(function(){
	$('#frm').add(function(){
		$('#printheres').html("loading...");

		var url_ = site_url_ + "/flexihead_students/getflexihead/" ;
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
				str = str + "<th>Flexible Heads</th>";
				str = str + "<th>Amount(INR)</th>";
				str = str + "<th>How Many Times</th>";
				str = str + "<th>Actions</th>";
				str = str + "</tr>";
				for(i=0; i<obj.flex.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.flex[i]['New_Flexible_Head'] + "</td>";
					str = str + "<td>" + obj.flex[i]['Amount'] + "</td>";
					str = str + "<td>" + obj.flex[i]['How_Many_Times'] + "</td>";
					str = str + "<td>" + "" + "</td>";
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#printheres').html(str);
			}
		});
		    return false;
	});

		$('#afh').html("loading...");

		var url_ = site_url_ + "/flexihead_students/getflexihead/" ;
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
				str = str + "<th>#</th>";
				str = str + "<th>Flexible Heads</th>";
				str = str + "</tr>";
				for(i=0; i<obj.flex.length; i++){
					str = str + "<tr>";
					str = str + "<td><input type='radio' name='flex_head'></td>";
					str = str + "<td>" + obj.flex[i]['New_Flexible_Head'] + "</td>";
					str = str + "</tr>";
				}
				 
				str = str + "</table>";
				$('#afh').html(str);
			}
		});
		    return false;
	
});
