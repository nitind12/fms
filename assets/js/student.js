$(function(){
$('#ttlstdnts').html("loading...");

		var url_ = site_url_ + "/studentregi/getStudent/" ;
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
				str = str + "<th>Registration No</th>";
				str = str + "<th>Name</th>";
				str = str + "<th>Gender</th>";
				str = str + "<th>Class Of Admission</th>";
				str = str + "<th>Date Of Admission</th>";
				str = str + "</tr>";
				for(i=0; i<obj.stud.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.stud[i]['student_ID'] + "</td>";
					str = str + "<td>" + obj.stud[i]['first_Name'] + ' ' + obj.stud[i]['last_Name'] + "</td>";
					
					if(obj['stud'][i]['gender'] == 'MALE'){
				
					str = str + '<td><img src="http://localhost/fms/assets/male.png" style="width:20px" alt="Male" title="Male"></td>';
				} else {
					str = str + '<td><img src="http://localhost/fms/assets/female.png" style="width:20px" alt="Female" title="Female"></td>';

				}
					str = str + "<td>" + obj.stud[i]['course'] +"</td>";
					str = str + "<td>" + obj.stud[i]['date'] + "</td>";
					str = str + "</tr>";
				}
				 
				str = str + "</table>";
				$('#ttlstdnts').html(str);
			}
		});
		    return false;
	});
