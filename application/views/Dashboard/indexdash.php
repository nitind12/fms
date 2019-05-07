	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>Home
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<a href="totalstudents">
					<div class="panel panel-teal panel-widget border-right" style="background-color:aqua;margin-top:-18px;margin-left:17px;margin-bottom:-22px;">
						<div class="row no-padding"><i class="fa fa-user fa-3x"></i>
							<div class="large"><?php echo $number->TOTAL_;?></div>
							<div class="text-muted"><h4>Student</h4></div>
						</div>
					</div></a>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
						<a href="totalclasses">
					<div class="panel panel-teal panel-widget border-right" style="background-color:lime;margin-top:-18px;margin-left:17px;margin-bottom:-22px;">
						<div class="row no-padding"><i class="fa fa-university fa-3x"></i>
							<div class="large"><?php echo $no->total;?></div>
							<div class="text-muted"><h4>Classes</h4></div>
						</div>
					</div></a>
				</div>
				
			</div><!--/.row-->
			<br/><br/><br/>
		</div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<i class="fa fa-inr fa-2x"></i>
				</a></li>
				<li class="active">Fees Detail</li>
			</ol>
		</div><!--/.
		
		<!-- this is the section of the new panel-->
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					<a href="invoicedisplay">
					<div class="panel panel-teal panel-widget border-right" style="background-color:aqua;margin-top:-18px;margin-left:17px;margin-bottom:-22px;">
						<div class="row no-padding"><i class="fa fa-credit-card fa-3x"></i>
							<div class="large">
								<?php
								 echo $inv->TOTAL_I;
								?>
							</div>
							<div><h4>Invoices</h4></div>
						</div>
					</div></a>
				</div>
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
						<a href="receiptdisplay">
					
					<div class="panel panel-blue panel-widget border-right" style="background-color:#FFFF00;margin-bottom:-23px;margin-top:-18px;">
						<div class="row no-padding"><i class="fa fa-check fa-3x"></i>
							<div class="large">
								<?php
								 echo $res->TOTAL_R;
								?>
							</div>
							<div><h4>Fee Receipts</h4></div>
						</div>
					</div></a>
				</div>
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">

					<div class="panel panel-orange panel-widget border-right" style="background-color:#ff3f34;margin-bottom:-23px;margin-top:-18px;">
						<div class="row no-padding"><i class="fa fa-thumbs-up fa-3x"></i>
							<div class="large">0</div>
							<div><h4>Todays Collection</h4></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					<a href="totaldisplay">
					<div class="panel panel-red panel-widget border-right" style="background-color:#FEB4B1;margin-bottom:-23px;margin-top:
					-18px;">
						<div class="row no-padding"><i class="fa fa-thumbs-up fa-3x"></i>
							<div class="large">
								<?php
								 $am= $amount->TOTAL_AMOUNT;
								 $var='/-';
								 echo $am+$var;
								?>
							</div>
							<div><h4>Total Collection(in Rs.)</h4></div>
						</div>
					</div></a>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-red panel-widget border-right" style="background-color:#eedfde;margin-bottom:-23px;margin-top:
					-18px;">
						<div class="row no-padding"><i class="fa fa-thumbs-down fa-3x"></i>
							<div class="large">
								<?php
								 $am1= $due->TOTAL_DUE;
								 $var1='/-';
								 echo $am1+$var1;
								?>
							</div>
							<div><h4>Total Dues(in Rs.)</h4></div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
	
		<!-- row ends here-->
		<br/><br/><br/>
		
		
			<div class="col-sm-12">
				<p class="back-link">BCA Final Yr Project by <a href="#">FMS Team</a></p>
			</div>
		</div><!--/.row-->
	</div>

	
	
