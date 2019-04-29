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
		
		<?php echo date("Y-m-d");?>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Fee</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
					<div class="panel-heading">
						<div class="widget-title"> <span class="icon"> <i class="icon-briefcase"></i> </span>

						Manage Invoice
					</div>
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
						<form class="form" id="frmInvoice">
							<fieldset>
								<!-- Class input-->
								<div class="form-group col-md-4">
									<label>Class</label>
										<select name="cmbClass" id="cmbClass" required="required">
											<option value="">Select Class</option>
											<?php foreach ($class_in_session as $item) {?>
												<option value="<?php echo $item->class_sess_ID;?>"><?php echo $item->class_sess_ID;?></option>
											<?php } ?>
										</select>
										<!--<div style="clear: both;" id="printhere1"></div>-->
								</div>

								<!-- Year From input-->
								<div class="form-group col-md-4">
									<label>Year From</label>
										<select name="cmbYearf" id="cmbYearf" required="required">
											<option value="">Select Year</option>
											<?php for ($loop=date('Y');$loop>=2014; $loop--) {?>
												<?php if($loop == 2019){
													$sel_ = " selected='selected'";
												} else {
													$sel_ = '';
												} ?>
												<option value="<?php echo $loop;?>"<?php echo $sel_;?>><?php echo $loop;?></option>
											<?php } ?>
										</select>
								</div>

								<!--Year To input-->
								<div class="form-group col-md-4">
									<label>Month From</label>
									<select name="cmbMonthf" id="cmbMonthf" required="required">
											<option value="">Select Month</option>
											<?php for ($loop=1;$loop<=12; $loop++) {?>
												<?php if($loop == 4){
													$sel_ = " selected='selected'";
												} else {
													$sel_ = '';
												} ?>
												<option value="<?php echo $this->my_lib->getMonths($loop);?>"<?php echo $sel_;?>><?php echo $this->my_lib->getMonths($loop);?>
												</option>
											<?php } ?>
										</select>
								</div>
								<div class="form-group col-md-4">
									<label>Year To</label>
										<select name="cmbYeart" id="cmbYeart" required="required">
											<option value="">Select Year</option>
											<?php for ($loop=date('Y');$loop<=2019; $loop++) {?>
												<?php if($loop == 2019){
													$sel_ = " selected='selected'";
												} else {
													$sel_ = '';
												} ?>
												<option value="<?php echo $loop;?>"<?php echo $sel_;?>><?php echo $loop;?></option>
											<?php } ?>
										</select>
								</div>

								<!-- Month To body -->
								<div class="form-group">
									<label>Month To</label>
									<select name="cmbMontht" id="cmbMontht" required="required">
											<option value="">Select Month</option>
											<?php for ($loop=1;$loop<=12; $loop++) {?>
												<?php if($loop == 5){
													$sel_ = " selected='selected'";
												} else {
													$sel_ = '';
												} ?>
												<option value="<?php echo $this->my_lib->getMonths($loop);?>"<?php echo $sel_;?>><?php echo $this->my_lib->getMonths($loop);?>
												</option>
											<?php } ?>
										</select>
								</div>										
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<input type="submit" class="btn btn-primary btn-md pull-right" value="Submit">
									</div>
								</div>
							</fieldset>
						</form>

						<!--<?php
								foreach($students as $item)
							{
									foreach ($invoice as $item3)
								{
									if($item->student_ID == $item3->student_ID)
									{										
										$class=$item3->class_ID;
										$yearf=$item3->year_From;
										$monthf=$item3->month_From;
										$yeart=$item3->year_To;
										$montht=$item3->month_To;
									}									
								}
							}
						?>-->
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
					<div class="panel-body" id="invoicedatahere">
					   	<!--<?php
					   		
					   		foreach($students as $item)
					   			{
					   				$did = '';
					   				$fid= '';
					   				$d_amount='';
					   				echo '<tr>';
									echo '<td>'.$item->student_ID.'</td>';
									echo '<td>'.$item->first_Name . " " . $item->last_Name.'</td>';
									echo '<td>';
											foreach ($discount as $item1){
												if($item->student_ID == $item1->student_ID){
													if($did == ''){
														$did = $item1->discount_Type;	
													} else $did =  $did . ", " . $item1->discount_Type;
												}
											}
											
											echo $did;
									echo '</td>';
									echo '<td>';
											foreach ($fee as $item2){
												if($item->student_ID == $item2->student_ID){
													echo $item2->static_head_Amount;
												}
											}
									echo '</td>';
									echo '<td>';
											foreach ($fee as $item2){
												if($item->student_ID == $item2->student_ID){
													if($fid == ''){
														$fid = $item2->fee_Head;	
													} else $fid = $item2->fee_Head;
												}
											}
												echo $fid;
									echo '</td>';
									echo '<td>';
										foreach ($fee as $item2){
												if($item->student_ID == $item2->student_ID){
													echo $item2->flexible_head_Amount;
												}
											}
									echo '</td>';
									echo '<td>';
									foreach ($discount as $item1){
											if($item->student_ID == $item1->student_ID){
												if($d_amount == ''){
														$d_amount = $item1->discount_Amount;	
													} else $d_amount =  $d_amount + $item1->discount_Amount;
												}
											}
									foreach ($fee as $item2){
												if($item->student_ID == $item2->student_ID){
													$f_amount = $item2->flexible_head_Amount;
													$s_amount = $item2->static_head_Amount;
													if($d_amount == ''){
														$s_amount = $s_amount - '';
													}else $s_amount = $s_amount - $d_amount;
													if($f_amount == ''){
														echo $s_amount;
													}else $total_fee = $s_amount + $f_amount;
													    echo $total_fee;
												}
											}	
									echo '</td>';

									echo '<td>';
									$icon="glyphicon-lock";
									foreach ($invoice as $item3)
										{
												if($item->student_ID == $item3->student_ID)
												{
													$icon = "glyphicon-print";
													break;
												}
										}
									echo '<span class="glyphicon '.$icon.'"></span>';
									echo '</td>';
									echo '<td></td>';
									echo '<td></td>';
									echo '<td><button type="button" class="btn btn-danger">update'.'</td>';
									

									echo '<td><em class="fa fa-credit-card"></em>'.'</td>';
									echo '</tr>';
								}
							echo '</table>';
						?>-->
					</div>
				</div>
			</div>			
		</div>
		</div><!--/.row-->
</div>



