$(function(){
	$('#cmbStaffs').change(function(){
		$('#printhere').html("");

		var url_ = site_url_ + "/staffregi/getStaff/"+ $(this).val();
		
		$.ajax({
			type: "GET",
			url: url_,
			success: function(data){
				//alert(data);	
				var obj=JSON.parse(data);			

				$('#txtfrstnme').val(obj['staf']['first_Name']);
				$('#txtlstnme').val(obj['staf']['last_Name']);
				$('#txtdte').val(obj['staf']['dob']);
				$('#txtntnlty').val(obj['staf']['nationality']);
				$('#txtbgrp').val(obj['staf']['blood_Group']);
				$('#txtstts').val(obj['staf']['status']);
				$('#txtusrnme').val(obj['staf']['username']);
				$('#txtctgry').val(obj['staf']['category']);
				$('#txtcntct').val(obj['staf']['contact']);
				$('#txtemail').val(obj['staf']['email']);
				$('#txtaddr').val(obj['staf']['address']);
				$('#txtarea').val(obj['staf']['area']);
				$('#txtcity').val(obj['staf']['city']);
				$('#txtstate').val(obj['staf']['state']);
				$('#txtdstrct').val(obj['staf']['district']);
				$('#txtpincode').val(obj['staf']['pincode']);
				$('#txtdsgntn').val(obj['staf']['designation']);
				$('#txtdoa').val(obj['staf']['date']); 





				
				if(obj['staf']['gender'] == 'MALE'){
				
					$('#txtmle').attr('checked', true);
				} else {
					$('#txtfmle').attr('checked', true);
				}


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
