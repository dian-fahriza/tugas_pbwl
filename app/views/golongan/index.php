<h2>Golongan</h2>

<a href="<?php echo URL; ?>/Golongan/input" class="btn">Input Golongan</a>

<table id="dtb">
    <thead>
        <tr>
            <th>ID Golongan</th>
            <th>Kode Golongan</th>
            <th>Nama Golongan</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($data['rows'] as $row) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['gol_kode']; ?></td>
                <td><?php echo $row['gol_nama']; ?></td>
                <td><a href="<?php echo URL; ?>/Golongan/edit/<?php echo $row['gol_id']; ?>" class="btn">Edit</a></td>
            </tr>
        <?php
            $no++;
        } ?>
    </tbody>
</table>
