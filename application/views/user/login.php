<div class="login-content">
	<h1>Log in</h1>

	<div class="login-input-div flex">
		<div class="login-form">
			<div class="input-item">
				<input type="email" name="email" placeholder="Email">
			</div>

			<div class="input-item">
				<input type="password" name="password" placeholder="Password">
			</div>

			<div class="input-item flex space-between align-item-center">
				<div class="flex align-item-center">
					<input type="checkbox" name="remember"><label>Remember Me</label>
				</div>
				<div>
					<a class="forgot-password" href="<?=base_url()?>user/forgotpassword">Forgot password?</a>
				</div>
			</div>

			<div class="input-item">
				<input type="button" value="Log in" class="login-btn">
			</div>

			<div class="input-item" style="margin-top: 20px;text-align: center;">
				<label>Don't have an account?</label>
				<a href="<?=base_url()?>user/signup">Sign up</a>
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