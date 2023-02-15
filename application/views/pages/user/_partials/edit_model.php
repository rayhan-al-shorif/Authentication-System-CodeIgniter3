<div class="modal fade" id="editModel" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Update User Information</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('user/update'); ?>" class="editForm" method="post">
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
									<?php foreach ($divisions as $division) { ?>
										<option value="<?php echo $division->id; ?>"><?php echo $division->name; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="user_district" class="form-label">User District: <span class="text-danger">*</span></label>
								<select name="user_district" class="form-control" id="user_district">
									<option value="0" selected disabled>Select district</option>
									<?php foreach ($districts as $district) { ?>
										<option value="<?php echo $district->id; ?>"><?php echo $district->name; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="user_thana" class="form-label">User Thana: <span class="text-danger">*</span></label>
								<select name="user_thana" class="form-control" id="user_thana">
									<option value="0" selected disabled>Select thana</option>
									<?php foreach ($thanas as $thana) { ?>
										<option value="<?php echo $thana->id; ?>"><?php echo $thana->name; ?></option>
									<?php } ?>
								</select>
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
								<?php foreach ($roles as $role) { ?>
									<option value="<?php echo $role->id ?>"><?php echo $role->name ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-md-6"></div>
					<div class="col-md-6 d-none">
						<div class="mb-3">
							<button type="submit" class="btn btn-primary">Create</button>
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-outline-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>

	</div>

</div>
