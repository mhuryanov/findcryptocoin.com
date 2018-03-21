<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<meta name="description" content="Findcryptocoin is for Findcryptocoin">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/dist/css/home.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/dist/css/user.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>


</head>
<body>

<div class="header">
	<div class="logo-part">
		<a href="<?=base_url().$this->session->userdata('logo_target')?>" style="text-decoration: none;">
		<img src="<?=base_url()?>assets/logos/<?=$this->session->userdata('logo_image')?>">

		<span><?=$this->session->userdata('logo_label')?></span>
		</a>
	</div>

	<div class="menu-div">
		<?php foreach($menus as $menu){
			?>
			<a href="<?=base_url().$menu['menu_target']?>" class="menu-item"><?=$menu['menu_label']?></a>
			<?php
		}?>
		<?php 
		 
		  $isLoggedIn = $this->session->userdata('user-login');
	        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
	        {
	           
	        } else{
	        	?>
	        		<div class="menu-item">
						<p>Hello <?=$this->session->userdata('user-name')?></p>
						<p><a href="<?=base_url()?>user/logout">Log out</a></p>
					</div>
		
	        	<?php
	        }
			?>
		
		
	</div>

	<div class="menu-div-mobile close">
		<span class="menu-bar-open">
			<i class="fas fa-bars"></i>
		</span>

		<div class="menu-content">
			<span class="menu-bar-close">
			<i class="fas fa-times"></i>
		</span>
			<?php foreach($menus as $menu){
			?>
			<a href="<?=base_url().$menu['menu_target']?>" class="menu-item"><?=$menu['menu_label']?></a>
			<?php
		}?>
		<?php 
		 
		  $isLoggedIn = $this->session->userdata('user-login');
	        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
	        {
	           
	        } else{
	        	?>
	        		<div class="menu-item">
						<p>Hello <?=$this->session->userdata('user-name')?></p>
						<p><a href="<?=base_url()?>user/logout">Log out</a></p>
					</div>
		
	        	<?php
	        }
			?>
		</div>
	</div>

	<div class="header-background"></div>

</div>

<div class="loading-div" id="loading-div">
	<div class="loading-content-div">
		<img src="<?=base_url()?>assets/images/loading.gif" class="loading-gif">
	</div>
	<div class="loading-background"></div>
</div>
<!-- content -->
<div class="content">

<?php
	// $broadcasts = $this->session->userdata('broadcasts');
	
	if($broadcasts) {
		
		foreach ($broadcasts as $bro_item) {
			?>

				<div class="alert alert-<?=$bro_item->bro_style?>" role="alert" style="z-index: 1;">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				  <h4 class="alert-heading"><?=$bro_item->bro_title?></h4>
				  <div>
					  <?=$bro_item->bro_content?>
				  </div>
				</div>
			<?php
		}
	}
?>

<?php
$this->load->helper('form');
$flushdata_error = $this->session->flashdata('flushdata_error');
if($flushdata_error)
{
    ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo $this->session->flashdata('flushdata_error'); ?>                    
    </div>
<?php } 

$flushdata_success = $this->session->flashdata('flushdata_success');
if($flushdata_success)
{
    ?>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo $this->session->flashdata('flushdata_success'); ?>                    
    </div>
<?php } ?>