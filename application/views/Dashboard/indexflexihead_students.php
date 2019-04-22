<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>Home
				</a></li>
				<li class="active">Master</li>
			</ol>
		</div><!--/.row-->
		
			<div class="col-lg-12">
				<h1 class="page-header">Flexihead-Students</h1>
			</div>
			<ul class="pagination">
				<li class="active"><a data-toggle="tab" href="#mfhead">Manage Flexible Heads</a></li>
				<li><a data-toggle="tab" href="#afhead">Associate Flexible Heads</a></li>
				
			</ul>
			
				<div id="mfhead" class="tab-pane fade active in">
								<div class="panel-heading">Add Flexible Heads<em class="caret"></em></div>
								<div class="panel-body ">
								<!--student details-->
                        <form class="form form-vertical" name="frm" action="<?php echo site_url('flexihead_students/insert_record');?>" method="post" id="frm">


								<div class="col-md-3">
									<div class="form-group">
									<label>New Flexible Head</label>
									<input class="form-control"name="txtffh" id="txtffh">
								</div></div>
								<div class="col-md-3">
									<div class="form-group">
									<label>Amount</label>
									<input class="form-control" name="txtffhamt" id="txtffhamt">
								</div>
							</div>
								<div class="form-group col-md-3">
										<label>How Many Times</label>
										<select class="form-control" name="txthmt" id="txthmt">
											<option>Select</option>
											<option>One Time</option>
											<option>As Per Selected Months</option>
										</select><br>
									</div>
								
								
							
							<div class="col-sm-12">
									<button type="submit" class="btn btn-success">Add</button>
                  
								
							</div>

							<div class="form-group">
									<div class="col-md-12 widget-left" id="msghere" style="font-size: 10px; color: #ff0000">
									<br><br>	<?php echo $this->session->flashdata('msg_'); ?>
									</div>
								</div>
						</form>

            </div>
						 <div class="controls span6">
        <div class="widget-box">
            
            <div class="widget-content nopadding">
                <div class="">View Flexible Head<em class="caret"></em></div>
                <div style="clear: both;" id= "printheres"></div>
                <div id="flexi"></div>
            </div>
        </div>
    </div>
</div>


    
    <div id="afhead" class="tab-pane fade active-in active-in ">
               <div class="panel-heading">Flexible Heads<em class="caret"></em></div>
               <div class="panel-body ">
                                
                <table class="table table-bordered table-striped with-check">
                  
                    <tr>
                      <th style="text-align: left">Select Flexible Head</th>
                   <th style="text-align: left">Classes in Session 2018-19</th>

                    </tr>
                <tr>
        <th> <div id="afh" style="clear: both";></div></th>

           <th> <div id="csk" style="clear: both";></div></th>
            </tr>
            
            </table>
          </div>
          
          <div class="widget-content nopadding" style="overflow: auto; height: 350px">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th style="text-align: left">Select Class</th>
                </tr>
              </thead>
              <tbody id="classes_to_find_students">
                
              </tbody>
            </table>
         <div id="afh" style="clear: both";></div>
                

       </div>
      <div class="control-group">
        <div class="widget-box">
          <div class="widget-title">
            <div style="float: left; padding: 5px; border:#C0C0C0 solid 1px; width: 20px;height: 25px; text-align: center">
              <input type="checkbox" id="classes_associates_students_for_flexibleHeads_check_boxes" />
            </div>
            <h5 id="name_of_class_for_students"></h5>
            <div style="clear: both"></div>
          </div>
          <div class="widget-content nopadding" style="overflow: auto; height: 300px">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th style="text-align: left">Select Classe(s)</th>
                </tr>
              </thead>
              <tbody id="students_for_selected_class">
                
              </tbody>
            </table>
          </div>
      </div>
     </div>
     <div class="control-group">
            <div class="controls">
                <input type="button" value="Add Fee to selected Student(s)" class="btn btn-success span9" id="associate_flexible_head_with_Students">
                <input type="reset" value="X" class="btn btn-danger cancel_sassociate_flexible_head_with_Student span3" style="float: right">
            </div>
        </div>

<br />
<h4>View Associated Flexible Heads</h4>
    <div class="controls span12">
      <div class="controls span4">
    <div class="widget-box">
      <div class="widget-title"> 
        <h5>Classes in Session 2018-19</h5>
      </div>
      <div class="widget-content nopadding" style="overflow: hidden;">

        <table class="table table-bordered table-striped with-check">
          <thead>
            <tr>
              <th style="text-align: left">Select Class</th>
           </tr>
           <tr>
           <th> <div id="csk" style="clear: both";></div></th>
            
           </tr>
          </thead>
          <tbody id="classes_to_View_Students_status">
            
          </tbody>
        </table>
      </div>
    </div>
</div>
</div>
<div class="controls span8">
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>Associated Heads for the Selected Class</h5>
    </div>
    <input type="hidden" value="NA" id="AssociatedClass_to_FlexiHead">
    <div class="widget-content" style="overflow: hidden" id="AssociatedHeads_against_selectedClass">
        &nbsp;
    </div>
  </div>
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Students with there Felxible Heads</h5>
                <h5 style="float: right;"><a href="" class="icon-print"></a></h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered" id="print_associated_flex_with_students" style="text-align: left">
                    <thead>
                        <tr>
                        <th style="text-align: left">Registration No</th>
                        <th style="text-align: left">Name</th>
                        <th style="text-align: left">Flexible Heads</th>
                        </tr>
                    </thead>
                    <tbody id="student_associated_flexibleheads_classwise">
                    </tbody>
                </table>
            </div>
</div>
</div>

    
    	
			
			<div class="col-sm-12">
				<p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
			</div>
