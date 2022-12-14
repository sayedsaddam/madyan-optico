<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<?= empty($detail) ? 'Add Client / Patient' : 'Edit Client / Patient'; ?>
		</h1>
		<a href="javascript:history.go(-1)" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
				class="fas fa-arrow-left fa-sm text-white-50"></i> Back Home</a>
	</div>
	
	<!-- container and form to add new client -->
	<div class="container">
		<?php if($success = $this->session->flashdata('success')): ?>
			<div class="alert alert-success"><?= $success; ?></div>
		<?php elseif($failed = $this->session->flashdata('failed')): ?>
			<div class="alert alert-danger"><?= $failed ?></div>
		<?php endif; ?>
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
					<div class="col-lg-7">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">
									<?= empty($detail) ? 'Register a client!' : 'Edit Client!'; ?>
								</h1>
							</div>
							<form action="<?= empty($detail) ? base_url('dashboard/save_client_info') : base_url('dashboard/update_client_info'); ?>" method="post" class="user">
								<input type="hidden" name="client_id" value="<?= !empty($detail) ? $detail->id : ''; ?>">
								<div class="form-group">
									<input name="name" type="text" class="form-control form-control-user" id="exampleName" placeholder="Name..." required value="<?= !empty($detail) ? $detail->name : ''; ?>">
								</div>
								<div class="form-group">
									<input name="age" type="number" class="form-control form-control-user" id="exampAge" placeholder="Age" required value="<?= !empty($detail) ? $detail->age : ''; ?>">
								</div>
								<div class="form-group">
									<input name="address" type="text" class="form-control form-control-user" id="exampleAddress" placeholder="Address..." required value="<?= !empty($detail) ? $detail->address : ''; ?>">
								</div>
								<div class="form-group">
									<input name="phone" type="text" class="form-control form-control-user" id="exampleInputPhone" placeholder="Phone number..." required value="<?= !empty($detail) ? $detail->phone : ''; ?>">
								</div>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" id="examplePCN" placeholder="PCN - will be generate automatically..." readonly value="<?= !empty($detail) ? $detail->pcn : ''; ?>">
									<small class="text-muted ml-3">A 5 digit random number generated through which you can search for the patient later.</small>
								</div>
								<button type="submit" class="btn btn-primary btn-user btn-block">Save Changes</button>
								<button type="reset" class="btn btn-warning btn-user btn-block">Clear Form</button>
								<hr>
							</form>
						</div>
					</div>
				</div>
			</div>
      </div>
	</div>
</div>
<!-- /.container-fluid -->
