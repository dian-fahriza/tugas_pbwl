<h2>Edit User</h2>

<form action="<?php echo URL; ?>/Users/update" method="post">
    <?php if (!empty($data['row'])) : ?>
        <input type="hidden" name="id" value="<?php echo $data['row']['user_id']; ?>">
        <table>
            <tr>
                <td>EMAIL</td>
                <td><input type="email" name="user_email" value="<?php echo $data['row']['user_email']; ?>" required></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="user_password"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="user_name" value="<?php echo $data['row']['user_name']; ?>" required></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="user_alamat" value="<?php echo $data['row']['user_alamat']; ?>" required></td>
            </tr>
            <tr>
                <td>NO.HP</td>
                <td><input type="text" name="user_hp" value="<?php echo $data['row']['user_hp']; ?>" required></td>
            </tr>
            <tr>
                <td>POS</td>
                <td><input type="text" name="user_pos" value="<?php echo $data['row']['user_pos']; ?>" required></td>
            </tr>
            <tr>
                <td>ROLE</td>
                <td><input type="text" name="user_role" value="<?php echo $data['row']['user_role']; ?>" required></td>
            </tr>
            <tr>
                <td>STATUS</td>
                <td><input type="text" name="user_aktif" value="<?php echo $data['row']['user_aktif']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_update" value="UPDATE"></td>
            </tr>
        </table>
    <?php else : ?>
        <p>Data user tidak ditemukan.</p>
    <?php endif; ?>
</form>
