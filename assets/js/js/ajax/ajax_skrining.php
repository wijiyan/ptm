<script type="text/javascript">
	var MyTable = $('#list-data').dataTable({
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});

	window.onload = function() {
		tampilSkrining();
		<?php
		if ($this->session->flashdata('msg') != '') {
			echo "effect_msg();";
		}
		?>

		$('#tgl_lahir').on('change', function() {
			var dob = new Date(this.value);
			var today = new Date();
			var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
			$('#umur').val(age);
			$('#umur2').val(age+ ' tahun');
		});

		document.getElementById("kota_domisili").disabled ='true';
		document.getElementById("kec_domisili").disabled ='true';
		document.getElementById("kel_domisili").disabled ='true';
		document.getElementById("rt_domisili").disabled ='true';
		document.getElementById("rw_domisili").disabled ='true';
		document.getElementById("alamat_domisili").disabled ='true';
        //document.getElementById("tgl_vaksin").disabled ='true';



    }

    function refresh() {
    	MyTable = $('#list-data').dataTable();
    }

    function effect_msg_form() {
		// $('.form-msg').hide();
		$('.form-msg').show(1000);
		setTimeout(function() { $('.form-msg').fadeOut(1000); }, 3000);
	}

	function effect_msg() {
		// $('.msg').hide();
		$('.msg').show(1000);
		setTimeout(function() { $('.msg').fadeOut(1000); }, 3000);
	}

	function tampilSkrining() {
		<?php if($this->userdata->level == 'admin'){ ?>
			$.get('<?php echo base_url('Skrining/tampil'); ?>', function(data) {
			<?php } else if($this->userdata->level == 'sasaran'){ ?>
				$.get('<?php echo base_url('Skrining/tampil_sasaran'); ?>', function(data) {
				<?php } ?>


				MyTable.fnDestroy();
				$('#data-skrining').html(data);
				refresh();
			});
			}

			var id;
			$(document).on("click", ".konfirmasiHapus-skrining", function() {
				id = $(this).attr("data-id");
			})
			$(document).on("click", ".hapus-dataSkrining", function() {
				var id_pemeriksaan = id;

				$.ajax({
					method: "POST",
					url: "<?php echo base_url('Skrining/delete'); ?>",
					data: "id=" +id_pemeriksaan
				})
				.done(function(data) {
					$('#konfirmasiHapus').modal('hide');
					tampilSkrining();
					$('.msg').html(data);
					effect_msg();
				})
			})

			$(document).on("click", ".update-dataSkrining", function() {
				var id = $(this).attr("data-id");

				$.ajax({
					method: "POST",
					url: "<?php echo base_url('Skrining/update'); ?>",
					data: "id=" +id
				})
				.done(function(data) {
					$('#tempat-modal').html(data);
					$('#update-skrining').modal('show');
				})
			})


			$('#form-tambah-skrining').submit(function(e) {
				var data = $(this).serialize();

				$.ajax({
					method: 'POST',
					<?php if($this->userdata->level == 'admin'){?>
						url: '<?php echo base_url('Skrining/Simpan'); ?>',
					<?php } else if($this->userdata->level == 'sasaran'){?>
						url: '<?php echo base_url('Skrining/SimpandariSasaran'); ?>',
					<?php } ?>
					data: data
				})
				.done(function(data) {
					var out = jQuery.parseJSON(data);

					tampilSkrining();
					if (out.status == 'form') {
						$('.form-msg').html(out.msg);
						effect_msg_form();
					} else {
						document.getElementById("form-tambah-skrining").reset();
						$('#tambah-skrining').modal('hide');
						$('.msg').html(out.msg);
						effect_msg();
					}
				})

				e.preventDefault();
			});

			$(document).on('submit', '#form-update-skrining', function(e){
				var data = $(this).serialize();

				$.ajax({
					method: 'POST',
					url: '<?php echo base_url('Skrining/prosesUpdate'); ?>',
					data: data
				})
				.done(function(data) {
					var out = jQuery.parseJSON(data);

					tampilSkrining();
					if (out.status == 'form') {
						$('.form-msg').html(out.msg);
						effect_msg_form();
					} else {
						document.getElementById("form-update-skrining").reset();
						$('#update-skrining').modal('hide');
						$('.msg').html(out.msg);
						effect_msg();
					}
				})

				e.preventDefault();
			});

			$('#tambah-skrining').on('hidden.bs.modal', function () {
				$('.form-msg').html('');
			})

			$('#update-skrining').on('hidden.bs.modal', function () {
				$('.form-msg').html('');
			})


			var ajaxku=buatajax();
			function ajaxkota(id){
				var url="<?php echo base_url();?>daerah/getKab/"+id+"/"+Math.random();
				ajaxku.onreadystatechange=stateChanged;
				ajaxku.open("GET",url,true);
				ajaxku.send(null);
				document.getElementById("kec_domisili").disabled ='false';
			}

			function ajaxkec(id){
				var url="<?php echo base_url();?>daerah/getKec/"+id+"/"+Math.random();
				ajaxku.onreadystatechange=stateChangedKec;
				ajaxku.open("GET",url,true);
				ajaxku.send(null);
				document.getElementById("kel_domisili").disabled ='false';
			}

			function ajaxkel(id){
				var url="<?php echo base_url();?>daerah/getKel/"+id+"/"+Math.random();
				ajaxku.onreadystatechange=stateChangedKel;
				ajaxku.open("GET",url,true);
				ajaxku.send(null);

			}

			function buatajax(){
				if (window.XMLHttpRequest){
					return new XMLHttpRequest();
				}
				if (window.ActiveXObject){
					return new ActiveXObject("Microsoft.XMLHTTP");
				}
				return null;
			}

			function stateChanged(){
				var data;
				if (ajaxku.readyState==4){
					data=ajaxku.responseText;
					if(data.length>=0){
						document.getElementById("kota_domisili").innerHTML = data
					}else{
						document.getElementById("kota_domisili").value = "<option selected>Pilih Kota/Kab</option>";
					}
					document.getElementById("kota_domisili").disabled = false;
				}
			}

			function stateChangedKec(){
				var data;
				if (ajaxku.readyState==4){
					data=ajaxku.responseText;
					if(data.length>=0){
						document.getElementById("kec_domisili").innerHTML = data
					}else{
						document.getElementById("kec_domisili").value = "<option selected>Pilih Kecamatan</option>";
					}
					document.getElementById("kec_domisili").disabled = false;
				}
			}

			function stateChangedKel(){
				var data;
				if (ajaxku.readyState==4){
					data=ajaxku.responseText;
					if(data.length>=0){
						document.getElementById("kel_domisili").innerHTML = data
					}else{
						document.getElementById("kel_domisili").value = "<option selected>Pilih Kelurahan/Desa</option>";
					}
					document.getElementById("kel_domisili").disabled = false;
					document.getElementById("rt_domisili").disabled = false;
					document.getElementById("rw_domisili").disabled = false;
					document.getElementById("alamat_domisili").disabled = false;
				}
			}

			function validateNumber(evt)
			{
				if(evt.keyCode!=8)
				{
					var theEvent = evt || window.event;
					var key = theEvent.keyCode || theEvent.which;
					key = String.fromCharCode(key);
					var regex = /[0-9]|\./;
					if (!regex.test(key))
					{
						theEvent.returnValue = false;

						if (theEvent.preventDefault)
							theEvent.preventDefault();
					}
				}
			}


		</script>