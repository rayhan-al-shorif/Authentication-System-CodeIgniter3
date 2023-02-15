	<section class="content">

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">New User Create</h3>
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('user/store'); ?>" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label for="user_name" class="form-label">User Name: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter your name" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="full_name" class="form-label">Full Name: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter your full name" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="user_division" class="form-label">User Division: <span class="text-danger">*</span></label>
								<select name="user_division" class="form-control" id="user_division">
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="user_district" class="form-label">User District: <span class="text-danger">*</span></label>
								<select name="user_district" class="form-control" id="user_district">
									<option value="0" selected disabled>Select district</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="user_thana" class="form-label">User Thana: <span class="text-danger">*</span></label>
								<select name="user_thana" class="form-control" id="user_thana">
									<option value="0" selected disabled>Select thana</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="email" class="form-label">Email <span class="text-danger">*</span></label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Email" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="password" class="form-label">Password <span class="text-danger">*</span></label>
								<input type="password" class="form-control" name="password" id="password" placeholder="Password" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="confirmation_password" class="form-label">Confirmation Password <span class="text-danger">*</span></label>
								<input type="password" class="form-control" name="confirmation_password" id="confirmation_password" placeholder="Confirmation Password" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="user_type" class="form-label">User Type: <span class="text-danger">*</span></label>
							<select name="user_type" class="form-control" id="user_type">
								<option value="0" selected disabled>Select user type</option>
								<?php foreach ($roles as $role) { ?>
									<option value="<?php echo $role->id ?>"><?php echo $role->name ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mt-3">
							<button type="submit" class="btn btn-primary">Create</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<script>
			var base_url = '<?php echo base_url() ?>index.php/api/user';
		</script>
		<script src="<?php echo base_url('public/js/user/create.js') ?>"></script>

	</section>
