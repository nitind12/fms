<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>Home
				</a></li>
				<li class="active">master</li>
			</ol>
		</div><!--/.row-->
		
		<div class="panel-heading">Session</div>
		<div class="panel-body">
			<form class="form form-vertical" action="<?php echo site_url('sessions/insert_record');?>" method="post">
						 
				<fieldset>
								<!--student details-->
								<div class="col-md-3">
									<div class="form-group">
									<label>Session ID</label>
									<input type="text" name="txtsid" id="txtsid">
								</div>
							</div>
								<div class="col-md-3">
									<div class="form-group">
									<label>Session Start</label>
									<select class="form-control" name="txtsstart" id="txtsstart">
											<option>Select</option>
											<?php for ($loop=2025;$loop>=2014; $loop--) {?>
												<option value="<?php echo $loop;?>"><?php echo $loop;?></option>
											<?php } ?>
										</select>
								</div>
							</div>
							
								<div class="col-md-3">
									<div class="form-group">
									<label>Session End</label>
									<select class="form-control" name="txtsend" id="txtsend">
											<option>Select</option>
											<?php for($loop=2030;$loop>=2017;$loop--){?>
											<option><?php echo $loop; ?></option>
											<?php } ?>
										</select>
								</div></div>
								<div class="form-group col-md-3">
									<label>Date</label>
									<input class="form-control" type="date" name="txtdte">
								</div>
									<div class="form-group col-sm-12"> 
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-default">Reset</button>

								</div>


								
									<div class="form-group">
									<div class="col-md-12 widget-left" id="msghere" style="font-size: 10px; color: #ff0000">
									<br><br>	<?php echo $this->session->flashdata('msg_'); ?>
									</div>
									<div id ="prnthere" style="clear:both"></div>

								</div>
							
							</form>	
					</div>
					
				
								
		
			
			<div class="col-sm-12">
				<p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
			</div>
		</div>
