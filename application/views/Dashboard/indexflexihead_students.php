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
	       <div class="tab-content">		
				<div id="mfhead" class="tab-pane fade in active">

								<div class="panel-heading">Add Flexible Heads</div>
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
                <table>
                  <tr><th><div style="clear: both;" id= "printheres"></div></th>
                      <th> <div style="clear: both;" id= "printheres1"></div> <div style="clear: both;" id= "ptrn"></div>  </th>
                    </tr>
                  </table>
                <div id="flexi"></div>
            </div>
        </div>
    </div>
</div>


    
    <div id="afhead" class="tab-pane fade">

             <div class="panel-heading"> <h3>Flexible Heads</h3></div>
            <table class="table table-bordered with-check" >
             <tr>
               <th>                   
                   <table class="table table-bordered table-striped with-check">
                       <tr>
                          <th style="text-align: left">Select Flexible Head</th>
                       </tr>
                          <th> <div class="myscroll" id="afh" style="clear: both; overflow: hidden;";></div></th>
                          </tr>
                   </table>
               </th>
               <th>
                   <table class="table table-bordered table-striped with-check">
                     <tr>
                         <th style="text-align: left">Classes in Session 2018-19</th>
                      </tr>
                        <th> <div class="myscroll" id="csk" style="clear: both";></div></th>

                      </tr>
                    </table>
               </th>
               <th>
                   <table class="table table-bordered table-striped with-check">
                      <tr>
                       <th style="text-align: left">Select Classe(s)</th>
                    </tr>
                    <tr>
                       <th>
                       <div id="stdin" style="clear:both"></div>
                        <div class="controls">
                            <input type="button" value="Add Fee to selected Student(s)" class="btn btn-success span9" id="associate_flexible_head_with_Students">
                              <input type="reset" value="X" class="btn btn-danger cancel_sassociate_flexible_head_with_Student span3" style="float: right"> </div>
                        </th>
                    </tr>
                  </table>
                </th>
              </tr>
            </table>


                       <br><br> 
          <h4><strong>View Associated Flexible Heads</strong></h4>
  
        <table class="table table-bordered with-check">
          <tr>
            <th>
              <table class="table table-bordered table-striped with-check">
                <tr>
                  <th>Classes in Session 2018-19</th>
               </tr>
               <tr>
                   <th style="text-align: left">Select Class</th>
               </tr>
               <tr>
                   <th><div  id="prhrt" style="clear: both"></div></th>
              </tr>
            
              </table>
            </th>
             <th>
              <table class="table table-striped with-check">
             <tr>
             <th>  Associated Heads for the Selected Class</th>
            </tr>
            <tr>
              <th><br><br></th>
            </tr>

           <tr>
             
              <th>Student with there Flexible Heads</th>  
            </tr>
            <tr>
                       <th>   <div class="myscroll" id="rgn" style="clear:both"></div></th>
            </tr>
          </table>
        </th>
        </tr>
      </table>

          </div>
        </div>

       <div class="col-sm-12">
				<p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
			</div>
