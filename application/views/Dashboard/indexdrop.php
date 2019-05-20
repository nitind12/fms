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
			
			<form class="frm" id="frmDeletion" method="post" action="<?php echo site_url('dropstudent/deletion');?>" >
								

									<div class="form-group col-sm-3">
										<label>Select Course</label>
										<select class="form-control" name="txtcourse" id="txtcourse">
											<option>Select Course</option>
											<?php foreach ($class as $item) { ?>
											<option value="<?php echo $item->class_ID;?>"><?php echo $item->course .' '. $item->sem_ID .' '. $item->section; ?></option>
											<?php } ?>
										</select>
									</div>

									<div class="form-froup col-sm-3">
										<label>Select Student</label>
											<select class="form-control" name="txtStudent" id="txtStudent">
												<option>Select Student</option>
												<?php foreach ($students as $item) { ?>
												<option value="<?php echo $item->student_ID;?>"><?php echo $item->first_Name .' '. $item->last_Name; ?></option>
												<?php } ?>
											</select>
									</div>
									<!--<div class="form-group col-sm-3">
										<label>Reason To Drop Student</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>-->
									<div class="form-group">
									<div class="col-md-12 widget-right">
										<input type="submit" class="btn btn-primary btn-md pull-left" value="Drop Student">
									</div>
									</div>
			</form>
		</div>
	<div class="col-sm-12">
			<p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
	</div>
</div><!--/.row-->
</div>