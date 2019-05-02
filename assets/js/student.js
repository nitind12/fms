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
					str = str + "<td>" + obj.stud[i]['course'] + ' ' + obj.stud[i]['sem_ID'] + ' ' + obj.stud[i]['section'] + "</td>";
					str = str + "<td>" + obj.stud[i]['date'] + "</td>";
					str = str + "</tr>";
				}
				 
				str = str + "</table>";
				$('#ttlstdnts').html(str);
			}
		});
		    return false;
	});
$(function(){
		$('#ttlclss').html("loading...");

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
				str = str + "<th> Class</th>";

				str = str + "</tr>";
				for(i=0; i<obj.clssTotal.length; i++){
					str = str + "<tr>";
					str = str + '<td>';
					str = str  + obj.clssTotal[i]['course'] + ' ' + obj.clssTotal[i]['sem_ID'] + ' ' + obj.clssTotal[i]['section'] + "</td>";

					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#ttlclss').html(str);
			}
		});
		    return false;
	});

$(function(){
		$('#ttlclss1').html("loading...");

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
				str = str + "<th>Class</th>";
				str = str + "<th>Total Students</th>";

				str = str + "</tr>";
				for(i=0; i<obj.clss.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.clss[i]['course'] + ' ' + obj.clss[i]['sem_ID'] + ' ' + obj.clss[i]['section'] + "</td>";
					str = str + '<td class="scrl here" id="'+obj.clss[i]['class_ID']+'"><a class="btn btn-primary" href="#"><strong>'+obj.clss[i]['totalStudents']+'</strong></a></td>';

					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#ttlclss1').html(str);
			}
		});
		    return false;
	});

$('body').on('click','.here',function(){
			var crsid = this.id;
			

			var url_ = site_url_ + "/studentregi/getStudents/"+crsid;
		
			$.ajax({
			type: "GET",
			url: url_,
		//	data:data_,
			success: function(data){
				//alert(data);
				var obj = JSON.parse(data);
				var str = '';
				str = str + '<table class="table table-bordered">';
				str = str + '<tr>';
				str = str + '<th>ID</th>';
				str = str + '<th>Student Name</th>';
				str = str + '</tr>';
				for(i=0;i<obj.stud.length;i++){
					str = str + '<tr>';
					str = str + "<td>" + obj.stud[i]['student_ID'] + "</td>";
					str = str + "<td>" + obj.stud[i]['first_Name'] + ' ' + obj.stud[i]['last_Name'] + "</td>";
					str = str + "</tr>";
			}
				str = str + "</table>";
				
				$('#tlstd').html(str);
       }
		});
		    return false;
	});

$('body').on('click','.here',function(){
			var crsid = this.id;
			

			var url_ = site_url_ + "/classes/getclass/"+crsid;
			
			$.ajax({
			type: "GET",
			url: url_,
		//	data:data_,
			success: function(data){
				//alert(data);
				var obj = JSON.parse(data);

				var str = '';

				str = str + obj.clss[crsid]['course'] + obj.clss[crsid]['sem_ID'] + obj.clss[crsid]['section'];

				
				$('#clswse').html(data);
       }
		});
		    return false;
	});
