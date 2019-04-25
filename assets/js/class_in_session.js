$(function(){
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
				str = str + '<table>';
				for(i=0; i<obj.csess.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.csess[i]['course'] + ' ' + obj.csess[i]['sem'] + ' ' + obj.csess[i]['section'] + "</td>";
					
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#prhere').html(str);
			}
		});
		    return false;
	});

$(function(){
		$('#prhrt').html("loading...");

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
				for(i=0; i<obj.csess.length; i++){
					str = str + "<tr>";
					str= str + '<td><input type="radio" name="clss"></td>';
					str = str + "<td>" + obj.csess[i]['course'] + ' ' + obj.csess[i]['sem'] + ' ' + obj.csess[i]['section'] + "</td>";
					
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#prhrt').html(str);
			}
		});
		    return false;
	});
