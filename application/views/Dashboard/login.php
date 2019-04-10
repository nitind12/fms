<body>
		<div class="bg-image"></div>
		
		
		<div class="bg-text">
		<h1 align="center" class="page-header"><strong>WELCOME TO FEE MANAGEMENT SYSTEM</strong></h1>

		<div class="row">
		<div class="   col-md-5 col-md-offset-4 ">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><b>Log in</div></b>
				<div class="panel-body">
					<form role="form" action="<?php echo site_url('login/authenticate');?>" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="txtUsr" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="txtPassword" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<input type="submit" value="Login" class="btn btn-primary">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- /.row -->	

	<!-- /.row -->









