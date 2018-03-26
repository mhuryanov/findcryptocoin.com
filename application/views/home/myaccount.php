<div class="myaccount">

	<div class="sidebar">
		<div class="account-logo">Account Logo</div>
		<div class="menu-item active" data-item-name="my-orders-item">
			<div class="menu-item-content">
				<span class="menu-item-icon"><i class="fas fa-file-alt"></i></span>
				<span class="menu-item-title">My Orders</span>
			</div>
			<a class="menu-item-link" href="#"></a>
		</div>

		<div class="menu-item" data-item-name="my-communication-item">
			<div class="menu-item-content">
				<span class="menu-item-icon"><i class="fas fa-history"></i></span>
				<span class="menu-item-title">My Communications</span>
			</div>
			<a class="menu-item-link" href="#"></a>
		</div>

		<div class="menu-item" data-item-name="my-account-item">
			<div class="menu-item-content">
				<span class="menu-item-icon"><i class="fas fa-address-book"></i></span>
				<span class="menu-item-title">My Account</span>
			</div>
			<a class="menu-item-link" href="#"></a>
		</div>

		<div class="menu-item" data-item-name="">
			<div class="menu-item-content">
				<span class="menu-item-icon"><i class="fas fa-cogs"></i></span>
				<span class="menu-item-title">Admin Settings</span>
			</div>
			<a class="menu-item-link" href="#"></a>
		</div>

	</div>

	<div class="myaccount-content">
		<div class="myaccount-content-header">
			<span class="sidebar-toggle-btn">
				<i class="fas fa-bars"></i>
			</span>

			<span class="alerts-btn">
				<i class="fas fa-bell"></i>
				<span class="alerts-badge">12</span>
			</span>

			<div class="content-search">
				<input type="" placeholder="Search..." name="" class="search-input">
			</div>

			<span class="power-btn">
				<i class="fas fa-power-off"></i>
			</span>			
		</div>

		<div class="myaccount-content-details">

			<div id="myaccount-action-alert-body">
				
			</div>

			<div class="myaccount-content-item active" id="my-orders-item">
				<div class="content-item-title">
					<h3>My Orders</h3>
				</div>
				<div class="content-item-details">
					<table class="table table-striped table-bordered table-list">
						<thead>
							<th>Transaction Id</th>
							<th>Details</th>
							<th>Date</th>
							<th>Status</th>
							<th></th>
						</thead>
						<tbody>
							<?php foreach ($myorders as $myorderitem): ?>
							<tr>
								<td>ID<?=$myorderitem['order_id']?></td>
								<td><?=$myorderitem['order_details']?></td>
								<td><?=$myorderitem['order_updated']?></td>
								<td><?=$myorderitem['order_status']?></td>
								<td><button class="btn btn-primary"><i class="fas fa-pencil-alt"></i> View</button></td>
							</tr>								
							<?php endforeach ?>
							
						</tbody>
					</table>
				</div>
			</div>

			<div class="myaccount-content-item" id="my-communication-item">
				<div class="content-item-title">
					<h3>My Communications</h3>
				</div>
				<div class="content-item-details">
					<table class="table table-striped table-bordered table-list">
						<thead>
							<th>In/Out</th>
							<th>From</th>
							<th>To</th>
							<th>Message</th>
						</thead>
						<tbody>
							<?php foreach ($mycoms as $mycomitem): ?>
							<tr>
								<td>
									<button class="btn btn-primary">
										<?php if ($mycomitem['com_kind'] == 'out'): ?>
											<i class="fas fa-long-arrow-alt-right"></i>	
										<?php endif ?>

										<?php if ($mycomitem['com_kind'] == 'in'): ?>
											<i class="fas fa-long-arrow-alt-left"></i>
										<?php endif ?>
									</button>
								</td>
								<td><?=$mycomitem['com_user_from']['name']?></td>
								<td><?=$mycomitem['com_user_to']['name']?></td>
								<td><button class="btn btn-warning"><i class="fas fa-pencil-alt"></i> View Contact</button></td>
							</tr>	
							<?php endforeach ?>

						</tbody>
					</table>
				</div>
			</div>

			<div class="myaccount-content-item" id="my-account-item">
				<div class="content-item-title" style="display: flex; justify-content: space-between; align-items: center;">
					<h3>My Account</h3> 
					<div>
						<?php if ($myaccount['user_status'] == 'enabled'): ?>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#disable_account_modal">Disable Account</button>
						<?php endif ?>

						<?php if ($myaccount['user_status'] == 'disabled'): ?>
							<a href="<?=base_url()?>user/enableaccount" class="btn btn-default">Enable Account</a>
						<?php endif ?>
						
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#remove_account_modal">Remove Account</button>

						<!-- Modal -->
						  <div class="modal fade" id="disable_account_modal" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Disable Account</h4>
						        </div>
						        <div class="modal-body">
						          <p>Do you want to disable account really?</p>
						          <small class="text-warning">Disble account is temporarily action, so if you login again, the you can get the option for enable your account.</small>
						        </div>
						        <div class="modal-footer">
						        <a href="<?=base_url()?>user/disableaccount" class="btn btn-danger" >Yes, I do</a>
						          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        </div>
						      </div>
						      
						    </div>
						  </div>

						  <!-- Modal -->
						  <div class="modal fade" id="remove_account_modal" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Remove Account</h4>
						        </div>
						        <div class="modal-body">
						          <p>Do you want to remove account really?</p>
						          <small class="text-danger">Please be careful, if you remove account, you can only get back your account by contacting to support.</small>
						        </div>
						        <div class="modal-footer">
						        <a href="<?=base_url()?>user/removeaccount" class="btn btn-danger" >Yes, I do</a>
						          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        </div>
						      </div>
						      
						    </div>
						  </div>
					</div>
				</div>
				<div class="content-item-details">
					
					<table class="table table-striped table-bordered table-list">
						<thead>
							<th>ID</th>
							<th>Label</th>
							<th>Value</th>
							<th>Action</th>
							
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>First Name</td>
								<td><input type="" class="form-control" placeholder="First Name" name="" value="<?=$myaccount['first_name']?>" id="firstname-input"></td>
								<td><button class="btn btn-success" id="save-firstname-btn">Save</button></td>
								
							</tr>

							<tr>
								<td>2</td>
								<td>Last Name</td>
								<td><input type="" class="form-control" placeholder="Last Name" name="" value="<?=$myaccount['last_name']?>" id="lastname-input"></td>
								<td><button class="btn btn-success" id="save-lastname-btn">Save</button></td>
								
							</tr>

							<tr>
								<td>3</td>
								<td>Email</td>
								<td><input type="" class="form-control" placeholder="Email" name="" value="<?=$myaccount['email']?>" id="email-input"></td>
								<td><button class="btn btn-success" id="save-email-btn">Save</button></td>
							</tr>

							<tr>
								<td>4</td>
								<td>User Name</td>
								<td><input type="" class="form-control" placeholder="User Name" name=""  value="<?=$myaccount['name']?>" id="username-input"></td>
								<td><button class="btn btn-success" id="save-username-btn">Save</button></td>
							</tr>

							<tr>
								<td>5</td>
								<td>Password</td>
								<td><input type="password" class="form-control" placeholder="******" name="" ></td>
								<td><button class="btn btn-success">Save</button></td>
							</tr>

							<tr>
								<td>6</td>
								<td>Phone</td>
								<td><input type="text" class="form-control" placeholder="1-(555)-555-5555" name=""  value="<?=$myaccount['mobile']?>" id="phone-input"></td>
								<td><button class="btn btn-success"  id="save-phone-btn">Save</button></td>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript" src="<?=base_url()?>assets/js/home/myaccount.js"></script>