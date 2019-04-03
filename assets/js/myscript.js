$(function(){
	$('#cmbStudents').change(function(){
		$('#printhere').html("Loading...");

		var url_ = site_url_ + "/studentregi/getStudent/"+ $(this).val();
		
		$.ajax({
			type: "GET",
			url: url_,
			success: function(data){
				var obj = JSON.parse(data);
				var str = '';
				
				$('#txtfrstnme').val(obj['stud']['first_Name'])
				/*str = str + "<table class='table table-striped'>";
				str = str + "<tr>";
				str = str + "<th>Student Name</th>";
				str = str + "</tr>";
				for(i=0; i<obj.stud.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.stud[i]['first_Name'] + "</td>";
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#printhere').html(str);
				*/
				// /$('#txtfrstnme').val(obj.stud.first_Name);
			}
		});
	});
});
$(function(){
	$('#cmbClass').change(function(){
		$('#printhere1').html("Loading...");

		var url_ = site_url_ + "/receipt/getStudent_classwises"+ $(this).val();
		
		$.ajax({
			type: "GET",
			url: url_,
			success: function(data){
				var obj = JSON.parse(data);
				var str = '';
				
				$('#printthis').val(obj['stud1']['student_ID'])
				/*str = str + "<table class='table table-striped'>";
				str = str + "<tr>";
				str = str + "<th>Student Name</th>";
				str = str + "</tr>";
				for(i=0; i<obj.stud.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.stud[i]['first_Name'] + "</td>";
					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#printhere').html(str);
				*/
				// /$('#txtfrstnme').val(obj.stud.first_Name);
			}
		});
	});
});