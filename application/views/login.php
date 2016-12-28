
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
		<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<div class="container-fluid bg-danger">
	<br>
	<br>
			<?php echo form_open('login/admin_login')?>
			<fieldset>
					<div class="row">
						<div class="col-sm-4"></div>
					</div><br>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<label>User Name</label>
						<?php echo form_input(array('name'=>'username','class'=>'form-control','placeholder'=>'Username')); ?>
					</div>
				</div>
				<br>
					<div class="row">
						<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<label>Password</label>
					<?php echo form_input(['name'=>'password','class'=>'form-control','placeholder'=>'password']); ?>
					</div></div><br>
				<div class="row">
				<div class="col-sm-7"></div>
					<div class="col-sm-3">
					<div>
					<?php echo form_submit(array('name'=>'submit','value'=>'login','class'=>'btn btn-success')); ?>

					</div></div></div>
			</fieldset>
</div>
