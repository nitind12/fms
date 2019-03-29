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
				<h1 class="page-header">Registration</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
					<div class="panel-heading">	
											
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body">

						
							<form role="form" name="frmSession" method="post" action="<?php echo site_url('fms/submitstudentdetails');?>">
								<!--student details-->
								<div class="col-md-3">
									<div class="form-group">
									<label>Registration no.</label>
									<input class="form-control"  name="txtstdid">
								</div></div>
								<div class="col-md-3">
									<div class="form-group">
									<label>First Name</label>
									<input class="form-control" placeholder="Input First Name" name="txtfrstnme">
								</div></div>
								<div class="col-md-3">
									<div class="form-group">
									<label>Last Name</label>
									<input class="form-control" placeholder="Input Last Name" name="txtlstnme">
								</div></div>
								<div class="form-group col-md-3">
									<label>Father's Name</label>
									<input class="form-control" placeholder="Input Father's Name" name="txtfnme">
								</div>
								<div class="form-group col-md-3">
									<label>Mother's Name</label>
									<input class="form-control" placeholder="Input Mother's Name" name="txtmnme">
								</div>
								<div class="form-group col-md-3" >
										<label>Category</label>
										<select class="form-control" name="ctgry">
											<option>General</option>
											<option>SC</option>
											<option>ST</option>
											<option>OBC</option>
										</select>
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
									<button type="submit" class="btn btn-primary">Register</button>
									<button type="reset" class="btn btn-default">Reset</button>
								</div>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div>
			<!-- /.col-->

	

			<div class="col-sm-12">
				<p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
			</div>
		</div><!--/.row-->
	