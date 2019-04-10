<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>Home
				</a></li>
				<li class="active">master</li>
			</ol>
		</div><!--/.row-->
		
		<div class="panel-heading">static in class</div>
		<div class="panel-body">
			<form class="form form-vertical" action="<?php echo site_url('sessions/insert_record');?>" method="post">
						 
				<fieldset>
								<!--student details-->
								<div class="widget-box">
            <div  style="border: #ff0000 solid 0px; width: 50px; height:50px; float: right; right: 0px; z-index: 2222; position: absolute;" id="student_photo_here"></div>
            <div class="widget-title"> <span class="icon"> <i class="icon-ok-sign"></i> </span>
                <h5>Add Static Heads</h5>
            </div>
            <div class="widget-content">
                <div class="control-group">
                    <label class="control-label">New Static Head</label>
                    <div class="controls">
                        <input type="text" name="txtFeeStaticHead" value="" class="span12 text" autocomplete="off" required="required" id="txtFeestaticHead"  />
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label">How many times</label>
                    <div class="controls">
                                                <select name="cmbDuration_felxi" id="cmbDuration_felxi" class="span12" required="required">
<option value="1">One time</option>
<option value="n" selected="selected">As per selected months</option>
</select>
                    </div>
         
					<div class="controls span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
                <h5>View Static Heads</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: left">Static Heads</th>
                            <th style="text-align: left">How many times</th>
                            <th>Discount Applicable ?</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="static_fee_heads_here">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

               <div class="widget-box">
            <div  style="border: #ff0000 solid 0px; width: 50px; height:50px; float: right; right: 0px; z-index: 2222; position: absolute;" id="student_photo_here"></div>
            <div class="widget-title"> <span class="icon"> <i class="icon-ok-sign"></i> </span>
                <h5>static Heads</h5>
            </div>
            <div class="widget-content">
                <div class="control-group">
                    <label class="control-label">Select Head</label>
                    <div class="controls">
                                                <select name="cmbStaticHeads" id="cmbStaticHeads" class="span12" required="required">
<option value="x" selected="selected">Select Head</option>
<option value="1">REGISTRATION</option>
<option value="2">ADMISSION</option>
<option value="9">WITHDRAWL</option>
<option value="10">TUITION</option>
<option value="11">BOOK BANK</option>
<option value="12">SPORTS</option>
<option value="13">MEDICAL</option>
<option value="14">EXAM FEE</option>
</select>
                    </div>
                </div>
             
    			
				
								
		
			
			<div class="col-sm-12">
				<p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
			</div>
		</div>
