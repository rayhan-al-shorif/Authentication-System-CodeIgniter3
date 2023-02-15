<section class="content">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">User List</h3>
			<div class="card-tools">
				<a href="<?php echo base_url('index.php/user/create') ?>">
					<button type="button" class="btn btn-sm btn-outline-success">
						<i class="fas fa-plus"></i> Add
					</button>
				</a>
				<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
					<i class="fas fa-minus"></i>
				</button>
				<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
					<i class="fas fa-times"></i>
				</button>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">User Information</h3>
							<div class="card-tools">
								<div class="input-group input-group-sm" style="width: 150px;">
									<input type="text" name="table_search" class="form-control float-right" placeholder="Search">
									<div class="input-group-append">
										<button type="submit" class="btn btn-default">
											<i class="fas fa-search"></i>
										</button>
									</div>
								</div>
							</div>
						</div>

						<div class="card-body table-responsive p-0">
							<table class="table table-hover text-nowrap">
								<thead>
									<tr>
										<th>#</th>
										<th>User Name</th>
										<th>Full Name</th>
										<th>Email</th>
										<th>Address
											<br>
											<small>Division-District-Thana</small>
										</th>
										<th>Type/Role</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($users as $index => $user) { ?>
										<tr>
											<td><?php echo $index + 1 ?></td>
											<td><?php echo $user->name ?></td>
											<td><?php echo $user->full_name ?></td>
											<td><?php echo $user->email ?></td>
											<td><?php echo $user->division ?>-<?php echo $user->district ?>-<?php echo $user->thana ?></td>
											<td><span class="tag tag-success"><?php echo $user->role ?></span></td>
											<td>
												<div class="btn-group" id="<?php echo $user->id ?>">
													<a href="<?php echo base_url('user/show/' . $user->id) ?>">
														<button type="button" class="btn btn-outline-success btn-sm"><i class="fa-solid fa-eye"></i></button>
													</a>
													<button type="button" data-toggle="modal" data-target="#editModel" class="btn btn-outline-info btn-sm editBtn"><i class="fa-solid fa-pen"></i></button>
													<?php if (!$user->name == "Admin") { ?>
														<button type="button" class="btn btn-outline-danger btn-sm deleteBtn"><i class="fa-solid fa-trash"></i></button>
													<?php } ?>
												</div>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
	<?php $this->view('pages/user/_partials/edit_model'); ?>
	<script>
		var base_url = '<?php echo base_url() ?>user';
	</script>
	<script src="<?php echo base_url('public/js/user/edit.js') ?>"></script>
	<script src="<?php echo base_url('public/js/user/delete.js') ?>"></script>
</section>
