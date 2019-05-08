$(function(){
		$('#prnt').html("loading...");

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
			
				str= str + "<table class='table'>";
				str = str + "<tr>";
				str = str + '<td>Select Course</td>';
				str = str + '</td>';
				for(i=0; i<obj.clssTotal.length; i++){
					str = str + "<tr>";
					str = str + "<td class='hear' id=>" + obj.clssTotal[i]['course'] + ' ' + obj.clssTotal[i]['sem_ID'] + ' ' + obj.clssTotal[i]['section'] +"</td>";
					str = str + "</tr>";
					}
					str= str + '</table>';

				$('#prnt').html(str);
			}
		});
		    return false;
	});

$('body').on('click','.hear',function(){
	$('#print2').html("loading...");
		alert(this.id);

		var url_ = site_url_ + "/dropstudent/getStudent/" ;
		var data_=$(this).serialize();
		
		$.ajax({
			type: "GET",
			url: url_,
			data:data_,
			success: function(data){
				//alert(data);
				var obj = JSON.parse(data);
				var str = '';
			

				str = str + "<select>";
				str = str + '<option>Select Course</option>';
				for(i=0; i<obj.drop.length; i++){
					str = str + "<option>" + obj.drop[i]['first_Name'] + ' ' + obj.drop[i]['last_Name'] + ' ' + "</option>";

				}
				str = str + "</select>";
				$('#print2').html(str);
			}
		});
		    return false;
	});

