<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>Home
				</a></li>
				<li class="active">Master</li>
			</ol>
		</div><!--/.row-->
		<div class="panel-heading">Class</div>
		<div class="panel-body">
			
			<form role="form" name="frmSession" method="post" action="<?php echo site_url('fms/submitstudentdetails');?>">
								<!--student details-->
								<div class="col-md-3">
									<div class="form-group">
									<label><em class="fa fa-key">&nbsp</em>Class ID
									<input class="form-control"  name="txtstdid">
								</div></div>
								<div class="col-md-3">
									<div class="form-group">
									<label><em class="fa fa-book">&nbsp</em>Course
									<input class="form-control" name="txtfrstnme">
								</div></div>
								<div class="col-md-3">
									<div class="form-group">
									<label><em class="fa fa-book">&nbsp</em>Semester</label>
									<input class="form-control" name="txtlstnme">
								</div></div>
								
								<div class="col-md-3">
									<div class="form-group">
									<label><em class="fa fa-book">&nbsp</em>Section</label>
									<input class="form-control" name="txtlstnme">
								</div></div>

							</form>
							<form class="col-sm-12">
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-default">Reset</button>
								</div>
							</form>





		</div>


		
					
				
								
		
			
			<div class="col-sm-12">
				<p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
			</div>
		</div><!--/.row-->
	</div>