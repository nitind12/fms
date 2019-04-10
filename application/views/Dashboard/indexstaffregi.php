<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>Home
				</a></li>
				<li class="active">Registration</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Staff</h1>
			</div>
		</div><!--/.row-->
		<div class="col-lg-3">
			<div class="panel-heading">Registration
			</div>
			<div class="panel-body">
				<form name="form" method="post" action="<?php echo site_url('staffregi/insert_record')?>">
				<div class="form-group ">
										<label>Select Staff</label>
										<select class="form-control" name="txtstts" id="cmbStudents">
											<option>Select</option>
											<option>New..</option>
											<?php foreach ($students as $item) { ?>
											<option value="<?php echo $item->student_ID;?>"><?php echo $item->first_Name . " " . $item->last_Name; ?></option>
											<?php } ?>
										</select>
										<div style="clear: both;" id="printhere"></div>
								</div>
								<div class="form-group">
										<label>Designation</label>
										<select class="form-control" name="txtdsgntn" id="txtdsgntn">
											<option>Select </option>
											<option>Faculty</option>
											<option>Director</option>
											<option>Accountant</option>
											
										</select>
								</div>
								<div class="form-group">
									<label>Date Of Registration </label>
									<input class="form-control" type="date" name="txtdte">
								</div>	


					<div>
					<input class="btn btn-success" type="submit" value="Update">
				</div>

		</div>
	</div>
		<div class="col-lg-9">
			<ul class="pagination">
				<li class="active"><a data-toggle="tab" href="#personal">Personal Details</a></li>
				<li><a data-toggle="tab" href="#address">Address</a></li>
				<li><a data-toggle="tab" href="#category">Category</a></li>
			</ul>
			<div class="tab-content">
				<div id="personal" class="tab-pane fade active in">
								<!--student details-->
								
								<div class="col-md-3">
									<div class="form-group">
									<label>First Name</label>
									<input class="form-control" placeholder="Input First Name" name="txtfrstnme" id="txtfrstnme">
								</div></div>
								<div class="col-md-3">
									<div class="form-group">
									<label>Last Name</label>
									<input class="form-control" placeholder="Input Last Name" name="txtlstnme" id="txtlstnme">
								</div>
							</div>
									<div class="form-group col-md-3"> 
										<label>Gender</label>
										<div class="radio">
											<label>
												<input type="radio" name="txtmle" value="MALE" id="txtmle">Male
											</label>&nbsp &nbsp &nbsp
											<label>
												<input type="radio" name="txtfmle" value="FEMALE" id="txtfmle">Female
											</label>
										</div><br>
									</div>
									<div class="form-group col-md-3" >
									<label>Nationality</label>
									<input class="form-control" name="txtntnlty" id="txtntnlty"><br>
									</div>

								<div class="form-group col-md-3">
									<label>Date Of Birth </label>
									<input class="form-control" type="date" id="txtdte" name="txtdte">
								</div>
								<div class="form-group col-md-3">
									<label>Blood Group</label>
									<input class="form-control" name="txtbgrp" id="txtbgrp">
								</div>

								<div class="col-md-3">
									<div class="form-group">
									<label>Contact No.</label>
									<input class="form-control" name="txtcntct" id="txtcntct">
								</div></div>

								<div class="col-md-3">
									<div class="form-group">
									<label>Email Address</label>
									<input class="form-control" name="txtemail" id="txtemail">
								</div></div>
								<div class="form-group col-md-3">
										<label>Status</label>
										<select class="form-control" name="txtstts" id="txtstts">
											<option>select</option>
											<option>0</option>
											<option>1</option>
										</select>
									</div>
										<div class="col-md-3">
									<div class="form-group">
									<label>Username</label>
									<input class="form-control" placeholder="Input Username" name="txtusrnme" id="txtusrnme">
								</div></div>
								
							
							<div class="col-sm-12">
									<button type="submit" class="btn btn-success">Update</button>
									<button type="cancel" class="btn btn-danger">Cancel</button>
								
							</div>
							<div class="form-group">
									<div class="col-md-12 widget-left" id="msghere" style="font-size: 10px; color: #ff0000">
									<br><br>	<?php echo $this->session->flashdata('msg_'); ?>
									</div>
								</div>
						
						</div>
					
					<div id="address" class="tab-pane fade">
						
							<div class="form-group col-sm-6">
									<label>Address</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
						
						<div class="col-sm-12">
									<button type="submit" class="btn btn-success">Update</button>
									<button type="cancel" class="btn btn-danger">Cancel</button>
							</div>
							<div class="form-group">
									<div class="col-md-12 widget-left" id="msghere" style="font-size: 10px; color: #ff0000">
									<br><br>	<?php echo $this->session->flashdata('msg_'); ?>
									</div>
								</div>	
					</div>
					
					<div id="category" class="tab-pane fade">
							<div class="form-group col-md-3" >
										<label>Category</label>
										<select class="form-control" name="txtctgry" id="txtctgry">
											<option>select</option>
											<option>GENERAL</option>
											<option>SC</option>
											<option>ST</option>
											<option>OBC</option>
										</select>
									</div>
							
							<div class="col-sm-12">
								<button type="submit" class="btn btn-success">Update</button>
								<button type="cancel" class="btn btn-danger">Cancel</button>
						</div>
						<div class="form-group">
									<div class="col-md-12 widget-left" id="msghere" style="font-size: 10px; color: #ff0000">
									<br><br>	<?php echo $this->session->flashdata('msg_'); ?>
									</div>
								</div>
					</div>


					</form>
					</div>
				</div>
			</div>
		
			
			<div class="col-sm-12">
				<p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
			</div>
		</div><!--/.row-->
	</div>