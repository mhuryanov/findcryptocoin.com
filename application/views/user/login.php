<div class="login-content">
	<h1>Log in</h1>
	
	<div class="alert alert-success alert-dismissible" id="login-success-alert" style="display: none;">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    	<strong>Success!</strong>
    	<span class="alert-data"></span>
  	</div>

  	<div class="alert alert-danger alert-dismissible" id="login-error-alert" style="display: none;">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    	<strong>Error!</strong>
    	<span class="alert-data"></span>
    </div>

	<div class="login-input-div flex">
		<div class="login-form">
			<form id="login-form" action="<?=base_url()?>user/b_signin">
			<div class="input-item">
				<input type="email" name="email" required="" id="user-email" placeholder="Email">
			</div>

			<div class="input-item">
				<input type="password" name="password" placeholder="Password" required="" id="user-password">
			</div>

			<div class="input-item flex space-between align-item-center">
				<div class="flex align-item-center">
					<input type="checkbox" name="remember"><label>Remember Me</label>
				</div>
				<div>
					<a class="forgot-password" href="<?=base_url()?>user/forgotpassword">Forgot password?</a>
				</div>
			</div>

			<div class="input-item captcha-item">
				<?php echo $this->recaptcha->getWidget();?>
				<?php echo $this->recaptcha->getScriptTag();?>
			</div>

			<div class="input-item">
				<input type="button" value="Log in" class="login-btn" id="login-btn">
			</div>

			<div class="input-item" style="margin-top: 20px;text-align: center;">
				<label>Don't have an account?</label>
				<a href="<?=base_url()?>user/signup">Sign up</a>
			</div>
		</form>
		</div>

	<!-- 	<div class="middle-line"></div>
			
		<div class="social-login">
			<div class="social-login-item">
				<button class="facebook-login-btn">Log in with Facebook</button>
			</div>

			<div class="social-login-item">
				<button class="google-login-btn">Log in with Google+</button>
			</div>
		</div> -->
	</div>
</div>


<!-- script -->
<script type="text/javascript" src="<?=base_url()?>assets/js/user/global.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/user/login.js"></script>
<!-- script -->
