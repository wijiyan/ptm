<div class="form-msg"></div>
<h3 style="display:block; text-align:center;">Tambah Skrining</h3>
<?php if($this->userdata->level == 'admin'){ ?>
    <form id="form-tambah-skrining" method="POST">
        <!-- <form method="POST" action="<?php echo base_url();?>Skrining/Simpan"> -->
        <?php } else if($this->userdata->level == 'sasaran'){ ?>
            <form id="form-tambah-skrining" method="POST">
                <!-- <form method="POST" action="<?php echo base_url();?>Skrining/SimpandariSasaran"> -->
                <?php } if($this->userdata->level == 'admin'){?>
                    <fieldset class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" name="nik" id="nik" onkeypress="validateNumber(event)"  minlength="16" maxlength="16" placeholder="NIK KTP" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="tpt_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tpt_lahir" id="tpt_lahir" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="umur">Umur</label>
                        <input type="hidden" name="umur" id="umur">
                        <input type="text" class="form-control" name="umur2" id="umur2" disabled>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="jenkel">Jenis Kelamin</label>
                        <select class="form-control select2" name="jenkel" id="jenkel" required>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="status_menikah">Status Menikah</label>
                        <select class="form-control select2" name="status_menikah" id="status_menikah" required>
                            <option>Belum Menikah</option>
                            <option>Menikah</option>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="hp">No HP (WA)</label>
                        <input type="text" class="form-control" name="hp" id="hp"placeholder="HP" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="PEKERJAAN">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="prop">Provinsi Domisili</label>
                        <select class="form-control select2" name="prov_domisili" id="prop_domisili" onchange="ajaxkota(this.value)">
                            <option>--Pilih Provinsi--</option>
                            <?php 
                            foreach($provinsi as $data){
                                echo '<option value="'.$data->id_prov.'">'.$data->nama.'</option>';
                            }
                            ?>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="kota">Kota Domisili</label>
                        <select class="form-control select2" name="kota_domisili" id="kota_domisili" placeholder="Pilih Kota" onchange="ajaxkec(this.value)" required>
                            <option>Pilih Kota/Kab</option>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="kec">Kecamatan Domisili</label>
                        <select class="form-control select2" name="kec_domisili" id="kec_domisili" onchange="ajaxkel(this.value)" required>
                            <option>Pilih Kecamatan</option>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="kel">Kelurahan Domisili</label>
                        <select class="form-control select2" name="kel_domisili" id="kel_domisili" required>
                            <option>Pilih Kelurahan</option>
                        </select>
                    </fieldset>
                    <fieldset class="form-group position-relative">
                        <label for="rt">RT Domisili</label>
                        <input type="text" class="form-control" name="rt_domisili" id="rt_domisili" onkeypress="validateNumber(event)" placeholder="RT" required>
                    </fieldset>
                    <fieldset class="form-group position-relative">
                        <label for="rw">RW Domisili</label>
                        <input type="text" class="form-control" name="rw_domisili" id="rw_domisili" onkeypress="validateNumber(event)" placeholder="RW" required>
                    </fieldset>
                    <fieldset class="form-group position-relative">
                        <label for="alamat">Alamat Domisili</label>
                        <input type="text" class="form-control" name="alamat_domisili" id="alamat_domisili" placeholder="Alamat" required>
                    </fieldset>
                <?php } ?>
                <!-- SKRINING -->
                <?php $no = 1;?>
                <fieldset class="form-group">
                    <label for="tgl_pemeriksaan"><?php echo $no++;?>. Tanggal Pemeriksaan</label>
                    <input type="date" class="form-control" name="tgl_pemeriksaan" id="tgl_pemeriksaan" value="<?php echo date('Y-m-d');?>" required>
                </fieldset>
                <fieldset class="form-group">
                    <label for="tpt_pemeriksaan"><?php echo $no++;?>. Tempat Pemeriksaan</label>
                    <input type="text" class="form-control" name="tpt_pemeriksaan" id="tpt_pemeriksaan" placeholder="Tempat Pemeriksaan">
                </fieldset>

                <table>
                    <p><?php echo $no++;?>. Riwayat Penyakit Keluarga (√)</p>
                    <tbody>
                        <tr>
                            <td class="col-md-4">
                                <fieldset>
                                    <label>
                                        <input type="hidden" name="hipertensi_k" value="0">
                                        <input type="checkbox" name="hipertensi_k" value="1">
                                        Hipertensi
                                    </label>
                                </fieldset>
                            </td>
                            <td class="col-md-3">
                                <fieldset>
                                    <label>
                                        <input type="hidden" name="dm_k" value="0">
                                        <input type="checkbox" name="dm_k" value="1">
                                        DM
                                    </label>
                                </fieldset>

                            </td>
                            <td class="col-md-3">
                                <fieldset>
                                    <label>
                                        <input type="hidden" name="jantung_k" value="0">
                                        <input type="checkbox" name="jantung_k" value="1">
                                        Jantung
                                    </label>
                                </fieldset>

                            </td>
                        </tr>
                        <tr>
                            <td  class="col-md-2">
                                <fieldset>
                                    <label>
                                        <input type="hidden" name="benjolan_payudara_k" value="0">
                                        <input type="checkbox" name="benjolan_payudara_k" value="1">
                                        Benjolan di Payudara
                                    </label>
                                </fieldset>

                            </td>
                            <td  class="col-md-2">
                                <fieldset>
                                    <label>
                                        <input type="hidden" name="stroke_k" value="0">
                                        <input type="checkbox" name="stroke_k" value="1">
                                        Stroke
                                    </label>
                                </fieldset>
                            </td>
                            <td  class="col-md-2">
                                <fieldset>
                                    <label>
                                        <input type="hidden" name="asma_k" value="0">
                                        <input type="checkbox" name="asma_k" value="1">
                                        Asma
                                    </label>
                                </fieldset>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <p><?php echo $no++;?>. Riwayat Penyakit Sendiri (√)</p>
                    <tbody>
                        <tr>
                            <td class="col-md-4">
                                <fieldset>
                                    <label>
                                        <input type="hidden" name="hipertensi_s" value="0">
                                        <input type="checkbox" name="hipertensi_s" value="1">
                                        Hipertensi
                                    </label>
                                </fieldset>
                            </td>
                            <td class="col-md-3">
                                <fieldset>
                                    <label>
                                        <input type="hidden" name="dm_s" value="0">
                                        <input type="checkbox" name="dm_s" value="1">
                                        DM
                                    </label>
                                </fieldset>

                            </td>
                            <td class="col-md-3">
                                <fieldset>
                                    <label>
                                        <input type="hidden" name="jantung_s" value="0">
                                        <input type="checkbox" name="jantung_s" value="1">
                                        Jantung
                                    </label>
                                </fieldset>

                            </td>
                        </tr>
                        <tr>
                            <td  class="col-md-2">
                                <fieldset>
                                    <label>
                                        <input type="hidden" name="benjolan_payudara_s" value="0">
                                        <input type="checkbox" name="benjolan_payudara_s" value="1">
                                        Benjolan di Payudara
                                    </label>
                                </fieldset>

                            </td>
                            <td  class="col-md-2">
                                <fieldset>
                                    <label>
                                        <input type="hidden" name="stroke_s" value="0">
                                        <input type="checkbox" name="stroke_s" value="1">
                                        Sktroke
                                    </label>
                                </fieldset>
                            </td>
                            <td  class="col-md-2">
                                <fieldset>
                                    <label>
                                        <input type="hidden" name="asma_s" value="0">
                                        <input type="checkbox" name="asma_s" value="1">
                                        Asma
                                    </label>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td  class="col-md-2">
                                <fieldset>
                                    <label>
                                        <input type="hidden" name="kolesterol" value="0">
                                        <input type="checkbox" name="kolesterol" value="1">
                                        Kolesterol
                                    </label>
                                </fieldset>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <tbody>
                        <p><?php echo $no++;?>. Apakah Ada Merokok?</p>
                        <tr>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="merokok" value="1" required>
                                    <span class="">YA</span>
                                </fieldset>
                            </td>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="merokok" value="0">
                                    <span class="">TIDAK</span>
                                </fieldset>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <tbody>
                        <p><?php echo $no++;?>. Apakah Ada Kurang Aktivitas Fisik?</p>
                        <tr>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="krg_aktf_fisik" value="1" required>
                                    <span class="">YA</span>
                                </fieldset>
                            </td>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="krg_aktf_fisik" value="0">
                                    <span class="">TIDAK</span>
                                </fieldset>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <tbody>
                        <p><?php echo $no++;?>. Apakah Ada Kurang Sayur dan Buah?</p>
                        <tr>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="krg_sayur" value="1" required>
                                    <span class="">YA</span>
                                </fieldset>
                            </td>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="krg_sayur" value="0">
                                    <span class="">TIDAK</span>
                                </fieldset>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <tbody>
                        <p><?php echo $no++;?>. Apakah Ada Mengkonsumsi Alkohol?</p>
                        <tr>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="alkohol" value="1" required>
                                    <span class="">YA</span>
                                </fieldset>
                            </td>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="alkohol" value="0">
                                    <span class="">TIDAK</span>
                                </fieldset>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <tbody>
                        <p><?php echo $no++;?>. Apakah Ada Mengkonsumsi Gula Berlebih?</p>
                        <tr>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="gula_berlebih" value="1" required>
                                    <span class="">YA</span>
                                </fieldset>
                            </td>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="gula_berlebih" value="0">
                                    <span class="">TIDAK</span>
                                </fieldset>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <tbody>
                        <p><?php echo $no++;?>. Apakah Ada Mengkonsumsi Garam Berlebih?</p>
                        <tr>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="garam_berlebih" value="1" required>
                                    <span class="">YA</span>
                                </fieldset>
                            </td>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="garam_berlebih" value="0">
                                    <span class="">TIDAK</span>
                                </fieldset>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <tbody>
                        <p><?php echo $no++;?>. Apakah Ada Mengkonsumsi Lemak Berlebih?</p>
                        <tr>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="lemak_berlebih" value="1" required>
                                    YA
                                </fieldset>
                            </td>
                            <td class="col-md-4">
                                <fieldset>
                                    <input type="radio" name="lemak_berlebih" value="0">
                                    TIDAK
                                </div>
                            </fieldset>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table>
                <p><?php echo $no++;?>. Tekanan Darah?</p>
                <tbody>
                    <tr>
                        <td class="col-md-3">
                            <input type="text" class="form-control" name="sistol" id="sistol" onkeypress="validateNumber(event)" placeholder="Sistol">
                        </td>
                        <td class="col-md-1">
                            /
                        </td>
                        <td class="col-md-3">
                            <input type="text" class="form-control" name="diastol" id="diastol" onkeypress="validateNumber(event)" placeholder="Diastol">
                        </td>
                        <td class="col-md-4">
                        </td>

                    </tr>
                </tbody>
            </table>
            <br>
            <table>
                <p><?php echo $no++;?>. Berat Badan/Tinggi Badan?</p>
                <tbody>
                    <tr>
                        <td class="col-md-1">
                            BB
                        </td>
                        <td class="col-md-3">
                            <input type="decimal" class="form-control" onkeypress="validateNumber(event)" name="bb" id="bb" placeholder="BB">
                        </td>
                        <td style="text-align: left;" class="col-md-1">
                            (Kg)
                        </td>
                        <td class="col-md-1">
                            TB
                        </td>
                        <td class="col-md-3">
                            <input type="text" class="form-control" onkeypress="validateNumber(event)" name="tb" id="tb" placeholder="TB">
                        </td>
                        <td style="text-align: left;"  class="col-md-1">
                            (Cm)
                        </td>
                        <td class="col-md-4">
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <fieldset class="form-group">
                <label for="tpt_pemeriksaan"><?php echo $no++;?>. Lingkar Perut (Cm)</label>
                <input type="text" class="form-control" name="lingkar_perut" id="lingkar_perut" onkeypress="validateNumber(event)" placeholder="Lingkar Perut" required>
            </fieldset>
            <fieldset class="form-group">
                <label for="tpt_pemeriksaan"><?php echo $no++;?>. Pemeriksaan Gula (GDS)</label>
                <input type="text" class="form-control" name="gds" id="gds" placeholder="Gula Darah Sewaktu" onkeypress="validateNumber(event)" required>
            </fieldset>
            <table>
                <tbody>
                    <p><?php echo $no++;?>. Benjolan Payudara?</p>
                    <tr>
                        <td class="col-md-4">
                            <fieldset>
                                <input type="radio" name="benjolan_payudara" value="1" required>
                                Ditemukan
                            </fieldset>
                        </td>
                        <td class="col-md-4">
                            <fieldset>
                                <input type="radio" name="benjolan_payudara" value="1" required>
                                Tidak Ditemukan
                            </fieldset>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table>
                <p><?php echo $no++;?>. Gangguan Penglihatan (Katarak / Tajam Penglihatan)</p>
                <tbody>
                    <tr>
                        <td class="col-md-4">
                            <fieldset>
                                <label>
                                    Mata Kanan
                                </label>
                            </fieldset>
                        </td>
                        <td class="col-md-3">
                            <fieldset>
                                <label>
                                    <input type="radio" name="g_mt_kanan" value="1" required>
                                    Ya
                                </label>
                            </fieldset>

                        </td>
                        <td class="col-md-3">
                            <fieldset>
                                <label>
                                    <input type="radio" name="g_mt_kanan" value="0" required>
                                    Tidak
                                </label>
                            </fieldset>

                        </td>
                    </tr>
                    <tr>
                        <td  class="col-md-2">
                            <fieldset>
                                <label>
                                    Mata Kiri
                                </label>
                            </fieldset>

                        </td>
                        <td  class="col-md-2">
                            <fieldset>
                                <label>
                                    <input type="radio" name="g_mt_kiri" value="1" required>
                                    YA
                                </label>
                            </fieldset>
                        </td>
                        <td  class="col-md-2">
                            <fieldset>
                                <label>
                                    <input type="radio" name="g_mt_kiri" value="0" required>
                                    Tidak
                                </label>
                            </fieldset>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table>
                <p><?php echo $no++;?>.  Gangguan Pendengaran (Tuli/Congek)</p>
                <tbody>
                    <tr>
                        <td class="col-md-4">
                            <fieldset>
                                <label>
                                    Telinga Kanan
                                </label>
                            </fieldset>
                        </td>
                        <td class="col-md-3">
                            <fieldset>
                                <label>
                                    <input type="radio" name="g_telinga_kanan" value="1" required>
                                    Ya
                                </label>
                            </fieldset>

                        </td>
                        <td class="col-md-3">
                            <fieldset>
                                <label>
                                    <input type="radio" name="g_telinga_kanan" value="0" required>
                                    Tidak
                                </label>
                            </fieldset>

                        </td>
                    </tr>
                    <tr>
                        <td  class="col-md-2">
                            <fieldset>
                                <label>
                                    Telinga Kiri
                                </label>
                            </fieldset>

                        </td>
                        <td  class="col-md-2">
                            <fieldset>
                                <label>
                                    <input type="radio" name="g_telinga_kiri" value="1" required>
                                    YA
                                </label>
                            </fieldset>
                        </td>
                        <td  class="col-md-2">
                            <fieldset>
                                <label>
                                    <input type="radio" name="g_telinga_kiri" value="0" required>
                                    Tidak
                                </label>
                            </fieldset>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>

            <fieldset class="form-group">
                <button type="submit" class="form-group btn mb-1 btn-primary btn-icon btn-lg btn-block">Simpan</button>
            </fieldset>
        </form>
