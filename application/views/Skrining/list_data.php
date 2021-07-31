<?php
$no = 1;
foreach ($dataSkrining as $row) {
    ?>
    <tr>
        <?php if($this->userdata->level == 'admin'){?>
            <td style="width: 10px"><?php echo $no++; ?></td>
            <td><?php echo $row->nik;?></td>
            <td><?php echo $row->nama;?></td>
            <td><?php echo $row->tpt_lahir.', '.$this->M_Setting->tgl_indo($row->tgl_lahir, false);?></td>
            <td><?php echo $row->hp;?></td>
            <?php } else if($this->userdata->level == 'sasaran'){?> ?>
            <td style="width: 10px"><?php echo $no++; ?></td>
            <td><?php echo $this->M_Setting->tgl_indo($row->tgl_pemeriksaan);?></td>
            <td><?php echo $row->tpt_pemeriksaan;?></td>
            <td><?php echo $row->sistol.'/'.$row->diastol;?></td>
            <td><?php echo $row->bb.' Kg';?></td>
            <td><?php echo $row->tb.' Cm';?></td>
            <td><?php echo $row->gds;?></td>
        <?php } ?>
        <td class="text-center" style="width:150px;">
            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">    
                <button class="btn btn-sm btn-warning update-dataSkrining" data-id="<?php echo $row->id_pemeriksaan; ?>"><i class="feather icon-info"></i> Lihat Hasil</button>
                <?php if($this->userdata->level == 'admin'){?>
                    <button class="btn btn-sm btn-danger konfirmasiHapus-skrining" data-id="<?php echo $row->id_pemeriksaan; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="feather icon-x"></i> Hapus</button>
                <?php } ?>
            </div>
        </td>
    </tr>
    <?php
}