<h2>Input Golongan</h2>

<form action="<?php echo URL; ?>/golongan/save" method="post">
    <table>
        <tr>
        <tr>
            <td>Id Golongan</td>
            <td><input type="text" name="gol_id"></td>
        </tr>
        <tr>
            <td>kode Golongan</td>
            <td><textarea name="gol_kode" ></textarea></td>
        </tr>
        <tr>
            <td>Nama Golongan</td>
            <td><textarea name="gol_nama"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>