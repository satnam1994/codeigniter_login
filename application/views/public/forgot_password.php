<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Forgot Password</title>

		<?= link_tag('assets/css/bootstrap/bootstrap.min.css'); ?>
		<?= link_tag('assets/css/font-awesome/css/font-awesome.min.css'); ?>
		<?= link_tag('assets/css/datatable/dataTables.bootstrap4.css'); ?>
		<?= link_tag('assets/css/custom.css'); ?>

	</head>
	<body>
		<div class="container">
			<?php if ( $error = $this->session->flashdata('registeration_failed') ) {  ?>
				<div class="mx-auto col-md-5 mt-3 alert alert-danger text-center">
					<?= $error ?>
				</div>
			<?php } ?>
			<div class="card card-login mx-auto mt-8">
				<div class="card-header">Forgot Password</div>
				<div class="card-body">
					<?= form_open('register/forgot_password') ?>
					<div class="form-group">
						<label for="exampleInputfirstname">First Name</label>
						<?= form_input(['type' => 'text', 'class' => 'form-control', 'id' => 'exampleInputfirstname', 'name' => 'first_name', 'placeholder' => 'Enter First Name']) ?>
						<?php
						if(form_error('first_name')) {
							echo form_error('first_name');
						}
						?>
					</div>
					<div class="form-group">
						<label for="exampleInputlastname">Last Name</label>
						<?= form_input(['type' => 'text', 'class' => 'form-control', 'id' => 'exampleInputlastname', 'name' => 'last_name', 'placeholder' => 'Enter Last Name']) ?>
						<?php
						if(form_error('last_name')) {
							echo form_error('last_name');
						}
						?>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Username</label>
						<?= form_input(['type' => 'text', 'class' => 'form-control', 'id' => 'exampleInputUsername', 'aria-describedby' => 'usernameHelp', 'placeholder' => 'Enter Username', 'name' => 'username', 'value' => set_value('username')]) ?>
						<?php
						if(form_error('username')) {
							echo form_error('username');
						}
						?>
					</div>
					<?= form_submit(['class' => 'btn btn-primary btn-block', 'type' => 'submit', 'value' => 'Register']) ?>
					<?= form_close(); ?>
					<div class="text-center">
						<a class="d-block small mt-3" href="http://localhost/ci/index.php/login">Login</a>
					</div>
				</div>
			</div>
		</div>

		<?php include 'public_footer.php'; ?>
