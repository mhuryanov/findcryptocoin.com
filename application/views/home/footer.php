	</div>
	<!-- footer start-->
	<div class="footer">
		<div class="footer-content">

			<div class="row"> 
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="col-md-3 col-sm-12">
						<p>San Francisco | Singapore</p>
						<p><a href="mailto:info@findcryptocoin.com">info@findcryptocoin.com</a></p>
						<div class="socials">
							<div class="row">
								<?php foreach ($socials as $social_item): ?>
									<div class="col-md-1 col-xl-1 col-sm-1">
										<a href="<?=$social_item['social_target']?>" style="font-size: 20px; color: #fff;" target="_blank">
											<i class="<?=$social_item['social_icon']?>"></i>
										</a>
									</div>
								<?php endforeach ?>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<p><b>Company</b></p>
						<?php
						// var_dump($footer); 
						if($footer['about_us_status'] == 'active'){
						?>
							<p><a class="footer-item" href="<?=$footer['about_us_target']?>">About Us</a></p>
						<?php
						} 
						if($footer['careers_status'] == 'active'){
						?>
						<p><a class="footer-item" href="<?=$footer['careers_target']?>">Careers</a></p>
						<?php
						}
						if($footer['press_status'] == 'active'){	
						?>
						<p><a class="footer-item" href="<?=$footer['press_target']?>">Press</a></p>
						<?php
						}
						if($footer['legal_status'] == 'active'){
						?>
						<p><a class="footer-item" href="<?=$footer['legal_target']?>">Legal & Privacy</a></p>
						<?php
						}
						if($footer['faq_status'] == 'active'){
						?>
						<p><a class="footer-item" href="<?=$footer['faq_target']?>">FAQ</a></p>
						<?php
						}
						?>
					</div>

					<div class="col-md-2 col-sm-12">
						<?php
						if($footer['legal_status'] == 'active'){
						?>
						<p><a class="footer-item" href="<?=$footer['blog_target']?>">Blog</a></p>
						<?php
						}
						if($footer['affilate_status'] == 'active'){
						?>
						<p><a class="footer-item" href="<?=$footer['affilate_target']?>">Affiliate program</a></p>
						<?php
						}
						if($footer['donate_status'] == 'active'){
						?>
						<p><a class="footer-item" href="<?=$footer['donate_target']?>">Donate BTC </a></p>
						<?php
						}
						?>
					</div>

					<div class="col-md-5 col-sm-12">
						<div class="row">
							<div class="col-md-6">
								<p>Send us a message</p>
							</div>
							<form action="#">
							 <!--  <div class="form-group" style="display: flex;">
							  	<span style="position: absolute;height: 38px; padding: 8px;"><i class="fas fa-search"></i></span>
							    <input type="text" class="form-control" placeholder="Search" style="padding-left: 30px;">
							  </div> -->
							</form>
						</div>
						<form action="contact_us" method="post">
							<div class="row">
								<div class="col-md-6">
									<input type="email" name="email" placeholder="Email *" class="footer-input" required="">
								</div>

								<div class="col-md-6">
									<input type="text" name="subject" placeholder="Subject *" class="footer-input" required="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<textarea name="message" placeholder="Message *" required="" rows="5" class="footer-input" style="resize: none;"></textarea>
								</div>
							</div>

							<div class="">
								<button class="footer-input" style="border: 0;">Send</button>
							</div>
						</form>
					</div>
				</div>
				
			</div>

			<div class="row" style="background: #2d3643; margin:0 -20px;">
				<!-- <div class="col-md-1"></div> -->

				<div class="col-md-12">
					<p style="margin: 5px;">
						<a href="<?=base_url().$this->session->userdata('logo_target')?>" style="text-decoration: none;">
						<img src="<?=base_url()?>assets/logos/<?=$this->session->userdata('logo_image')?>">

						
						</a>
					 2018 by findcryptocoin.com. All rights reserved
					</p>
				</div>
			</div>
		</div>

		<div class="footer-bg"></div>
	</div>
	<!-- footer end -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script type="text/javascript">
	$(".menu-bar-open").click(function(){
		$(".menu-div-mobile").addClass("open");
		$(".menu-div-mobile").removeClass("close");
	});

	$(".menu-bar-close").click(function(){
		$(".menu-div-mobile").addClass("close");
		$(".menu-div-mobile").removeClass("open");
	});
</script>
</body>
</html>
