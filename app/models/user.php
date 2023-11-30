<?php

namespace App\Models;

use App\Core\Model;

class user extends Model
{

    public function show()
    {
        $query = "SELECT * FROM tb_users";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        try {
            $user_id = $_POST['user_id'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $user_name = $_POST['user_name'];
            $user_alamat = $_POST['user_alamat'];
            $user_hp = $_POST['user_hp'];
            $user_pos = $_POST['user_pos'];
            $user_role = $_POST['user_role'];
            $user_aktif = $_POST['user_aktif'];


            $sql = "INSERT INTO tb_users (user_id, user_email, user_password,user_name,user_alamat,user_hp,user_pos,user_role,user_aktif, created_at, updated_at) VALUES (:user_id, :user_email, :user_password, :user_name,:user_alamat,:user_hp,:user_pos,:user_role,:user_aktif, NOW(), NOW())";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_id", $user_id);
            $stmt->bindParam(":user_email", $user_email);
            $stmt->bindParam(":user_password", $user_password);
            $stmt->bindParam(":user_name", $user_name);
            $stmt->bindParam(":user_alamat", $user_alamat);
            $stmt->bindParam(":user_hp", $user_hp);
            $stmt->bindParam(":user_pos", $user_pos);
            $stmt->bindParam(":user_role", $user_role);
            $stmt->bindParam(":user_aktif", $user_aktif);
            $stmt->execute();
        } catch (\PDOException $e) {
            // Tambahkan penanganan kesalahan
            error_log("Error saving data: " . $e->getMessage());
            // Handle kesalahan sesuai kebutuhan
        }
    }
    
    public function edit($id)
{
    try {
        // Periksa apakah form disubmit
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $user_name = $_POST['user_name'];
            $user_alamat = $_POST['user_alamat'];
            $user_hp = $_POST['user_hp'];
            $user_pos = $_POST['user_pos'];
            $user_role = $_POST['user_role'];
            $user_aktif = $_POST['user_aktif'];

            // Pastikan data formulir dikirimkan sebelum menjalankan query update
            if (!empty($user_email) && !empty($user_password)) {
                $sql = "UPDATE tb_users SET user_email=:user_email, user_password=:user_password, user_name=:user_name, user_alamat=:user_alamat,user_hp=:user_hp,user_pos=:user_pos,user_role=:user_role,user_aktif=:user_aktif,updated_at=NOW() WHERE user_id=:id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(":id", $id); // Ganti user_id dengan parameter yang sesuai
                $stmt->bindParam(":user_email", $user_email);
                $stmt->bindParam(":user_password", $user_password);
                $stmt->bindParam(":user_name", $user_name);
                $stmt->bindParam(":user_alamat", $user_alamat);
                $stmt->bindParam(":user_hp", $user_hp);
                $stmt->bindParam(":user_pos", $user_pos);
                $stmt->bindParam(":user_role", $user_role);
                $stmt->bindParam(":user_aktif", $user_aktif);
                $stmt->execute();
            } else {
                // Handle ketika data formulir tidak lengkap
                // Misalnya, tampilkan pesan kesalahan atau redirect ke halaman lain
                echo "Data formulir tidak lengkap. Silakan isi semua kolom yang diperlukan.";
            }
        }
    } catch (\PDOException $e) {
        // Tambahkan penanganan kesalahan
        error_log("Error editing data: " . $e->getMessage());
        // Handle kesalahan sesuai kebutuhan
    }

    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_id", $id);
            $stmt->execute();
        } catch (\PDOException $e) {
            // Tambahkan penanganan kesalahan
            error_log("Error deleting data: " . $e->getMessage());
            // Handle kesalahan sesuai kebutuhan
        }
    }
    public function update($id)
    {
        try {
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
    
            $sql = "UPDATE tb_users SET user_email=:user_email, user_password=:user_password, updated_at=NOW() WHERE user_id=:user_id";
    
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_id", $id);
            $stmt->bindParam(":user_email", $user_email);
            $stmt->bindParam(":user_password", $user_password);
            $stmt->execute();
        } catch (\PDOException $e) {
            // Tambahkan penanganan kesalahan
            error_log("Error updating data: " . $e->getMessage());
            // Handle kesalahan sesuai kebutuhan
        }
    }
    
}
