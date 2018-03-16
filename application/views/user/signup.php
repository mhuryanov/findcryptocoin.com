<div class="login-content">
	<h1>Sign up</h1>
	
	<div class="alert alert-success alert-dismissible" id="signup-success-alert" style="display: none;">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    	<strong>Success!</strong>
    	<span class="alert-data"></span>
  	</div>

  	<div class="alert alert-danger alert-dismissible" id="signup-error-alert" style="display: none;">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    	<strong>Error!</strong>
    	<span class="alert-data"></span>
    </div>

	<div class="login-input-div flex">
		<div class="login-form">
			<div class="input-item">
				<?=$this->input->ip_address();?>
				<input type="email" name="email" placeholder="Email" id="user-email">
			</div>

			<div class="input-item">
				<input type="password" name="password" placeholder="Password" id="user-password">
			</div>

			<div class="input-item">
				<input type="password" name="password" placeholder="Retype password" id="confirm-password">
			</div>

			<div class="input-item">
				<!-- <input type="button" value="Sign up" class="login-btn" id="signup-btn"> -->

				<?php echo $this->recaptcha->getInvisibleWidget(array('class'=> 'g-recaptcha login-btn', 'value'=>'Sign up', 'id'=>'signup-btn'));?>
				<?php echo $this->recaptcha->getScriptTag();?>
			</div>

			<div class="input-item" style="margin-top: 20px;text-align: center;">
				<label>I have already member</label>
				<a href="<?=base_url()?>user">login</a>
			</div>
		</div>

		<div class="middle-line"></div>
			
		<div class="social-login">
			<div class="social-login-item">
				<button class="facebook-login-btn">Log in with Facebook</button>
			</div>

			<div class="social-login-item">
				<button class="google-login-btn">Log in with Google+</button>
			</div>
		</div>
	</div>
</div>

<!-- script -->
<script type="text/javascript" src="<?=base_url()?>assets/js/user/global.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/user/signup.js"></script>
<!-- script -->