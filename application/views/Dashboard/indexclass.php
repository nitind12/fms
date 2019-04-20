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
			
			<form role="form" name="frmSession" method="post" action="<?php echo site_url('classes/insert_record');?>">
								<!--student details-->
								<div class="form-group col-md-3">
										<label>Course</label>
										<select class="form-control" name="textcourse" id="textcourse">
											<option>Select Course</option>
											<?php foreach ($course as $item) { ?>
											<option value="<?php echo $item->course_ID;?>"><?php echo $item->course; ?></option>
											<?php } ?>
										</select>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									<label><em class="fa fa-book">&nbsp</em>Semester</label>
									<input class="form-control" name="txtsemester" id="txtsemester">
								</div></div>
								
								<div class="col-md-3">
									<div class="form-group">
									<label><em class="fa fa-book">&nbsp</em>Section</label>
									<input class="form-control" name="txtsection" id="txtsection">
								</div></div>

							
							<div class="col-sm-12">
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-default">Reset</button>
								</div>
								<div class="form-group">
									<div class="col-md-12 widget-left" id="msghere" style="font-size: 10px; color: #ff0000">
									<br><br>	<?php echo $this->session->flashdata('msg_'); ?>
									</div>
								</div>
		
							</form>





		</div>


		
					
				
								
		
			
			<div class="col-sm-12">
				<p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
			</div>
		</div><!--/.row-->
	</div>