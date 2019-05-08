$(function(){
	
	$('#cmbStudents').change(function(){
		$('#printhere').html("");

		var url_ = site_url_ + "/studentregi/getStudent/"+ $(this).val();
		
		$.ajax({
			type: "GET",
			url: url_,
			success: function(data){
				//alert(data);	
				var obj=JSON.parse(data);	

					$('#txtfrstnme').val(obj['stud']['first_Name']);
					$('#txtlstnme').val(obj['stud']['last_Name']);
					$('#txtfnme').val(obj['stud']['fathers_Name']);
					$('#txtdte').val(obj['stud']['dob']);
					$('#txtntnlty').val(obj['stud']['nationality']);
					$('#txtbgrp').val(obj['stud']['blood_Group']);
					$('#txtstts').val(obj['stud']['status']);
					$('#txtmnme').val(obj['stud']['mothers_Name']);
					$('#txtusrnme').val(obj['stud']['username']);
					$('#txtctgry').val(obj['stud']['category']);
					$('#txtcntct').val(obj['stud']['contact']);
					$('#txtemail').val(obj['stud']['email']);
					$('#txtaddr').val(obj['stud']['address']);
					$('#txtarea').val(obj['stud']['area']);
					$('#txtcity').val(obj['stud']['city']);
					$('#txtstate').val(obj['stud']['state']);
					$('#txtdstrct').val(obj['stud']['district']);
					$('#txtpincode').val(obj['stud']['pincode']);
					$('#txtsibling').val(obj['stud']['siblings']);
					$('#txtdoa').val(obj['stud']['date']);	
					$('#txtdisc').val(obj['stud']['discount_offered']);
					$('#disc').val(obj['stud']['discount_on']);
					$('#txtcourse').val(obj['stud']['course_ID']);


					if(obj['stud']['gender'] == 'MALE'){
					
					$('#txtmle').prop('checked', true);
				} else {
					$('#txtfmle').prop('checked', true);
				}

			}
		});
	});
	$('#txtsb').change(function(){

		var url_ = site_url_ + "/studentregi/getStudent/"+ $(this).val();
		
		$.ajax({
			type: "GET",
			url: url_,
			success: function(data){
				//alert(data);	
				var obj=JSON.parse(data);	
				var data_ = $('#txtsibling').val();	
				if(data_ != ''){
					$('#txtsibling').val(data_ + ", " + obj['stud']['student_ID']);
				} else {
					$('#txtsibling').val(obj['stud']['student_ID']);
				}	
			}
		});
	});

		$('#txtdisc').change(function(){

		var url_ = site_url_ + "/studentregi/getStudent/"+ $(this).val();
		
		$.ajax({
			type: "GET",		
			url: url_,
			success: function(data){
				//alert(data);	
				var obj=JSON.parse(data);	
				var data_ = $('#disc').val();	
				if(data_ != ''){
					$('#disc').val(data_ + ", " + obj['stud']['discount_offered']);
				} else {
					$('#disc').val(obj['stud']['discount_offered']);
				}	
			}
		});
	});

});

	


	


