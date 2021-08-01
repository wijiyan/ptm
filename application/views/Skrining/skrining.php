<div class="msg" style="display:none;">
	<?php echo @$this->session->flashdata('msg'); ?>
</div>
<style type="text/css">
	.dt-body-nowrap {
		white-space: nowrap;
	}
</style>
<section id="column-selectors">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="col-md-12">
						<h4 class="card-title"><?php echo $judul;?></h4>
					</div>
				</div>
				<div class="col-md-12">
					<a data-toggle="modal" data-target="#tambah-skrining" class="btn btn-outline-primary">Tambah Skrining</a>
					<?php if($this->userdata->level == 'admin') { ?>
						<a href="<?php echo base_url('Skrining/export_excel');?>" class="btn btn-outline-primary"><i class="fa fa-file-excel-o"> Download</i></a>
						<!-- <button class="btn btn-outline-success" data-toggle="modal" data-target="#import-pelaporan"><i class="fa fa-file-excel-o"></i> Import Excel</button> -->
					<?php } ?>
				</div>
				<div class="card-content">
					<div class="card-body card-dashboard">
						<div class="table-responsive">
							<table class="table table-striped" id="list-data" dt-body-nowrap>
								<thead>
									<tr>
										<?php if($this->userdata->level == 'admin'){?>
											<th>No</th>
											<th>NIK</th>
											<th>Nama</th>
											<th>Tempat Tanggal Lahir</th>
											<th>No HP</th>
											<th>Aksi</th>
										<?php } else if($this->userdata->level == 'sasaran'){?>
											<th>No</th>
											<th>Tanggal Pemeriksaan</th>
											<th>Tempat Pemeriksaan</th>
											<th>Tekanan Darah</th>
											<th>Berat Badan</th>
											<th>Tinggi Badan</th>
											<th>Gula Darah Sewaktu</th>
											<th>Aksi</th>
										<?php } ?>
									</tr>
								</thead>
								<tbody id="data-skrining"></tbody>
								<tfoot>
									<tr>
										<?php if($this->userdata->level == 'admin'){?>
											<th>No</th>
											<th>NIK</th>
											<th>Nama</th>
											<th>Tempat Tanggal Lahir</th>
											<th>No HP</th>
										<?php } else if($this->userdata->level == 'sasaran'){?>
											<th>No</th>
											<th>Tanggal Pemeriksaan</th>
											<th>Tempat Pemeriksaan</th>
											<th>Tekanan Darah</th>
											<th>Berat Badan</th>
											<th>Tinggi Badan</th>
											<th>Gula Darah Sewaktu</th>
											<th>Aksi</th>
										<?php } ?>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- <div class="col-md-3 mb-1">
	<h5 class="text-bold-500">Download Excel</h5>
	<form action="<?php echo base_url();?>Pasien/cetak_excel" method="POST">
		<div class="row">
			<div class="col-md-6">
				<fieldset class="form-group">
					<input type="date" name="tgl_kunjungan" value="<?php echo date('Y-m-d');?>">
				</fieldset>
			</div>
			<div class="col-md-6">
				<fieldset class="form-group">
					<input class="btn btn-success" type="submit" value="Download">
				</fieldset>
			</div>                                                              
		</div>
	</form>
</div> -->

<?php echo $modal_tambah_skrining; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataSkrining', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>