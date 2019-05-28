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
				str=str+ '<div class="widget-box" id="editClass" style="display:block">';
            	 str=str+ '<div class="widget-title"  style="color: #cc3300"> <span class="icon"> <i class="icon-align-justify"></i> </span>';
                	 str=str+ '<h5  style="color: #cc3300">Edit Class</h5>';
                 str=str+ '</div>';
            str=str+ '<div class="widget-content nopadding">';
                str=str+ '<div class="control-group">';
                str=str+ '<form action="#" class="form-horizontal" name="frmupdate" id="frmupdate" method="post" accept-charset="utf-8">';
                 	str=str+ '<label class="control-label" style="color: #cc3300">Edit Static Head</label>';
                 	str=str+   '<div class="controls">';                      
          				 str=str+ '<input type="text" name="txtffh" value="'+obj.statichead_data[0].fee_Head+'" autocomplete="off" required="required" class="txtEdit1" id="txtffh"/>';
          		 	str = str + '</div>';
          		 	str=str+ '<label class="control-label" style="color: #cc3300">Amount</label>';
                 	str=str+   '<div class="controls">';                      
             				 str=str+ '<input type="text" name="txtffhamt" value="'+obj.statichead_data[0].amount+'" autocomplete="off" required="required" class="txtEdit2" id="txtffhamt"/>';
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
                     str = str + '<input type="button" id="'+obj.statichead_data[0].static_head_ID+'" value="Update" class="btn btn-danger staticUpdate" style="margin-top:10px;">';
                    str = str + '<button type="reset" class="btn btn-primary classUpdateCancel" style="margin-top:10px;">Cancel</button>';                             
                    str = str + '</div>';
                    str = str + "<div style='color: #ff0000;' id='msg_'></div>";
          		 str = str + '</form>';
                 str=str+ '</div>';
             str=str+ '</div>';
            str = str + '</div';
				$('#printstaticdata1').html(str);
       }
	});
});
$('body').on('click', '.staticUpdate', function(){
		//alert(this.id);
		var id1=this.id;
		var url_ = site_url_ + "/statichead_students/updatestatichead_data/"+id1 ;

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
					str = str + '<td><input type="radio"  name="classes" value="'+obj.classes[i]['class_sess_ID']+'" id="'+obj.classes[i]['class_sess_ID']+'" class="selectclass"></td>';
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

		var url_ = site_url_ + "/statichead_students/getstatichead_details/" ;
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
				str = str + "<th>Fee Head</th>";
				str = str + "</tr>";
				for(i=0; i<obj.classes.length; i++){
				var static = '';
					
					for(j=0; j<obj.static_classes.length; j++)
					{
						if(obj.classes[i]['class_sess_ID'] == obj.static_classes[j]['class_sess_ID'])
						{
							if(static == ''){
								static = static + obj.static_classes[j]['fee_Head'];
							} else {
								static = static + ", "+ obj.static_classes[j]['fee_Head'];
							}
						}
					}				
				str = str + "<tr>";
				//	str = str + '<td><span class="fa fa-plus"></td>';
					//str = str + '<td class="stdin" id="'+obj.class[i]['class_ID']+'">';
				str = str + "<td>" + obj.classes[i]['class_sess_ID'];
				str = str + "</td>";
				str = str + "<td>" + static+ "</td>";
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
					str = str + '<td><input type="radio"  value="'+obj.static_data[i]['static_head_ID']+'" class="static" name="static_head" id="'+obj.static_data[i]['static_head_ID']+'"></td>';
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
	


