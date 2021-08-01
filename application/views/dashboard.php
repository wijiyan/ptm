<div class="content-body">
	<!-- Dashboard Analytics Start -->
	<section id="dashboard-analytics">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12">
				<div class="card">
					<div class="card-header d-flex flex-column align-items-start pb-0">
						<div class="avatar bg-rgba-primary p-50 m-0">
							<div class="avatar-content">
								<i class="feather icon-users text-primary font-medium-5"></i>
							</div>
						</div>
						<h2 class="text-bold-700 mt-1 mb-25"><?php echo $total_sasaran;?></h2>
						<p class="mb-0">Total Sasaran</p>
					</div>
					<div class="card-content">
						<div id="subscribe-gain-chart"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="card">
					<div class="card-header d-flex flex-column align-items-start pb-0">
						<div class="avatar bg-rgba-danger p-50 m-0">
							<div class="avatar-content">
								<i class="feather icon-bar-chart-2 text-danger font-medium-5"></i>
							</div>
						</div>
						<h2 class="text-bold-700 mt-1 mb-25"><?php echo $skrining;?></h2>
						<p class="mb-0">Total Skrining</p>
					</div>
					<div class="card-content">
						<div id="orders-received-chart"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Grafik Skrining Mingguan</h4>
					</div>
					<div class="card-content">
						<div class="card-body pl-0">
							<div class="height-300">
								<canvas id="bar-chart"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
