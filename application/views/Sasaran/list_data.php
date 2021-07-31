<?php
$no = 1;
foreach ($dataSasaran as $row) {
    ?>
    <tr>
        <td style="width: 10px"><?php echo $no++; ?></td>
        <td><?php echo $row->nik; ?></td>
        <td><?php echo $row->nama; ?></td>
        <td><?php echo $this->M_Setting->tgl_indo($row->tgl_lahir, false); ?></td>
        <td><?php echo $row->jenkel; ?></td>
        <td><?php echo $row->hp; ?></td>
        <td class="text-center" style="width:150px;">
            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">    
                <button class="btn btn-sm btn-warning update-dataSasaran" data-id="<?php echo $row->id; ?>"><i class="feather icon-edit-2"></i> Edit</button>
                <button class="btn btn-sm btn-danger konfirmasiHapus-sasaran" data-id="<?php echo $row->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="feather icon-x"></i> Delete</button>
            </div>
        </td>
    </tr>
    <?php
}