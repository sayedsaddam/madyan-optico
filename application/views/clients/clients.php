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

	<!-- Clients / Patients list -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">List of clients / patients</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Name</th>
							<th>PCN</th>
							<th>Age</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Date</th>
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
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						<?php 
							if(!empty($clients)): foreach($clients as $client):
						?>
						<tr>
								<td><?= $client->name; ?></td>
								<td><?= $client->pcn; ?></td>
								<td><?= $client->age; ?></td>
								<td><?= $client->address; ?></td>
								<td><?= $client->phone; ?></td>
								<td><?= date('M d, Y', strtotime($client->created_at)); ?></td>
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
