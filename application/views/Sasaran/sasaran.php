<div class="msg" style="display:none;">
	<?php echo @$this->session->flashdata('msg'); ?>
</div>
<section id="column-selectors">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"><?php echo $judul;?></h4>
				</div>
				<div class="card-content">
					<div class="card-body card-dashboard">
						<div class="table-responsive">
							<table class="table table-striped" id="list-data">
								<thead>
									<tr>
										<th>No</th>
										<th>NIK</th>
										<th>Nama</th>
										<th>Tanggal Lahir</th>
										<th>Jenis Kelamin</th>
										<th>No HP</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="data-sasaran"></tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>NIK</th>
										<th>Nama</th>
										<th>Tanggal Lahir</th>
										<th>Jenis Kelamin</th>
										<th>No HP</th>
										<th>Aksi</th>
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

<?php //echo $modal_tambah_sasaran; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataSasaran', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>