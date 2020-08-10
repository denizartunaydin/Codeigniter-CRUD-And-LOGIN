<?php $user_error = $this->session->flashdata('user_error'); ?>
<div class="content">
	<div class="card">
		<div class="card-body">
			<?php if (isset($user_error)) { ?>
				<div class="alert alert-danger border-0 alert-dismissible">
					<button type="button" class="close" data-dismiss="alert"><span>×</span></button>
					<?php echo $user_error; ?>
				</div>
			<?php } ?>
			<form action="<?php echo base_url("user/save/"); ?>" method="post">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name:</label>
									<input type="text" name="fullname" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Status:</label>
									<select name="userstatus" class="form-control form-control-select2" data-fouc>
										<?php foreach ($status as $statu) { ?>
											<option value="<?php echo $statu->USERSTATUSID; ?>"><?php echo $statu->USERSTATUSNAME; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Username:</label>
									<input type="text" name="username" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label>Password:</label>
									<input type="text" name="password" class="form-control">
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Email:</label>
									<input type="text" name="usermail" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label>Phone Number:</label>
									<input type="text" name="userphone" class="form-control">
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="text-right">
					<a href="<?php echo base_url("user"); ?>" class="btn btn-danger btn-sm font-weight-bold"><i class="fa fa-undo"></i> Back </a>
					<button type="submit" class="btn btn-primary btn-sm font-weight-bold"><i class="fa fa-save"></i> Save</button>
				</div>
			</form>
		</div>
	</div>
</div>