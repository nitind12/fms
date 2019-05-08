$(function(){
		$('#prhere').html("loading...");

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
				str = str + '<table class="table">';
				for(i=0; i<obj.clssTotal.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.clssTotal[i]['course'] + ' ' + obj.clssTotal[i]['sem_ID'] + ' ' + obj.clssTotal[i]['section'] + "</td>";
					
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
				for(i=0; i<obj.clssTotal.length; i++){
					str = str + "<tr>";
					str= str + '<class="prn" id="'+obj.clssTotal[i]['class_ID']+'" name="clss">';
					str = str + "<td>" + obj.clssTotal[i]['course'] + ' ' + obj.clssTotal[i]['sem_ID'] + ' ' + obj.clssTotal[i]['section'] + "</td>";
					
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#prhrt').html(str);
			}
		});
		    return false;
	});
$('body').on('click','.prn',function(){
		$('#rgn').html("loading...");
		var crsid=this.id;

		var url_ = site_url_ + "/studentregi/getStudents/" +crsid ;
		var data_=$(this).serialize();
		
		$.ajax({
			type: "GET",
			url: url_,
			data:data_,
			success: function(data){
				//alert(data);
				var obj = JSON.parse(data);
				var str = '';
				str= str + '<table class="table table-bordered">'
				str = str + "<tr>"
				str = str + "<th>Registration No.</th>"
				str = str + "<th>Name</th>"
				str = str + "<th>Flexible Heads</th>"
				str = str + "</tr>"
				for(i=0; i<obj.stud.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.stud[i]['student_ID']  + "</td>";
					str = str + "<td>" + obj.stud[i]['first_Name'] + ' ' + obj.stud[i]['last_Name']  + "</td>";
					str = str + "<td></td>"

					str = str + "</tr>";
				}
				str = str + '</table>';
				$('#rgn').html(str);
			}
		});
		    return false;
	});
