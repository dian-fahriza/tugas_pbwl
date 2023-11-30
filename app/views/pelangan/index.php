<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/Pelanggan/input" class="btn">Input Pelanggan</a>

<table>
    <tr>
        <th>Id Pelanggan</th>
        <th>Id Golongan</th>
        <th>No Pelanggan</th>
        <th>Nama Pelanggan</th>
        <th>Alamat Pelanggan</th>
        <th>No HP Pelanggan</th>
        <th>KTP Pelanggan</th>
        <th>Seri Pelanggan</th>
        <th>Meteran Pelanggan</th>
        <th>Status Pelanggan</th>
        <th>Id Users Pelanggan</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    <?php
    $no = 1;
    foreach ($data['rows'] as $row) {
    ?>
        <tr>
            <td><?php echo $row['pel_id']; ?></td>
            <td><?php echo $row['pel_id_gol']; ?></td>
            <td><?php echo $row['pel_no']; ?></td>
            <td><?php echo $row['pel_nama']; ?></td>
            <td><?php echo $row['pel_alamat']; ?></td>
            <td><?php echo $row['pel_hp']; ?></td>
            <td><?php echo $row['pel_ktp']; ?></td>
            <td><?php echo $row['pel_seri']; ?></td>
            <td><?php echo $row['pel_meteran']; ?></td>
            <td><?php echo $row['pel_aktif']; ?></td>
            <td><?php echo isset($row['pel_id_users']) ? $row['pel_id_users'] : ''; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td><?php echo $row['updated_at']; ?></td>
            <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a></td>
            <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn" onclick="return confirm('Apakah anda yakin?')">Delete</a></td>
        </tr>
    <?php
        $no++;
    } ?>

</table>
