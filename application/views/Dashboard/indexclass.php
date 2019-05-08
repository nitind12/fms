<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>Home
				</a></li>
				<li class="active">Master</li>
			</ol>
		</div><!--/.row-->
		<div class="panel-heading">New Class</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr>
					<th>
						<form role="form" name="frmSession" method="post" action="<?php echo site_url('classes/insert_record');?>">
								
									<div class="form-group">
									<label><em class="fa fa-book">&nbsp</em>Course</label>
									<input class="form-control" name="txtClss" id="txtClss">
								</div>
									<div class="form-group">
									<label><em class="fa fa-book">&nbsp</em>Semester</label>
									<select class="form-control" name="txtSemester" id="txtSemester">
										<option>Select</option>
											<?php for ($loop=1;$loop<=6; $loop++) {?>
												<option value="<?php echo $loop;?>"><?php echo $loop;?></option>
											<?php } ?>
									</select>
								</div>
								
									<div class="form-group">
									<label><em class="fa fa-book">&nbsp</em>Section</label>
									<select class="form-control" name="txtSection" id="txtSection">
									<option>Select</option>
									<option>A</option>
									<option>B</option>
								</select>
								</div>

							
							<div class="col-sm-12">
									<button type="submit" class="btn btn-success">Add New Class</button>
									<button type="reset" class="btn btn-primary">Reset</button>
								</div>
								<div class="form-group">
									<div class="col-md-12 widget-left" id="msghere" style="font-size: 10px; color: #ff0000">
									<br><br>	<?php echo $this->session->flashdata('msg_'); ?>
									</div>
								</div>
		
							</form>
						</th>

						<th>
							<table class="table table-bordered table-striped with-check">
								<tr>
									<th>Existing Classes</th>
								</tr>
								<tr>
									<th><div id="print" style="clear:both"></div></th>

								</tr>

							</table>

						</th>
						<th>
							<table>
								<tr>
									<th><div id="phrs" style="clear:both;">
										</div></th>
								</tr>
							</table>
						</th>
					</tr>
				</table>


		</div>


		
					
				
								
		
			
			<div class="col-sm-12">
				<p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
			</div>
		</div><!--/.row-->
	</div>