$(function(){
		$('#printheres').html("loading...");
		var url_ = site_url_ + "/flexihead_students/getflexihead/" ;
		var data_=$(this).serialize();
		
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
					str = str + "<td>" + obj.flex[i]['New_Flexible_Head'] + "</td>";
					str = str + "<td>" + obj.flex[i]['Amount'] + "</td>";
					str = str + "<td>" + obj.flex[i]['How_Many_Times'] + "</td>";
					//str = str + "<td>" + obj.flex[i]['fhead_ID'] + "</td>";

					str = str + '<td>';
				//	str = str + '<i class= "icon-pencil"></i>';
					str = str + '<span class=" fa fa-pencil print"></span>';
					str = str + "/" +'<span class="fa fa-remove del"></span>';
					str = str +  '</td>';
					str = str + "</tr>";
				}
				str = str + "</table>";
			

				$('#printheres').html(str);
			}
		});
		    return false;
	});

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
					//str = str + '<td class="stdin" id="'+obj.class[i]['class_ID']+'">';
					str = str  + obj.clss[i]['course'] + ' ' + obj.clss[i]['sem_ID'] + ' ' + obj.clss[i]['section'] + "</td>";
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
				str = str + '</table>';
				$('#rgn').html(str);
			}
		});
		    return false;
	});


$('body').on('click','.print',function(){
			var url_ = site_url_ + "/flexihead_students/getflexihead/" ;
		
			$.ajax({
			type: "GET",
			url: url_,
		//	data:data_,
			success: function(data){
				//alert(data);
				var obj = JSON.parse(data);
				var str = '';
				str = str + '<div class="dotted"';
 		 		str=str+ '<div class="widget-box" id="edit_flexible_head_panel" style="display: block;">'
           		str=str+ '<div style="border: #ff0000 solid 0px; width: 50px; height:50px; float: right; right: 0px; z-index: 2222; position: absolute;" id="student_photo_here"></div>';
           		str=str+ ' <div class="widget-title"> <span class="icon"> <i class="icon-hand-right"></i> </span>';
               	str=str+ ' <h5 style="color: #DD0000">Update Flexible Head</h5>';
           		str=str+ ' </div>';
           		str=str+ '<div class="widget-content" style="color: #DD0000">';
           		str = str + '<form name="frm" action="http://localhost/fms/index.php/flexihead_students/insert_record" method="post">';
              	str=str+ '<div class="control-group">';
                str=str+ '<label class="control-label">Edit Flexible Head</label>';
                str=str+ '<div class="controls">';
                str=str+ '<input type="text" name="txtffh" value="" class="span12 text" autocomplete="off" required="required" id="" style="color: #0000DD">';
                str=str+ '<input type="hidden" name="txtFlexID_edit" value="1" class="span12 text" required="required" id="txtFlexID_edit">';
                str=str+ '</div>';
               	str=str+ '</div>';
                str=str+ '<div class="control-group">';
                str=str+ '<label class="control-label">Amount</label>';
               	str=str+ '<div class="controls">';
                str=str+'<input type="text" name="txtffhamt" value="" class="span12 text" autocomplete="off" required="required" id="txtFlexibleHeadAmt_edit">';
                str=str+ '</div>';
                str=str+ '</div>';
                str=str+ '<div class="control-group" data-select2-id="30">';
                str=str+ '<label class="control-label">How many times</label>';
                 str=str+ '<div class="controls" data-select2-id="29">';
                 str=str+ '<select name="txthmt" id="cmbDuration_felxi_edit" class="span12 select2-hidden-accessible" required="required" data-select2-id="cmbDuration_felxi_edit" tabindex="-1" aria-hidden="true" style="">';
				str=str+ '<option value="1" data-select2-id="17">One time</option>';
				str=str+ '<option value="n" selected="selected" data-select2-id="8">As per selected months</option>';
				str=str+ '</select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="18" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-cmbDuration_felxi_edit-container"><span class="select2-selection__rendered" id="select2-cmbDuration_felxi_edit-container" role="textbox" aria-readonly="true" title="As per selected months"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>';
                 str=str+ '</div>';
                str=str+' </div>';
                str=str+ '<div class="control-group">';
                str=str+ '<div class="controls">';
                str=str+ '<input type="submit" value="Update" class="btn btn-primary" id="update_flexible_head">'
                  str=str+ '<input type="reset" value="Cancel" class="btn btn-danger cancel_flexible_head_update">';
                  str = str + '</form>';
                  str=str+ '</div>';
               str=str+  '</div>';
                str=str+ '</div>';
               str=str+ '</div>	';
               str + str + '</div>';
				$('#printheres1').html(str);
       }
		});
		    return false;
	});

$('body').on('click','.del',function(){
	//alert(this.id);
	var str=this.id;
	var url_ = site_url_ + "/flexihead_students/deleteflexihead/"+str ;
	var data_=$(this).serialize();
		
			$.ajax({
			type: "GET",
			url: url_,
			data:data_,
			success: function(data){
				
				var obj = JSON.parse(data);
				/*var str = '';
				str = str + '<form action="http://localhost/fms/index.php/flexihead_students/delete_record" method="post">';
				str = str + '<input class="btn btn-danger" type="submit" value="delete">';
				str = str + '<input class="btn btn-success" type="cancel" value="cancel">';
				str = str + '</form>';
				$('#ptrn').html(str);*/
			}
		});
	});
 
$('body').on('click','.stdin',function(){
	var crsid= this.id;
	var url_= site_url_  + "/studentregi/getstudent/" + crsid;
		$.ajax({
			type:"GET",
			url : url_,
			success:function(data){
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
				
				$('#stdin').html(str);
			}
		});
});
