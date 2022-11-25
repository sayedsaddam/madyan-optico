<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Clients / Patients</h1>
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
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</tfoot>
					<tbody>
						<?php 
							for($i = 0; $i <= 50; $i++): 
								$name = array('John Doe', 'Jane Doe', 'Marrie', 'David', 'Darron', 'Bravo', 'Samuel');
								$position = array('System Architect', 'Software Engineer', 'Data Analyst', 'QA Engineer');
								$age = array(31, 43, 34, 30, 50, 61);
								$date = array('2022-12-01', '2022-11-01', '2022-09-01', '2022-01-01', '2022-05-01');
								$office = array('Edinburgh', 'London', 'Berlin', 'Tokyo', 'Wales');
								$salary = array('122,000', '90,000', '80,000', '85,000', '75,000');
						?>
						<tr>
								<td><?= $name[rand(0, 6)]; ?></td>
								<td><?= $position[rand(0, 3)]; ?></td>
								<td><?= $office[rand(0, 4)]; ?></td>
								<td><?= $age[rand(0, 5)]; ?></td>
								<td><?= $date[rand(0, 4)]; ?></td>
								<td>$<?= $salary[rand(0, 4)]; ?></td>
							</tr>
						<?php endfor; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
