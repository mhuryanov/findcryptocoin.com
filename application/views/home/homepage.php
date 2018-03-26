<?php if ($this->session->userdata('bg_option') == 'video'){?>
<video autoplay muted loop id="background-video">
  <source src="<?=base_url()?>assets/background/<?=$this->session->userdata('bg_src')?>" type="video/mp4">
</video>

<?php }	?>

<?php if ($this->session->userdata('bg_option') == 'image'){?>
<img src="<?=base_url()?>assets/background/<?=$this->session->userdata('bg_src')?>" id="background-video">
<?php }	?>

<div class="home-content flex">
	<div class="buy-bitcoin-form">
		<div class="buy-form-div">
			
			<div class="buy-form-content">
				<div class="title">
					Bitcoin to <span id="exchange-coin-name"><?=$coin_list[0]['coin_name']?></span> trading exchanging
				</div>
				
				<div class="subtitle">No verification required!</div>

					<div class="row">
					  <div class="col-lg-12">
					    <div class="input-group">
					      <input type="number" class="form-control" aria-label="Text input with dropdown button" id="coin-amount-input" placeholder="123.00">

					      <div class="input-group-btn">
					        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-coin-id="<?=$coin_list[0]['coin_id']?>" id="selected-coin-button"><?=$coin_list[0]['coin_name']?></button>
					        <div class="dropdown-menu dropdown-menu-right">
					          <?php
					          	foreach ($coin_list as $coin_item) {
					          		?>
									<a class="dropdown-item coin-item" href="#" data-coin-name="<?=$coin_item['coin_name']?>" data-coin-id="<?=$coin_item['coin_id']?>"><?=$coin_item['coin_name']?></a>
					          		<?php
					          	}
					          ?>
					        </div>
					      </div>
					    </div>
					  </div>
					</div>

					<div class="row" style="margin-top: 20px;justify-content: center; display: flex;">
						<button class="buy-now-btn col-md-6" id="buy-now-btn">Buy Now</button>
					</div>

					<div class="row" style="margin-top: 20px;justify-content: center; display: flex;">
						<a href="<?=base_url()?>user/seeauctions" class="see-actions-btn col-md-6" target="_blank">See Auctions</a>
					</div>

					<div class="row" style="margin-top: 10px;">
						<div class="col-md-12">
							<a href="#" style="text-decoration: underline;">You will be able to change this order before placing</a>
						</div>
					</div>

					<div class="row" style="margin-top: 10px;">
						<div class="col-md-12">
							<p style="color:rgba(61, 155, 233, 1); opacity: 0.8;">With just $1 worth of BTC. become a member and exchange cryptocurrency for lifetime. <a href="<?=base_url()?>user/signup">Sign up</a> now</p>
						</div>
					</div>

			</div>



			<div class="buy-form-bg"></div>

		</div>

	</div>



	<div style="width: 400px;"">
		 <div class="modal-content" id="wallet-detail" style="display: none;">
	      <div class="modal-header">
	        <h5 class="modal-title">Wallet Details</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="wallet-close-x">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="/action_page.php">
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="You are buying 123.00 ETH" id="modal-coin-amount-input" readonly="" value="You are buying 123.00 ETH">
			  </div>
			  <div class="form-group">
			    <label>Target Wallet address</label>
			    <input type="text" class="form-control" placeholder="Enter your wallet address where you">
			  </div>
			  <div class="row flex" style="justify-content: center;">
			    <button class="btn btn-success" type="button">Confirm</button>
			  </div>
			  <div class="form-group">
			    <label>Send .000 BTC to this address</label>
			    <input type="text" class="form-control" placeholder="adasdjf1231asdkjf12324jsld">
			  </div>
			  <div class="form-group">
			    <span>Dont have BTC?</span> <a href="<?=$seehowtobuy_target?>" target="_blank"><?=$seehowtobuy_label?></a>
			  </div>
			</form>
	      </div>
	    </div>
	</div>
</div>
	<!-- end home content -->
	<script src="<?=base_url()?>assets/js/home/home.js"></script>