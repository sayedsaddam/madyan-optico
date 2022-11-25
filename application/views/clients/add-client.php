<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Add Client / Patient</h1>
		<a href="javascript:history.go(-1)" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
				class="fas fa-arrow-left fa-sm text-white-50"></i> Back Home</a>
	</div>
	
	<!-- container and form to add new client -->
	<div class="container">
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
					<div class="col-lg-7">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Register a client!</h1>
							</div>
							<form action="<?= base_url('dashboard/save_client_info'); ?>" class="user">
								<div class="form-group">
									<input name="name" type="text" class="form-control form-control-user" id="exampleName" placeholder="Name...">
								</div>
								<div class="form-group">
									<input name="age" type="number" class="form-control form-control-user" id="exampAge" placeholder="Age">
								</div>
								<div class="form-group">
									<input name="address" type="text" class="form-control form-control-user" id="exampleAddress" placeholder="Address...">
								</div>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" id="exampleInputPhone" placeholder="Phone number...">
								</div>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" id="examplePCN" placeholder="Patient control number...">
									<small class="text-muted ml-3">A 5 digit random number generated through which you can search for the patient later.</small>
								</div>
								<button type="submit" class="btn btn-primary btn-user btn-block">Save Changes</button>
								<button onclick="pcn_number();" type="button" class="btn btn-primary btn-user btn-block">Generate PCN</button>
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

<!-- Generate Patient control number -->
<script>
	function pcn_number(){
		var pcn = Math.floor(Math.random() * 100000);
		document.getElementById('examplePCN').value = pcn;
	}
</script>
