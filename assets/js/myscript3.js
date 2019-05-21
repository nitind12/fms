$(function(){
		$('#printheres').html("loading...");

		var url_ = site_url_ + "/flexihead_students/getflexihead/" ;
		var data_ = $(this).serialize();
		
		$.ajax({
			type: "GET",
			url: url_,
			data:data_,
			success: function(data){
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
					str = str + "<td>" + obj.flex[i]['fee_Head'] + "</td>";
					str = str + "<td>" + obj.flex[i]['amount'] + "</td>";
					str = str + "<td>" + obj.flex[i]['how_many_Times'] + "</td>";
					
					str = str + '<td>';
					str = str + '<span class=" fa fa-pencil print" id="'+obj.flex[i]['flexible_head_ID']+'"></span>';
					str = str + "/" +'<span class="fa fa-remove del" id="'+obj.flex[i]['flexible_head_ID']+'"></span>';
					str = str +  '</td>';
					str = str + "</tr>";
				}
				str = str + "</table>";
			

				$('#printheres').html(str);
			}
	 });
		    return false;
});

/*function callEdit(id){
	//alert(id);
}*/

	$(function(){
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
				str = str + "<th>Amount</th>";

				str = str + "</tr>";
				for(i=0; i<obj.flex.length; i++){
					str = str + "<tr>";
					str = str + '<td><input type="radio"  value="'+obj.flex[i]['flexible_head_ID']+'" class="flex" name="flex_head" id="'+obj.flex[i]['flexible_head_ID']+'"></td>';
					str = str + "<td>" + obj.flex[i]['fee_Head'] + "</td>";
					str = str + "<td>" + obj.flex[i]['amount'] + "</td>";

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
				for(i=0; i<obj.clssTotal.length; i++){
					str = str + "<tr>";
					str = str + '<td><input type="radio" name="clss" value="'+obj.clssTotal[i]['class_ID']+'" id="'+obj.clssTotal[i]['class_ID']+'" class="stdi"></td>';
					//str = str + '<td class="stdin" id="'+obj.class[i]['class_ID']+'">';
					str = str + "<td>" + obj.clssTotal[i]['course'] + ' ' + obj.clssTotal[i]['sem_ID'] + ' ' + obj.clssTotal[i]['section'] + "</td>";
					str = str + "</tr>";
				}
				 
				str = str + "</table>";
				$('#csk').html(str);
			}
		});
		    return false;
	});




