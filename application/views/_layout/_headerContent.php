<div class="content-header row">
	<div class="content-header-left col-md-9 col-12 mb-2">
		<div class="row breadcrumbs-top">
			<div class="col-12">
				<h2 class="content-header-title float-left mb-0"><?php echo $judul;?></h2>
				<div class="breadcrumb-wrapper col-12">
					<ol class="breadcrumb">
						<?php
						for ($i=0; $i<count($this->session->flashdata('segment')); $i++) { 
							if ($i == 0) {
								?>
								<li><li class="breadcrumb-item"></i> <?php echo $this->session->flashdata('segment')[$i]; ?></li>
								<?php
							} elseif ($i == (count($this->session->flashdata('segment'))-1)) {
								?>
								<li class="breadcrumb-item active"> <?php echo $this->session->flashdata('segment')[$i]; ?> </li>
								<?php
							} else {
								?>
								<li> <?php echo $this->session->flashdata('segment')[$i]; ?> </li>
								<?php
							}

							if ($i == 0 && $i == (count($this->session->flashdata('segment'))-1)) {
								?>
								<li class="breadcrumb-item active"> </li>
								<?php
							}
						}
						?>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
		<div class="form-group breadcrum-right">
<!-- 			<div class="dropdown">
				<button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
				<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
			</div> -->
		</div>
	</div>
</div>