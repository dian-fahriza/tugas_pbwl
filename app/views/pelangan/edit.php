<h2>Edit Pelanggan</h2>

<form action="<?php echo URL; ?>/Pelanggan/update" method="post">



    
    <table>
    
        <tr>
            <td>Id Golongan</td>
            <td><textarea name="pel_id_gol" ></textarea></td>
        </tr>
        <tr>
            <td>No Pelanggan</td>
            <td><textarea name="pel_no" ></textarea></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><textarea name="pel_nama"></textarea></td>
        </tr>
        <tr><tr>
            <td>Alamat Pelanggan</td>
            <td><textarea name="pel_alamat"></textarea></td>
        </tr>
        <tr><tr>
            <td>No HP Pelanggan</td>
            <td><textarea name="pel_hp"></textarea></td>
            </tr>
        <tr><tr>
            <td>Ktp Pelanggan</td>
            <td><textarea name="pel_ktp"></textarea></td>
        </tr>
        <tr> </tr>
        <tr><tr>
            <td>Seri Pelanggan</td>
            <td><textarea name="pel_seri"></textarea></td>
        </tr>
        <tr> </tr>
        <tr><tr>
            <td>Meteran Pelanggan</td>
            <td><textarea name="pel_meteran"></textarea></td>
            </tr><tr> </tr>
            </tr>
        <tr><tr>
            <td>Status Pelanggan</td>
            
            <td> <select name="pel_aktif">
                    <option value="aktif">Aktif</option>
                    <option value="nonaktif">Nonaktif</option>
                    <!-- Add more options as needed -->
                </select></td>
            </tr>
        <tr> </tr>
        <tr><tr>
            <td>Id users Pelanggan</td>
            <td><textarea name="pel_id_user"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>