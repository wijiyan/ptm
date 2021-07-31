<div class="form-msg"></div>
<h3 style="display:block; text-align:center;">Edit Data Sesi</h3>
<form id="form-update-sesi" method="POST">
    <!-- <form method="POST" action="<?php echo base_url();?>Setting/prosesUpdate"> -->
        <input type="hidden" name="id" value="<?php echo $dataSesi->id;?>"></input>
        <fieldset class="form-group">
            <label for="sesi">Sesi</label>
            <input type="text" class="form-control" name="sesi" id="sesi" value="<?php echo $dataSesi->sesi;?>" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="jml_sasaran">Jml Sasaran</label>
            <input type="text" class="form-control" name="jml_sasaran" id="jml_sasaran" value="<?php echo $dataSesi->jml_sasaran;?>" required>
        </fieldset>
        <fieldset class="form-group">
            <button type="submit" class="form-group btn mb-1 btn-primary btn-icon btn-lg btn-block">Simpan</button>
        </fieldset>
    </form>
