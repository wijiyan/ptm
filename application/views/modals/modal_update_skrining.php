<div class="form-msg"></div>
<h3 style="display:block; text-align:center;">Tambah Skrining</h3>
<!-- <form id="form-tambah-skrining" method="POST"> -->
    <form method="POST" action="<?php echo base_url();?>Skrining/Simpan">
        <?php $no = 1;?>
        <fieldset class="form-group">
            <label for="tgl_pemeriksaan"><?php echo $no++;?>. Tanggal Pemeriksaan</label>
            <input type="hidden" name="nik" value="<?php echo $dataSkrining->nik;?>">
            <input type="hidden" name="id_pemeriksaan" value="<?php echo $dataSkrining->id_pemeriksaan;?>">
            <input type="date" class="form-control" name="tgl_pemeriksaan" id="tgl_pemeriksaan" value="<?php echo date('Y-m-d');?>" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="tpt_pemeriksaan"><?php echo $no++;?>. Tempat Pemeriksaan</label>
            <input type="text" class="form-control" name="tpt_pemeriksaan" id="tpt_pemeriksaan" value="<?php echo $dataSkrining->tpt_pemeriksaan;?>" placeholder="Tempat Pemeriksaan">
        </fieldset>

        <table>
            <p><?php echo $no++;?>. Riwayat Penyakit Keluarga (√)</p>
            <tbody>
                <tr>
                    <td class="col-md-4">
                        <fieldset>
                            <label>
                                <input type="hidden" name="hipertensi_k" value="0">
                                <input type="checkbox" name="hipertensi_k" <?php if($dataSkrining->hipertensi_k == '1'){echo 'checked';}?> value="1">
                                Hipertensi
                            </label>
                        </fieldset>
                    </td>
                    <td class="col-md-3">
                        <fieldset>
                            <label>
                                <input type="hidden" name="dm_k" value="0">
                                <input type="checkbox" name="dm_k" <?php if($dataSkrining->dm_k == '1'){echo 'checked';}?> value="1">
                                DM
                            </label>
                        </fieldset>

                    </td>
                    <td class="col-md-3">
                        <fieldset>
                            <label>
                                <input type="hidden" name="jantung_k" value="0">
                                <input type="checkbox" name="jantung_k" <?php if($dataSkrining->jantung_k == '1'){echo 'checked';}?> value="1">
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
                                <input type="checkbox" name="benjolan_payudara_k" <?php if($dataSkrining->benjolan_payudara_k == '1'){echo 'checked';}?> value="1">
                                Benjolan di Payudara
                            </label>
                        </fieldset>

                    </td>
                    <td  class="col-md-2">
                        <fieldset>
                            <label>
                                <input type="hidden" name="stroke_k" value="0">
                                <input type="checkbox" name="stroke_k" <?php if($dataSkrining->stroke_k == '1'){echo 'checked';}?> value="1">
                                Stroke
                            </label>
                        </fieldset>
                    </td>
                    <td  class="col-md-2">
                        <fieldset>
                            <label>
                                <input type="hidden" name="asma_k" value="0">
                                <input type="checkbox" name="asma_k" <?php if($dataSkrining->asma_k == '1'){echo 'checked';}?> value="1">
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
                                <input type="checkbox" name="hipertensi_s" <?php if($dataSkrining->hipertensi_s == '1'){echo 'checked';}?> value="1">
                                Hipertensi
                            </label>
                        </fieldset>
                    </td>
                    <td class="col-md-3">
                        <fieldset>
                            <label>
                                <input type="hidden" name="dm_s" value="0">
                                <input type="checkbox" name="dm_s" <?php if($dataSkrining->dm_s == '1'){echo 'checked';}?> value="1">
                                DM
                            </label>
                        </fieldset>

                    </td>
                    <td class="col-md-3">
                        <fieldset>
                            <label>
                                <input type="hidden" name="jantung_s" value="0">
                                <input type="checkbox" name="jantung_s" <?php if($dataSkrining->jantung_s == '1'){echo 'checked';}?> value="1">
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
                                <input type="checkbox" name="benjolan_payudara_s" <?php if($dataSkrining->benjolan_payudara_s == '1'){echo 'checked';}?> value="1">
                                Benjolan di Payudara
                            </label>
                        </fieldset>

                    </td>
                    <td  class="col-md-2">
                        <fieldset>
                            <label>
                                <input type="hidden" name="stroke_s" value="0">
                                <input type="checkbox" name="stroke_s" <?php if($dataSkrining->stroke_s == '1'){echo 'checked';}?> value="1">
                                Sktroke
                            </label>
                        </fieldset>
                    </td>
                    <td  class="col-md-2">
                        <fieldset>
                            <label>
                                <input type="hidden" name="asma_s" value="0">
                                <input type="checkbox" name="asma_s" <?php if($dataSkrining->asma_s == '1'){echo 'checked';}?> value="1">
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
                                <input type="checkbox" name="kolesterol" <?php if($dataSkrining->kolesterol == '1'){echo 'checked';}?> value="1">
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
                            <input type="radio" name="merokok" <?php if($dataSkrining->merokok == '1'){echo 'checked';}?> value="1" required>
                            <span class="">YA</span>
                        </fieldset>
                    </td>
                    <td class="col-md-4">
                        <fieldset>
                            <input type="radio" name="merokok" <?php if($dataSkrining->merokok == '0'){echo 'checked';}?> value="0">
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
                            <input type="radio" name="krg_aktf_fisik" <?php if($dataSkrining->krg_aktf_fisik == '1'){echo 'checked';}?> value="1" required>
                            <span class="">YA</span>
                        </fieldset>
                    </td>
                    <td class="col-md-4">
                        <fieldset>
                            <input type="radio" name="krg_aktf_fisik" <?php if($dataSkrining->krg_aktf_fisik == '0'){echo 'checked';}?> value="0">
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
                            <input type="radio" name="krg_sayur" <?php if($dataSkrining->krg_sayur == '1'){echo 'checked';}?> value="1" required>
                            <span class="">YA</span>
                        </fieldset>
                    </td>
                    <td class="col-md-4">
                        <fieldset>
                            <input type="radio" name="krg_sayur" <?php if($dataSkrining->krg_sayur == '0'){echo 'checked';}?> value="0">
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
                            <input type="radio" name="alkohol" <?php if($dataSkrining->alkohol == '1'){echo 'checked';}?> value="1" required>
                            <span class="">YA</span>
                        </fieldset>
                    </td>
                    <td class="col-md-4">
                        <fieldset>
                            <input type="radio" name="alkohol" <?php if($dataSkrining->alkohol == '0'){echo 'checked';}?> value="0">
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
                            <input type="radio" name="gula_berlebih" <?php if($dataSkrining->gula_berlebih == '1'){echo 'checked';}?> value="1" required>
                            <span class="">YA</span>
                        </fieldset>
                    </td>
                    <td class="col-md-4">
                        <fieldset>
                            <input type="radio" name="gula_berlebih" <?php if($dataSkrining->gula_berlebih == '0'){echo 'checked';}?> value="0">
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
                            <input type="radio" name="garam_berlebih" <?php if($dataSkrining->garam_berlebih == '1'){echo 'checked';}?> value="1" required>
                            <span class="">YA</span>
                        </fieldset>
                    </td>
                    <td class="col-md-4">
                        <fieldset>
                            <input type="radio" name="garam_berlebih" <?php if($dataSkrining->garam_berlebih == '0'){echo 'checked';}?> value="0">
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
                            <input type="radio" name="lemak_berlebih" <?php if($dataSkrining->lemak_berlebih == '1'){echo 'checked';}?> value="1" required>
                            YA
                        </fieldset>
                    </td>
                    <td class="col-md-4">
                        <fieldset>
                            <input type="radio" name="lemak_berlebih" <?php if($dataSkrining->lemak_berlebih == '0'){echo 'checked';}?> value="0">
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
                    <input type="text" class="form-control" name="sistol" id="sistol" value="<?php echo $dataSkrining->sistol;?>" placeholder="Sistol">
                </td>
                <td class="col-md-1">
                    /
                </td>
                <td class="col-md-3">
                    <input type="text" class="form-control" name="diastol" id="diastol" value="<?php echo $dataSkrining->diastol;?>" placeholder="Diastol">
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
                    <input type="decimal" class="form-control" name="bb" id="bb" value="<?php echo $dataSkrining->bb;?>" placeholder="BB">
                </td>
                <td style="text-align: left;" class="col-md-1">
                    (Kg)
                </td>
                <td class="col-md-1">
                    TB
                </td>
                <td class="col-md-3">
                    <input type="text" class="form-control" name="tb" id="tb" value="<?php echo $dataSkrining->tb;?>" placeholder="TB">
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
        <label for="tpt_pemeriksaan"><?php echo $no++;?>. Lingkar Perut</label>
        <input type="text" class="form-control" name="lingkar_perut" id="lingkar_perut" placeholder="Lingkar Perut" value="<?php echo $dataSkrining->lingkar_perut;?>" required>
    </fieldset>
    <fieldset class="form-group">
        <label for="tpt_pemeriksaan"><?php echo $no++;?>. Pemeriksaan Gula (GDS)</label>
        <input type="text" class="form-control" name="gds" id="gds" placeholder="Gula Darah Sewaktu" value="<?php echo $dataSkrining->gds;?>" required>
    </fieldset>
    <table>
        <tbody>
            <p><?php echo $no++;?>. Benjolan Payudara?</p>
            <tr>
                <td class="col-md-4">
                    <fieldset>
                        <input type="radio" name="benjolan_payudara" value="1" <?php if($dataSkrining->benjolan_payudara == '1'){echo 'checked';}?> required>
                        Ditemukan
                    </fieldset>
                </td>
                <td class="col-md-4">
                    <fieldset>
                        <input type="radio" name="benjolan_payudara" value="1" <?php if($dataSkrining->benjolan_payudara == '0'){echo 'checked';}?> required>
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
                            <input type="radio" name="g_mt_kanan" value="1" <?php if($dataSkrining->g_mt_kanan == '1'){echo 'checked';}?> required>
                            Ya
                        </label>
                    </fieldset>

                </td>
                <td class="col-md-3">
                    <fieldset>
                        <label>
                            <input type="radio" name="g_mt_kanan" value="0" <?php if($dataSkrining->g_mt_kanan == '0'){echo 'checked';}?> required>
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
                            <input type="radio" name="g_mt_kiri" value="1" <?php if($dataSkrining->g_mt_kiri == '1'){echo 'checked';}?> required>
                            YA
                        </label>
                    </fieldset>
                </td>
                <td  class="col-md-2">
                    <fieldset>
                        <label>
                            <input type="radio" name="g_mt_kiri" value="0" <?php if($dataSkrining->g_mt_kiri == '0'){echo 'checked';}?> required>
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
                            <input type="radio" name="g_telinga_kanan" value="1" <?php if($dataSkrining->g_telinga_kanan == '1'){echo 'checked';}?> required>
                            Ya
                        </label>
                    </fieldset>

                </td>
                <td class="col-md-3">
                    <fieldset>
                        <label>
                            <input type="radio" name="g_telinga_kanan" value="0" <?php if($dataSkrining->g_telinga_kanan == '0'){echo 'checked';}?> required>
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
                            <input type="radio" name="g_telinga_kiri" value="1" <?php if($dataSkrining->g_telinga_kiri == '1'){echo 'checked';}?> required>
                            YA
                        </label>
                    </fieldset>
                </td>
                <td  class="col-md-2">
                    <fieldset>
                        <label>
                            <input type="radio" name="g_telinga_kiri" value="0" <?php if($dataSkrining->g_telinga_kiri == '0'){echo 'checked';}?> required>
                            Tidak
                        </label>
                    </fieldset>
                </td>
            </tr>
        </tbody>
    </table>
    <br>

    <fieldset class="form-group">
        <?php if($this->userdata->level == 'admin'){?>
            <button type="submit" class="form-group btn mb-1 btn-primary btn-icon btn-lg btn-block">Simpan</button>
        <?php } ?>
    </fieldset>
</form>
