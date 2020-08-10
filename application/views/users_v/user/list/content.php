<div class="row col-lg-12">
	<a href="<?php echo base_url("user/add"); ?>" class="btn btn-success"><i class="fa fa-plus"></i> User Add</a>
</div>
<br>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-users"></i> Users</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Name</th>
						<th>Username</th>
						<th>Email</th>
						<th>Phone Number</th>
						<th>Status</th>
						<th>Other</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user) { ?>
						<tr>
							<td><?php echo $user->FULLNAME; ?> </td>
							<td><?php echo $user->USERNAME; ?> </td>
							<td><?php echo $user->USERMAIL; ?></td>
							<td><?php echo $user->USERPHONE; ?></td>
							<td><?php echo $user->USERSTATUSNAME; ?></td>
							<td class=" text-center">
								<a href="<?php echo base_url("user/edit/$user->USERID"); ?>" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit</a>
								<a href="<?php echo base_url("user/delete/$user->USERID"); ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Delete</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>