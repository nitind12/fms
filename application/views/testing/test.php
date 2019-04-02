<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<!--/.row-->
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>Home
				</a></li>
				<li class="active">Testing</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Testing Code</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
					<div class="col-md-4">
						<div class="panel panel-default">
					<div class="panel-heading">
						Testing Code
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
						<form class="form form-vertical" action="<?php echo site_url('testing/insert_record');?>" method="post">
							<fieldset>
								<!-- Class input-->
								<div class="form-group col-md-12">
									<label>Name</label><br>
										<input type="text" name="txtName" id="txtName">
								</div>
								<!-- Year From input-->
								<div class="form-group col-md-12">
									<label>Hobby</label><br>
										<input type="text" name="txtHobby" id="txtHobby">
								</div>
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-left">
										<button type="submit" class="btn btn-default btn-md pull-left">Submit</button>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12 widget-left" id="msghere" style="font-size: 10px; color: #ff0000">
										<?php echo $this->session->flashdata('msg_'); ?>
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



