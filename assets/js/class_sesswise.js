$(function(){
		$('#class_sesswise').html("loading...");

		var url_ = site_url_ + "/class_sessionwise/getclass_sesswise/" ;
		var data_=$(this).serialize();
		
		$.ajax({
			type: "GET",
			url: url_,
			data:data_,
			success: function(data){
				//alert(data);
				var obj = JSON.parse(data);
				var str = '';
				str = str + '<table class="table table-bordered table-hover">';
				str = str + "<tr>";
				str = str + "<th> Class</th>";

				str = str + "</tr>";
				for(i=0; i<obj.class_sessionwise.length; i++){
					str = str + "<tr>";
					str = str + '<td class="clss"  id="'+obj.class_sessionwise[i]['class_sess_ID']+'">';
					str = str  + obj.class_sessionwise[i]['class_sess_ID']; 
					str = str + "</td>";

					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#class_sesswise').html(str);
			}
		});
		    return false;
});
$('body').on('click','.clss',function(){
		$('#class_in_session').html("loading...");
		//alert(this.id);
		var str = this.id;

		var url_ = site_url_ + "/class_sessionwise/getclass_in_session/"+str ;
		var data_=$(this).serialize();
		
		$.ajax({
			type: "GET",
			url: url_,
			data:data_,
			success: function(data){
				//alert(data);
				var obj = JSON.parse(data);
				var str = '';
				str = str + '<table class="table table-bordered table-hover">';
				for(i=0; i<obj.class_in_session.length; i++){
					str = str + "<tr>";
					str = str + "<td>" + obj.class_in_session[i]['course'] + ' ' + obj.class_in_session[i]['sem_ID'] + ' ' + obj.class_in_session[i]['section'];
					str = str + "</td>";

					str = str + "</tr>";
				}
				str = str + "</table>";
				$('#class_in_session').html(str);
			}
		});
		    return false;
});