$('body').on('click','.print',function(){
	//alert(this.id);
	var str=this.id;
			var url_ = site_url_ + "/flexihead_students/getflexihead_data/"+str ;
		
			$.ajax({
			type: "POST",
			url: url_,
		//	data:data_,
			success: function(data){
				//alert(data);
				var obj = JSON.parse(data);
				var str = '';
				str=str+ '<div class="widget-box" id="editClass" style="display:block">';
            	 str=str+ '<div class="widget-title"  style="color: #cc3300"> <span class="icon"> <i class="icon-align-justify"></i> </span>';
                	 str=str+ '<h5  style="color: #cc3300">Edit Class</h5>';
                 str=str+ '</div>';
            str=str+ '<div class="widget-content nopadding">';
                str=str+ '<div class="control-group">';
                str=str+ '<form action="#" class="form-horizontal" name="frmupdate" id="frmupdate" method="post" accept-charset="utf-8">';
                 	str=str+ '<label class="control-label" style="color: #cc3300">Class</label>';
                 	str=str+   '<div class="controls">';                      
          				 str=str+ '<input type="text" name="txtffh" value="'+obj.flex_data[0].fee_Head+'" autocomplete="off" required="required" class="txtEdit1" id="txtffh"/>';
          		 	str = str + '</div>';
          		 	str=str+ '<label class="control-label" style="color: #cc3300">Semester</label>';
                 	str=str+   '<div class="controls">';                      
             				 str=str+ '<input type="text" name="txtffhamt" value="'+obj.flex_data[0].amount+'" autocomplete="off" required="required" class="txtEdit2" id="txtffhamt"/>';
          		 	str = str + '</div>';
          		 	str=str+ '<label class="control-label" style="color: #cc3300">Section</label>';
          		 	str = str + '<select class="form-control" name="txthmt" id="txthmt">';
										str = str + '<option>Select</option>';
								        str = str + '<option>one Time</option>';
									    str = str + '<option>As per selected Months</option>';
								         str = str + '</select>';
                                 
                 	str=str+   '<div class="controls">';                      
                 		//str=str+ '<input type="hidden" name="txtEditClass_ID" value="" autocomplete="off" required="required" class="span11" id="txtEditClass_ID"/>';
          		 	str = str + '</div>';

          		 	str = str + '<div class="form-actions" align="right">';  
                     str = str + '<input type="button" id="'+obj.flex_data[0].flexible_head_ID+'" value="Update" class="btn btn-danger flexUpdate" style="margin-top:10px;">';
                    str = str + '<button type="reset" class="btn btn-primary classUpdateCancel" style="margin-top:10px;">Cancel</button>';                             
                    str = str + '</div>';
                    str = str + "<div style='color: #ff0000;' id='msg_'></div>";
          		 str = str + '</form>';
                 str=str+ '</div>';
             str=str+ '</div>';
            str = str + '</div';
				$('#printheres1').html(str);
       }
	});
});
$('body').on('click', '.flexUpdate', function(){
		//alert(this.id);
		var id1=this.id;
		var url_ = site_url_ + "/flexihead_students/updateflexihead_data/"+id1 ;

		var data_=$('#frmupdate').serialize();
		//alert(data_);
		$.ajax({
			type: "POST",
			url: url_,
			data:data_,
			success: function(data){
				var obj = JSON.parse(data);
				//$('#msg_').html(obj._update.msg);
			},
			error: function(xhr, status, error){
				alert(xhr.responseText);
			}
	});

});

$('body').on('click','.del',function(){
	//alert(this.id);
	var fhid=this.id;
	var url_ = site_url_ + "/flexihead_students/delete_record/"+fhid ;
		
			$.ajax({
			type: "GET",
			url: url_,
			success: function(data){
				alert('deleted');
		}
		});
	});
 
$('body').on('click','.stdi',function(){
	var crsid= this.id;
	var url_= site_url_  + "/studentregi/getStudents/" + crsid;
		$.ajax({
			type:"GET",
			url : url_,
			success:function(data){
				var obj = JSON.parse(data);
				var str = '';
				str = str + '<table class="table table-bordered">';
				str = str + '<tr>';
				str = str + '<td>#</td>';
				str = str + '<th>ID</th>';
				str = str + '<th>Student Name</th>';
				str = str + '</tr>';
				for(i=0;i<obj.stud.length;i++){
					str = str + '<tr>';
					str = str + '<td><input type="checkbox" name="std[]" id="'+obj.stud[i]['student_ID']+'" value="'+obj.stud[i]['student_ID']+'"></td>';
					str = str + "<td>" + obj.stud[i]['student_ID'] + "</td>";
					
					str = str + "<td>" + obj.stud[i]['first_Name'] + ' ' + obj.stud[i]['last_Name'] + "</td>";
					str = str + "</tr>";
			}
				str = str + "</table>";
				
				$('#studen').html(str);
			}
		});
});

$('body').on('click','.stdi',function(){
	var crsid= this.id;
	var url_= site_url_  + "/classes/getclass/" + crsid;
		$.ajax({
			type:"GET",
			url : url_,
			success:function(data){
				var obj = JSON.parse(data);
			var str = " ";
				str = str + "<span class='btn btn-success'><strong>" +obj.clssTotal[crsid-1]['course'] + ' ' + obj.clssTotal[crsid-1]['sem_ID'] + ' ' + obj.clssTotal[crsid-1]['section'];
				str = str + "</strong></span>";
				
				$('#clswsee').html(str);
			}
		});
});
