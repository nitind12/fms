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
					str = str + '<td>';
				//	str = str + '<i class= "icon-pencil"></i>';
					str = str + '<span class="fa fa-remove"></span>';
					str = str + '<i class="icon-pencil"></i>';

					str = str +  '</td>';
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
	
$(function(){
	
		$('#csk').html("loading...");

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
				str = str + "<th>#</th>";
				str = str + "<th>Class</th>";
				str = str + "</tr>";
				for(i=0; i<obj.clss.length; i++){
					str = str + "<tr>";
					str = str + "<td><input type='radio' name='clss'></td>";
					str = str + "<td>" + obj.clss[i]['course'] + ' ' + obj.clss[i]['sem'] + ' ' + obj.clss[i]['section'] + "</td>";
					str = str + "</tr>";
				}
				 
				str = str + "</table>";
				$('#csk').html(str);
			}
		});
		    return false;
	});


$(function(){
	
		$('#rgn').html("loading...");

		var url_ = site_url_ + "/studentregi/getstudent/" ;
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
				str = str + '</table>'
				 
				$('#rgn').html(str);
			}
		});
		    return false;
	});