
<h2>Edit Golongan</h2>

<form action="<?php echo URL; ?>/Golongan/update" method="post">
    <input type="hidden" name="gol_id" value="<?php echo isset($data['row']['gol_id']) ? $data['row']['gol_id'] : ''; ?>">
    <table>
        <tr>
            <td>Kode Golongan</td>
            <td><textarea name="gol_kode"><?php echo isset($data['row']['gol_kode']) ? $data['row']['gol_kode'] : ''; ?></textarea></td>
        </tr>
        <tr>
            <td>Nama Golongan</td>
            <td><textarea name="gol_nama"><?php echo isset($data['row']['gol_nama']) ? $data['row']['gol_nama'] : ''; ?></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="UPDATE"></td>
        </tr>
    </table>
</form>

