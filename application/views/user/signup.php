<div class="login-content">
	<h1>Sign up</h1>

	<div class="login-input-div flex">
		<div class="login-form">
			<div class="input-item">
				<input type="email" name="email" placeholder="Email">
			</div>

			<div class="input-item">
				<input type="password" name="password" placeholder="Password">
			</div>

			<div class="input-item">
				<input type="password" name="password" placeholder="Retype password">
			</div>

			<div class="input-item">
				<input type="button" value="Sign up" class="login-btn">
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