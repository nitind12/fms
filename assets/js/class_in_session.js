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
					str = str + '<td><input type="checkbox" name="classes[]" value="'+obj.clssTotal[i]['class_ID']+'"  id="'+obj.clssTotal[i]['class_ID']+'"></td>';

					str = str + "<td>" + obj.clssTotal[i]['course'] + ' ' + obj.clssTotal[i]['sem_ID'] + ' ' + obj.clssTotal[i]['section'];
					str = str + "<input type='hidden' name='classes_in_text[]' value='"+obj.clssTotal[i]['course'] + ' ' + obj.clssTotal[i]['sem_ID'] + ' ' + obj.clssTotal[i]['section']+"'>"+"</td>"
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#prhere').html(str);
			}
		});


		$('#prhrt').html("loading...");

		var url_ = site_url_ + "/class_in_session/getclassinsession/" ;
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
				//	str= str + '<td><input type="radio" name="clss" class="prn" id="'+obj.clssTotal[i]['class_ID']+'"></td>';
					str = str + '<td>'+obj.csess[i]['class_sess_ID']+'</td>';
					
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#prhrt').html(str);
			}
		});

$('body').on('click','.prn',function(){
		$('#rgn').html("loading...");
		//alert(this.id);
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
});
