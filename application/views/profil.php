<div class="content-body">
    <!-- account setting page start -->
    <section id="page-account-settings">
        <div class="row">
            <!-- left menu section -->
            <div class="col-md-3 mb-2 mb-md-0">
                <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                            <i class="feather icon-user mr-50 font-medium-3"></i>
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                            <i class="feather icon-lock mr-50 font-medium-3"></i>
                            Ganti Password
                        </a>
                    </li>
                    <?php if($this->userdata->level = 'sasaran'){?>
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-sasaran" data-toggle="pill" href="#account-vertical-sasaran" aria-expanded="false">
                                <i class="feather icon-credit-card mr-50 font-medium-3"></i>
                                Edit Biodata
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- right content section -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="tab-content">
                                <?php echo $this->session->flashdata('msg'); ?>
                                <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                    <div class="media">
                                        <a href="javascript: void(0);">
                                            <img src="<?php echo base_url();?>app-assets/images/profile/user-uploads/<?php echo $userdata->foto;?>" class="rounded mr-75" alt="profile image" height="64" width="64">
                                        </a>
                                        <form novalidate action="<?php echo base_url();?>Profile/update" method="POST" enctype="multipart/form-data">
                                            <div class="media-body mt-75">
                                                <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                    <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload">Upload Foto</label>
                                                    <input type="file" name="foto" id="account-upload" hidden>
                                                </div>
                                                <p class="text-muted ml-75 mt-50"><small>Hanya Diperbolehkan JPG, GIF or PNG. Ukuran Maksimal 800kB</small></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Username</label>
                                                        <input type="text" class="form-control" id="account-username" name="username" placeholder="Username" value="<?php echo $this->userdata->username;?>" required disabled data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-name">Nama</label>
                                                        <input type="text" class="form-control" id="account-name" name="nama" placeholder="Name" value="<?php echo $this->userdata->nama;?>" required data-validation-required-message="This name field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Simpan</button>
                                                <button type="reset" class="btn btn-outline-warning">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                    <form novalidate action="<?php echo base_url();?>profile/ubah_password" method="POST">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-old-password">Password Lama</label>
                                                        <input type="password" class="form-control" name="passLama" id="account-old-password" required placeholder="Password Lama" data-validation-required-message="This old password field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-new-password">New Password</label>
                                                        <input type="password" name="passBaru" id="account-new-password" class="form-control" placeholder="Password Baru" required data-validation-required-message="The password field is required" minlength="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-retype-new-password">Konfirmasi Password</label>
                                                        <input type="password" name="passKonf" class="form-control" required id="account-retype-new-password" data-validation-match-match="password" placeholder="New Password" data-validation-required-message="The Confirm password field is required" minlength="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Simpan</button>
                                                <button type="reset" class="btn btn-outline-warning">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- TAB SASARAN -->
                                <?php if($this->userdata->level == 'sasaran'){?>
                                    <div class="tab-pane fade " id="account-vertical-sasaran" role="tabpanel" aria-labelledby="account-pill-sasaran" aria-expanded="false">
                                            <form method="POST" action="<?php echo base_url();?>Sasaran/EditBiodata">
                                                <input type="hidden" value="<?php echo date('Y-m-d');?>" ></input>
                                                <?php
                                                $this->db->where('nik', $this->userdata->username);
                                                $data = $this->db->get('tbl_sasaran');
                                                foreach ($data->result() as $dataSasaran) {
                                                ?>
                                                <input type="hidden" name="id" value="<?php echo $dataSasaran->id;?>"></input>
                                                <input type="hidden" name="nik" value="<?php echo $dataSasaran->nik;?>"></input>
                                                <fieldset class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $dataSasaran->nama;?>"placeholder="Nama">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?php echo $dataSasaran->tgl_lahir;?>">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="umur">Umur</label>
                                                    <input type="text" class="form-control" name="umur" id="umur" value="<?php echo $dataSasaran->umur;?>">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="jenkel">Jenis Kelamin</label>
                                                    <select class="form-control select2" name="jenkel" id="jenkel" required>
                                                        <option <?php if($dataSasaran->jenkel == "Laki-Laki"){echo 'selected';}?>>Laki-Laki</option>
                                                        <option <?php if($dataSasaran->jenkel == "Perempuan"){echo 'selected';}?>>Perempuan</option>
                                                    </select>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="status_menikah">Status Menikah</label>
                                                    <select class="form-control select2" name="status_menikah" id="status_menikah" required>
                                                        <option <?php if($dataSasaran->status_menikah == "Belum Menikah"){echo 'selected';}?>>Belum Menikah</option>
                                                        <option <?php if($dataSasaran->status_menikah == "Menikah"){echo 'selected';}?>>Menikah</option>
                                                    </select>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="hp">No HP (WA)</label>
                                                    <input type="text" class="form-control" name="hp" id="hp" value="<?php echo $dataSasaran->hp;?>" placeholder="HP">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="pekerjaan">Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?php echo $dataSasaran->pekerjaan;?>" placeholder="pekerjaan">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="prov_domisili">Provinsi Domisili</label>
                                                    <input type="text" class="form-control" name="prov_domisili" id="prov_domisili" value="<?php echo $dataSasaran->prov_domisili;?>" placeholder="Prov Domisili">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="kota_domisili">Kota Domisili</label>
                                                    <input type="text" class="form-control" name="kota_domisili" id="kota_domisili" value="<?php echo $dataSasaran->kota_domisili;?>" placeholder="Kota Doomisili">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="kec_domisili">Kecamatan Domisili</label>
                                                    <input type="text" class="form-control" name="kec_domisili" id="kec_domisili" value="<?php echo $dataSasaran->kec_domisili;?>" placeholder="Kec Domisili">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="kel_domisili">Kelurahan Domisili</label>
                                                    <input type="text" class="form-control" name="kel_domisili" id="kel_domisili" value="<?php echo $dataSasaran->kel_domisili;?>" placeholder="Kel domisili">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="rt_domisili">RT Domisili</label>
                                                    <input type="text" class="form-control" name="rt_domisili" id="rt_domisili" value="<?php echo $dataSasaran->rt_domisili;?>" placeholder="RT Domisili">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="rw_domisili">RW Domisili</label>
                                                    <input type="text" class="form-control" name="rw_domisili" id="rw_domisili" value="<?php echo $dataSasaran->rw_domisili;?>" placeholder="RW Domisili">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="alamat_domisili">Alamat Domisili</label>
                                                    <input type="text" class="form-control" name="alamat_domisili" id="alamat_domisili" value="<?php echo $dataSasaran->alamat_domisili;?>" placeholder="Alamat Domisili">
                                                </fieldset>
                                                <button type="submit" class="form-group btn mb-1 btn-primary btn-icon btn-lg btn-block">Simpan</button>
                                            </form>
                                        </div>
                                    <?php } }  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- account setting page end -->
    </div>