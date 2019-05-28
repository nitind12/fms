<?php
	if(isset($_COOKIE['user_'])) {
		$usr = $_COOKIE['user_'];
		$pwd = $_COOKIE['pwd_'];
	} else {
		$usr = '';
		$pwd = '';
	}
?>
<body>
		<div class="bg-image"></div>
		
		
		<div class="bg-text">
		<h1 align="center" class="page-header"><strong>WELCOME TO FEE MANAGEMENT SYSTEM</strong></h1>

		<div class="row">
		<div class="   col-md-5 col-md-offset-4 ">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><b>Log in</div></b>
				<div class="panel-body">
					<form role="form" name="frmLogin" id="frmLogin" action="<?php echo site_url('login/authenticate');?>" method="post">
						<fieldset>
							<div class="form-group">
								<select  class="form-control" name="cmbSession" id="cmbSession">
										<option>Select Session</option>
										<?php foreach ($session as $item) {?>
											<option value="<?php echo $item->session_ID;?>"><?php echo $item->session_ID;?></option>
										<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="txtUsr" type="text" autofocus="" value="<?php echo $usr;?>">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="txtPassword" type="password" value="<?php echo $pwd;?>">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<input type="submit" value="Login" id="loginbtn" class="btn btn-primary">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- /.row -->	

	<!-- /.row -->









