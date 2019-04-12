<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>Home
				</a></li>
				<li class="active">Master</li>
			</ol>
		</div><!--/.row-->
		<div class="panel-heading">Static Heads</div>
		<div class="panel-body">
			
			<form role="form" name="frmSession" method="post" action="<?php echo site_url('fms/submitstudentdetails');?>">
								<!--student details-->
								<div class="col-md-3">
									<div class="form-group">
									<label><em class="fa fa-key">&nbsp</em>Static Head Id
									<input class="form-control"  name="txtstdid">
								</div></div>
								<div class="col-md-3">
									<div class="form-group">
									<label><em class="fa fa-book">&nbsp</em>Fee Head
									<input class="form-control" name="txtfrstnme">
								</div></div>
								<div class="col-md-3">
									<div class="form-group">
									<label><em class="fa fa-user">&nbsp</em>Username</label>
									<input class="form-control" name="txtlstnme">
								</div></div>
								<div class="form-group col-md-3">
									<label>Date</label>
									<input class="form-control" type="date" name="txtdte">
								</div>
								
								<div class="col-md-3">
									<div class="form-group">
									<label><em class="fa fa-money">&nbsp</em>Amount</label>
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