$(function(){
		$('#print').html("loading...");

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
				str = str + "<th>Class Name</th>";
				str = str + "<th>Action</th>";

				str = str + "</tr>";
				for(i=0; i<obj.clssTotal.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.clssTotal[i]['course'] + ' ' + obj.clssTotal[i]['sem_ID'] + ' ' + obj.clssTotal[i]['section'] +"</td>";
					str = str + "<td>" + "<span class='fa fa-pencil prnt'></span>" + "|" + '<span class="fa fa-remove del " id="'+obj.clssTotal[i]['class_ID']+'"></span>' +  "</td>";

					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#print').html(str);
			}
		});
	});
$('body').on('click','.del',function(){
	var cid=this.id;
	var url_ = site_url_ + "/classes/delete_record/"+cid ;
		
			$.ajax({
			type: "GET",
			url: url_,
			success: function(data){
				alert('deleted');
		}
		});
	});


$('body').on('click','.prnt',function(){
		$('#phrs').html("loading...");

			var url_ = site_url_ + "/classes/getclass/" ;
			$.ajax({
			type: "GET",
			url: url_,
		//	data:data_,
			success: function(data){
				//alert(data);
				var obj = JSON.parse(data);
				var str = '';
				
  				 str=str+ '<div class="widget-box" id="editClass" style="display:block">';
            	 str=str+ '<div class="widget-title"  style="color: #cc3300"> <span class="icon"> <i class="icon-align-justify"></i> </span>';
                 str=str+ '<h5  style="color: #cc3300">Edit Class</h5>';
                 str=str+ '</div>;'
                str=str+ '<div class="widget-content nopadding">';
                str=str+ '<div class="control-group">';
                 str=str+ '<form action="#" class="form-horizontal" name="frmClasses_Edit" id="frmClasses_Edit" method="post" accept-charset="utf-8">';
                 str=str+ '<label class="control-label" style="color: #cc3300">Class</label>';
                 str=str+   '<div class="controls">';                      
                 str=str+ '<input type="hidden" name="txtEditClass_ID" value="" autocomplete="off" required="required" class="span11" id="txtEditClass_ID"/>';
          		 str=str+ '<input type="text" name="txtEditClass_" value="" autocomplete="off" required="required" class="span11" id="txtEditClass_"/>';
          		 str = str + '</div>';
          		 str = str + '</form>';
                 str=str+ '</div>';
                str=str+ '</div>';
                str = str + '</div';
				 $('#phrs').html(str);
	
	}

	});

});
