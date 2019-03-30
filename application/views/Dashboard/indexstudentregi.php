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
				<h1 class="page-header">Student</h1>
			</div>
		</div><!--/.row-->
		<div class="col-lg-3">
			<div class="panel-heading">Registration
			</div>
			<div class="panel-body">
				<form name="form" method="post" action="#">
				<div class="form-group ">
										<label>Select Student</label>
										<select class="form-control" name="txtstts">
											<option>Select</option>
											<?php foreach ($students as $item) { ?>
											<option value="<?php echo $item->student_ID;?>"><?php echo $item->first_Name . " " . $item->last_Name; ?></option>
											<?php } ?>
										</select>
								</div>
								<div class="form-group">
										<label>Course</label>
										<select class="form-control" name="txtstts">
											<option>Select Course</option>
											<?php foreach ($course as $item) { ?>
											<option value="<?php echo $item->course_ID;?>"><?php echo $item->course; ?></option>
											<?php } ?>
										</select>
								</div>
								<div class="form-group">
									<label>Date Of Admission </label>
									<input class="form-control" type="date" name="txtdte">
								</div>	


					<div>
					<input class="btn btn-success" type="submit" value="Update">
				</div>
			</form>

		</div>
	</div>
		<div class="col-lg-9">
			<ul class="pagination">
				<li><a data-toggle="tab" href="#personal">Personal Details</a></li>
				<li><a data-toggle="tab" href="#parents">Parent's Details</a></li>
				<li><a data-toggle="tab" href="#address">Address</a></li>
				<li><a data-toggle="tab" href="#sibling">Any Sibling(s)?</a></li>
				<li><a data-toggle="tab" href="#category">Category</a></li>
				<li><a data-toggle="tab" href="#discount">Discount(if any?)</a></li>
			</ul>
			<div class="tab-content">
				<div id="personal" class="tab-pane fade">
					<form role="form" name="frmSession" method="post" action="<?php echo site_url('fms/submitstudentdetails');?>">
								<!--student details-->
								<div class="col-md-3">
									<div class="form-group">
									<label>First Name</label>
									<input class="form-control" placeholder="Input First Name" name="txtfrstnme">
								</div></div>
								<div class="col-md-3">
									<div class="form-group">
									<label>Last Name</label>
									<input class="form-control" placeholder="Input Last Name" name="txtlstnme">
								</div>
							</div>
									<div class="form-group col-md-3"> 
										<label>Gender</label>
										<div class="radio">
											<label>
												<input type="radio" name="txtgndr" id="optionsRadios1" value="option1" >Male
											</label>&nbsp &nbsp &nbsp
											<label>
												<input type="radio" name="txtgndr" id="optionsRadios2" value="option2">Female
											</label>
										</div>
									</div>
									<div class="form-group col-md-3" >
									<label>Nationaliy</label>
									<input class="form-control" name="txtntlty">
									</div>
								<div class="form-group col-md-3">
									<label>Date Of Birth </label>
									<input class="form-control" type="date" name="txtdte">
								</div>
								<div class="form-group col-md-3">
									<label>Blood Group</label>
									<input class="form-control" name="txtbgrp">
								</div>
								<div class="form-group col-md-3">
										<label>Status</label>
										<select class="form-control" name="txtstts">
											<option>0</option>
											<option>1</option>
										</select>
								</div>
							</form>
							<form class="col-sm-12">
									<button type="submit" class="btn btn-success">Update</button>
									<button type="cancel" class="btn btn-danger">Cancel</button>
								
							</form>
						</div>
					<div id="parents" class="tab-pane fade">
						<form role="form" name="frmSession" method="post" action="<?php echo site_url('fms/submitstudentdetails');?>">
							<div class="form-group col-md-3">
									<label>Father's Name</label>
									<input class="form-control" placeholder="Input Father's Name" name="txtfnme">
								</div>
								<div class="form-group col-md-3">
									<label>Mother's Name</label>
									<input class="form-control" placeholder="Input Mother's Name" name="txtmnme">
								</div>
							</form>
							<form class="col-sm-12">
									<button type="submit" class="btn btn-success">Update</button>
									<button type="cancel" class="btn btn-danger">Cancel</button>
								
							</form>
						</div>
					<div id="address" class="tab-pane fade">
						<form>
							<div class="form-group col-sm-6">
									<label>Address</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
						</form>
						<form class="col-sm-12">
									<button type="submit" class="btn btn-success">Update</button>
									<button type="cancel" class="btn btn-danger">Cancel</button>
								
						</form>
					</div>
					<div id="sibling" class="tab-pane fade">
					<form>
							<div class="form-group col-sm-6">
									<label>If Yes then <br>Name</label>
									<input class="form-control" name="txtnme">
									
								</div>
						</form>
						<form class="col-sm-12">
								<button type="submit" class="btn btn-success">Update</button>
								<button type="cancel" class="btn btn-danger">Cancel</button>
						</form>
					</div>
					<div id="category" class="tab-pane fade">
						<form>
							<div class="form-group col-md-3" >
										<label>Category</label>
										<select class="form-control" name="ctgry">
											<option>General</option>
											<option>SC</option>
											<option>ST</option>
											<option>OBC</option>
										</select>
									</div>
							</form>
							<form class="col-sm-12">
								<button type="submit" class="btn btn-success">Update</button>
								<button type="cancel" class="btn btn-danger">Cancel</button>
						</form>
					</div>
					<div id="discount" class="tab-pane fade">
<form>
							<div class="form-group col-md-3" >
										<label>Discount offered(if any?)</label>
										<select class="form-control" name="ctgry">
											<option>No Discount</option>
											<option>Referential</option>
											<option>Categorical</option>
											<option>Other</option>
										</select>
									</div>
									<div class="form-group col-sm-6">
									<label>Discount On</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>

							</form>
							<form class="col-sm-12">
								<button type="submit" class="btn btn-success">Update</button>
								<button type="cancel" class="btn btn-danger">Cancel</button>
						</form>
					</div>
				</div>


							

					
			
				



		</div>
		
			
			<div class="col-sm-12">
				<p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
			</div>
		</div><!--/.row-->
	</div>