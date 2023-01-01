<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Clients / Patients  | 
			<a href="<?= base_url('dashboard/add_client'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
		</h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
				class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	</div>
	<?php if($success = $this->session->flashdata('success')): ?>
		<div class="alert alert-success"><?= $success; ?></div>
	<?php endif; ?>
	<!-- Clients / Patients list -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">List of clients / patients</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Name</th>
							<th>PCN</th>
							<th>Age</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Date</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>PCN</th>
							<th>Age</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Date</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						<?php 
							if(!empty($clients)): foreach($clients as $client):
						?>
						<tr class="<?= $client->status == 0 ? 'table-danger' : ''; ?>">
								<td><?= $client->name; ?></td>
								<td><?= $client->pcn; ?></td>
								<td><?= $client->age; ?></td>
								<td><?= $client->address; ?></td>
								<td><?= $client->phone; ?></td>
								<td><?= date('M d, Y', strtotime($client->created_at)); ?></td>
								<td>
									<?= $client->status == 1 ? '<span class="badge bg-success text-white">Active</span>' : '<span class="badge bg-danger text-white">Inactive</span>'; ?>
								</td>
								<td>
									<a href="<?= base_url('dashboard/edit_client/'.$client->id); ?>"><i class="fas fa-edit"></i></a> |
									<a href="<?= base_url('dashboard/delete_client/'.$client->id); ?>"><i class="fas fa-times text-danger"></i></a> |
									<a href=""><i class="fas fa-arrow-right"></i></a>
								</td>
							</tr>
						<?php endforeach; endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
