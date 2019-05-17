$(function(){
		$('#printstaticdata').html("loading...");

		var url_ = site_url_ + "/statichead_students/getstatichead/" ;
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
				str = str + "<th>Static Heads</th>";
				str = str + "<th>Amount(INR)</th>";
				str = str + "<th>How Many Times</th>";
				str = str + "<th>Actions</th>";
				str = str + "</tr>";
				for(i=0; i<obj.static_data.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.static_data[i]['fee_Head'] + "</td>";
					str = str + "<td>" + obj.static_data[i]['amount'] + "</td>";
					str = str + "<td>" + obj.static_data[i]['how_many_Times'] + "</td>";
					
					str = str + '<td>';
					str = str + '<span class=" fa fa-pencil print" id="'+obj.static_data[i]['static_head_ID']+'"></span>';
					str = str + "/" +'<span class="fa fa-remove del" id="'+obj.static_data[i]['static_head_ID']+'"></span>';
					str = str +  '</td>';
					str = str + "</tr>";
				}
				str = str + "</table>";
			

				$('#printstaticdata').html(str);
			}
	 });
		    return false;
});


$('body').on('click','.print',function(){
	//alert(this.id);
	var str=this.id;
			var url_ = site_url_ + "/statichead_students/getstatichead_data/"+str ;
		
			$.ajax({
			type: "POST",
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
                str=str+ '<input type="text" name="txtffh" value="'+obj.statichead_data[0].fee_Head+'" class="span12 text" autocomplete="off" required="required" id="" style="color: #0000DD">';
                str=str+ '<input type="hidden" name="txtFlexID_edit" value="1" class="span12 text" required="required" id="txtFlexID_edit">';
                str=str+ '</div>';
               	str=str+ '</div>';
                str=str+ '<div class="control-group">';
                str=str+ '<label class="control-label">Amount</label>';
               	str=str+ '<div class="controls">';
                str=str+'<input type="text" name="txtffhamt" value=" '+obj.statichead_data[0].amount+'" class="span12 text" autocomplete="off" required="required" id="txtFlexibleHeadAmt_edit" style="color: #0000DD" >';
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

                str=str+ '<br></br>';

                str=str+ '<input type="submit" value="Update" class="btn btn-primary" id="update_flexible_head">'
                  str=str+ '<input type="reset" value="Cancel" class="btn btn-danger cancel_flexible_head_update">';
                  str = str + '</form>';
                  str=str+ '</div>';
               str=str+  '</div>';
                str=str+ '</div>';
               str=str+ '</div>	';
               str + str + '</div>';
				$('#printstaticdata1').html(str);
       }
	});
});
$('body').on('click','.del',function(){
	//alert(this.id);
	var shid=this.id;
	var url_ = site_url_ + "/statichead_students/delete_record/"+shid ;
		
			$.ajax({
			type: "GET",
			url: url_,
			success: function(data){
				alert('deleted');
			}
		});
	});
$(function(){
	
		$('#printclasshere').html("loading...");

		var url_ = site_url_ + "/statichead_students/getstatichead/" ;
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
				for(i=0; i<obj.classes.length; i++){
					str = str + "<tr>";
					str = str + '<td><input type="checkbox"  name="clss" value="'+obj.classes[i]['class_sess_ID']+'" id="'+obj.classes[i]['class_sess_ID']+'" class="classes"  ></td>';
					//str = str + '<td class="stdin" id="'+obj.class[i]['class_ID']+'">';
					str = str + "<td>" + obj.classes[i]['class_sess_ID'];
					str = str + '</td>';
					str = str + "</tr>";
				}
				 
				str = str + "</table>";
				$('#printclasshere').html(str);
			}
		});
		    return false;
	});
$(function(){
	
		$('#printselectedclasshere').html("loading...");

		var url_ = site_url_ + "/statichead_students/getstatichead/" ;
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
				for(i=0; i<obj.classes.length; i++){
					str = str + "<tr>";
					str = str + '<td><span class="fa fa-plus"></td>';
					//str = str + '<td class="stdin" id="'+obj.class[i]['class_ID']+'">';
					str = str + "<td>" + obj.classes[i]['class_sess_ID'];
					str = str + "</td>";
					str = str + "</tr>";
				}
				 
				str = str + "</table>";
				$('#printselectedclasshere').html(str);
			}
		});
		    return false;
	});
$(function(){
		$('#staticheadshere').html("loading...");

		var url_ = site_url_ + "/statichead_students/getstatichead/" ;
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
				str = str + "<th>Static Heads</th>";
				str = str + "<th>Amount</th>";
				str = str + "</tr>";
				for(i=0; i<obj.static_data.length; i++){
					str = str + "<tr>";
					str = str + '<td><input type="radio"  value="'+obj.static_data[i]['fee_Head']+'" class="static" name="static_head" id="'+obj.static_data[i]['static_head_ID']+'"></td>';
					str = str + "<td>" + obj.static_data[i]['fee_Head'] + "</td>";
					str = str + "<td>" + obj.static_data[i]['amount'] + "</td>";
					str = str + "</tr>";
				}
				 
				str = str + "</table>";
				$('#staticheadshere').html(str);
			}
		});
		    return false;
	});
	


