<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<!--/.row-->
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>Home
				</a></li>
				<li class="active">Fee</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Fee</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
					<div class="panel-heading">
						Manage Invoice
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body">
						<form class="form" action="" method="post">
							<fieldset>
								<!-- Class input-->
								<div class="form-group col-md-4">
									<label>Class</label>
										<select name="cmbClass" id="cmbClass">
											<option value="">Select Class</option>
											<?php foreach ($class_in_session as $item) {?>
												<option value="<?php echo $item->class_sess_ID;?>"><?php echo $item->class_ID;?></option>
											<?php } ?>
										</select>
										<div style="clear: both;" id="printhere1"></div>
								</div>

								<!-- Year From input-->
								<div class="form-group col-md-4">
									<label>Year From</label>
										<select name="cmbClass" id="cmbClass">
											<option value="">Select Year</option>
											<?php for ($loop=date('Y');$loop>=2014; $loop--) {?>
												<option value="<?php echo $loop;?>"><?php echo $loop;?></option>
											<?php } ?>
										</select>
								</div>

								<!--Year To input-->
								<div class="form-group col-md-4">
									<label>Month From</label>
									<select name="cmbClass" id="cmbClass">
											<option value="">Select Month</option>
											<?php for ($loop=1;$loop<=12; $loop++) {?>
												<option value="<?php echo $this->my_lib->getMonths($loop);?>">"<?php echo $this->my_lib->getMonths($loop);?>"
												</option>
											<?php } ?>
										</select>
								</div>
								<div class="form-group col-md-4">
									<label>Year To</label>
										<select name="cmbClass" id="cmbClass">
											<option value="">Select Year</option>
											<?php for ($loop=date('Y');$loop<=2019; $loop++) {?>
												<option value="<?php echo $loop;?>"><?php echo $loop;?></option>
											<?php } ?>
										</select>
								</div>

								<!-- Month To body -->
								<div class="form-group">
									<label>Month To</label>
									<select name="cmbClass" id="cmbClass">
											<option value="">Select Month</option>
											<?php for ($loop=1;$loop<=12; $loop++) {?>
												<option value="<?php echo $this->my_lib->getMonths($loop);?>">"<?php echo $this->my_lib->getMonths($loop);?>"
												</option>
											<?php } ?>
										</select>
								</div>										


								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div><!--/.row-->
	</div>



<div class="row">
<div class="col sm-6" >
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
		<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
					<div class="panel-heading">
						Invoice(s)
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body">
						<table class="table table-bordered table-hover table-responsive">
					    <thead>
					      <tr>
					        <th>Reg.No</th>
					        <th>Name</th>
					        <th>Discount</th>
					        <th>Fix Fee</th>
					        <th>Opted Fee</th>
					        <th>Amount</th>
					        <th>Total Fee</th>
					        <th>Invoice</th>
					        <th>Undo Invoice</th>
					        <th>Dues</th>
					        <th>Pay Fee</th>
					        <th>Print Receipt</th>
					      </tr>
					    </thead>
					   <tbody>
					   	<tr>
					   		<td  name="printthis" id="printthis"></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<span class="glyphicon glyphicon-lock"></span>
					   		</td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<em class="fa fa-credit-card"></em>
					   		</td>
					   	</tr>
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<span class="glyphicon glyphicon-lock"></span>
					   		</td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<em class="fa fa-credit-card"></em>
					   		</td>
					   	</tr>
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<span class="glyphicon glyphicon-lock"></span>
					   		</td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<em class="fa fa-credit-card"></em>
					   		</td>
					   	</tr>
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<span class="glyphicon glyphicon-lock"></span>
					   		</td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<em class="fa fa-credit-card"></em>
					   		</td>
					   	</tr>
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<span class="glyphicon glyphicon-lock"></span>
					   		</td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<em class="fa fa-credit-card"></em>
					   		</td>
					   	</tr>
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<span class="glyphicon glyphicon-lock"></span>
					   		</td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<em class="fa fa-credit-card"></em>
					   		</td>
					   	</tr>
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<span class="glyphicon glyphicon-lock"></span>
					   		</td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<em class="fa fa-credit-card"></em>
					   		</td>
					   	</tr>
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<span class="glyphicon glyphicon-lock"></span>
					   		</td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<em class="fa fa-credit-card"></em>
					   		</td>
					   	</tr>
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<span class="glyphicon glyphicon-lock"></span>
					   		</td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<em class="fa fa-credit-card"></em>
					   		</td>
					   	</tr>
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<span class="glyphicon glyphicon-lock"></span>
					   		</td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<em class="fa fa-credit-card"></em>
					   		</td>
					   	</tr>
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<span class="glyphicon glyphicon-lock"></span>
					   		</td>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		<td>
					   				<em class="fa fa-credit-card"></em>
					   		</td>
					   	</tr>
					  </tbody>	
					</table>
					</div>
				</div>
			</div>			
		</div>
		</div><!--/.row-->
</div>



<!--<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			
		</div><!--/.row
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row
		<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
					<div class="panel-heading">
						 Receipt Area
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body">
						<table class="table table-bordered">
					    <thead>
					      <tr>
					        <th>Dues</th>
					        <th>Pay Fee</th>
					        <th>Print Receipt</th>
					      </tr>
					    </thead>
					    <tbody>
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   		
					   	</tr>
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   	</tr>	
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   	</tr>	
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   	</tr>	
					   	<tr>
					   		<td></td>
					   		<td></td>
					   		<td></td>
					   </tr>		
					   <tr>
						   	<td></td>
						   	<td></td>
						   	<td></td>
						</tr>   	
					   <tr>
						   	<td></td>
						   	<td></td>
						   	<td></td>
						</tr>   	
					   <tr>
						   	<td></td>
						   	<td></td>
						   	<td></td>
						</tr>
					  </table>
					</div>
				</div>
			</div>
		</div>			
			
		</div><!--/.row-->
	</div>  
</div>-->





	<!--<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Receipt</li>
			</ol>
		</div><!--/.row-->
		
		<!--<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
		<!--<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
					<div class="panel-heading">
						 Receipt Area
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body">
					<div class="row row-no-gutters">
  					
					  <div class="col-xs-6 col-md-4">Date</div>
					  <div class="col-xs-6 col-md-4">Receipt</div>
					  <div class="col-xs-6 col-md-4">Receipt No.</div>
					</div>

					<div class="panel-body">            
					  <table class="table table-striped">
					  <div class="col-xs-6 col-md-4">Registration No.</div>
					  <div class="panel-body">            
					  <table class="table table-striped">
					  <div class="col-xs-6 col-md-4">Name</div>
					  <div class="panel-body">            
					  <table class="table table-striped">
					  <div class="col-xs-6 col-md-4">Class</div>
					  <div class="panel-body">            
					  <table class="table table-striped">
					  <div class="col-xs-6 col-md-4">Session</div>-->



					    