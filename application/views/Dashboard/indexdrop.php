<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>Home
				</a></li>
				<li class="active">Master</li>
			</ol>
		</div><!--/.row-->
		<div class="panel-heading">Drop Student</div>
		<div class="panel-body">
			
			<form role="form" name="frmSession" method="post" action="<?php echo site_url('fms/submitstudentdetails');?>">
								<div class="form-group col-sm-3">
										<label><em class="fa fa-user">&nbsp</em>Select Student</label>
										<select class="form-control">
											<option>Select here</option>	
										</select>
									</div>
								
									<div class="form-group col-sm-3 ">
									<label><em class="fa fa-book">&nbsp</em>Class
									<input class="form-control" name="txtfrstnme">
								</label>
							</div>
								<div class="form-group col-sm-3">
									<label>Reason To Drop Student</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
									<div class="col-sm-12">
									<button type="submit" class="btn btn-danger">Drop Student</button>
									
								</div>
							</form>





		</div>


		
					
				
								
		
			
			<div class="col-sm-12">
				<p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
			</div>
		</div><!--/.row-->
	</div>