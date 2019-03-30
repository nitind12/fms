$(function(){
	$('#cmbStudents').change(function(){
		$('#printhere').html("Loading...");

		var url_ = site_url_ + "/studentregi/getStudent/";
		
		$.ajax({
			type: "GET",
			url: url_,
			success: function(data){
				var obj = JSON.parse(data);
				var str = '';
				alert(obj.stud.length);
				str = str + "<table border='1' class='table'>";
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
				// /$('#txtfrstnme').val(obj.stud.first_Name);
			}
		});
	});
});