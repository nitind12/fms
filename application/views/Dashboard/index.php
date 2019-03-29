<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>


<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container">
		
			<?php $this->load->view('templates/navheader');?>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	
	
		<?php $this->load->view('templates/sidebar');?>
	</div><!--/.sidebar-->
		
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
					<div class="panel panel-teal panel-widget border-right" style="background-color:aqua;margin-top:-18px;margin-left:17px;">
						<div class="row no-padding"><i class="fas fa-user-graduate fa-3x"></i>
							<div class="large">10</div>
							<div class="text-muted"><h4>Student</h4></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">52</div>
							<div class="text-muted"><h4>Comments</h4>></div>
						</div>
					</div>
				</div>
				<!--<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right" style="background-color:yellow;margin-bottom:-23px;margin-top:-18px;">
						<div class="row no-padding"><i class="fas fa-comments fa-3x"></i>
							<div class="large">12</div>
							<div class="text-muted"><h4>Comments</h4></div>
						</div>
					</div>
				</div>-->
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">24</div>
							<div class="text-muted"><h4>New Users</h4></div>
						</div>
					</div>
				</div>
				<!--<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right" style="background-color:#A4D1A2;margin-bottom:-23px;margin-top:-18px;">
						<div class="row no-padding"><i class="fas fa-users fa-3x"></i>
							<div class="large">24</div>
							<div class="text-muted"><h4>New Users</h4></div>
						</div>
					</div>
				</div>-->
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget " style="background-color:#F24333;margin-bottom:-23px;margin-top:-18px;">
						<div class="row no-padding"><i class="fas fa-check fa-3x"></i>
							<div class="large">30</div>
							<div class="text-muted"><h4>Receipts</h4></div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
			<br/><br/><br/>
		</div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<i class="fas fa-rupee-sign fa-2x"></i>
				</a></li>
				<li class="active">Fees Detail</li>
			</ol>
		</div><!--/.
		
		<!-- this is the section of the new panel-->
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					<div class="panel panel-teal panel-widget border-right" style="background-color:aqua;margin-top:-18px;margin-left:17px;margin-bottom:-22px;">
						<div class="row no-padding"><i class="far fa-credit-card fa-3x"></i>
							<div class="large">0</div>
							<div class="text-muted"><h4>Invoices</h4></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					<div class="panel panel-blue panel-widget border-right" style="background-color:#FFFF00;margin-bottom:-23px;margin-top:-18px;">
						<div class="row no-padding"><i class="fas fa-check fa-3x"></i>
							<div class="large">0</div>
							<div class="text-muted"><h4>Fee Receipts</h4></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					<div class="panel panel-orange panel-widget border-right" style="background-color:blue;margin-bottom:-23px;margin-top:-18px;">
						<div class="row no-padding"><i class="fas fa-hand-holding-usd fa-3x"></i>
							<div class="large">0</div>
							<div class="text-muted"><h4>Todays Collection</h4></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					<div class="panel panel-red panel-widget border-right" style="background-color:#FEB4B1;margin-bottom:-23px;margin-top:-18px;">
						<div class="row no-padding"><i class="fas fa-plus-circle fa-2x"></i>
							<div class="large">0</div>
							<div class="text-muted"><h4>Total Collection Rs.0</h4></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-red panel-widget " style="background-color:#eedfde;margin-bottom:-23px;margin-top:-18px;">
						<div class="row no-padding"><i class="far fa-question-circle fa-3x"></i>
							<div class="large">0</div>
							<div class="text-muted"><h4>Total Dues Rs.0</h4></div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>New Orders</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Comments</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>New Users</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Visitors</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span></div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- row ends here-->
		<br/><br/><br/>
		<?php $this->load->view('Dashboard/reg/mycontact');?>
		
			<div class="col-sm-12">
				<p class="back-link">BCA Final Yr Project by <a href="https://www.medialoot.com">FMS Team</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	
