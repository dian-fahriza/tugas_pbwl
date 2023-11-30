<?php

namespace App\Models;

use App\Core\Model;

class Golongan extends Model
{

    public function show()
    {
        $query = "SELECT * FROM tb_golongan";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        try {
            $gol_id = $_POST['gol_id'];
            $gol_kode = $_POST['gol_kode'];
            $gol_nama = $_POST['gol_nama'];

            $sql = "INSERT INTO tb_golongan (gol_id, gol_kode, gol_nama, created_at, updated_at) VALUES (:gol_id, :gol_kode, :gol_nama, NOW(), NOW())";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":gol_id", $gol_id);
            $stmt->bindParam(":gol_kode", $gol_kode);
            $stmt->bindParam(":gol_nama", $gol_nama);
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
                $gol_kode = $_POST['gol_kode'];
                $gol_nama = $_POST['gol_nama'];

                // Pastikan data formulir dikirimkan sebelum menjalankan query update
                if (!empty($gol_kode) && !empty($gol_nama)) {
                    $sql = "UPDATE tb_golongan SET gol_kode=:gol_kode, gol_nama=:gol_nama, updated_at=NOW() WHERE gol_id=:gol_id";

                    $stmt = $this->db->prepare($sql);
                    $stmt->bindParam(":gol_id", $id);
                    $stmt->bindParam(":gol_kode", $gol_kode);
                    $stmt->bindParam(":gol_nama", $gol_nama);
                    $stmt->execute();
                } else {
                    // Handle ketika data formulir tidak lengkap
                    // Misalnya, bisa menampilkan pesan kesalahan atau redirect ke halaman lain
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
            $sql = "DELETE FROM tb_golongan WHERE gol_id=:gol_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":gol_id", $id);
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
            $gol_kode = $_POST['gol_kode'];
            $gol_nama = $_POST['gol_nama'];
            $id = $_POST['id'];
    
            $sql = "UPDATE tb_golongan SET gol_kode=:gol_kode, gol_nama=:gol_nama, updated_at=NOW() WHERE gol_id=:gol_id";
    
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":gol_id", $id);
            $stmt->bindParam(":gol_kode", $gol_kode);
            $stmt->bindParam(":gol_nama", $gol_nama);
            $stmt->execute();
        } catch (\PDOException $e) {
            // Tambahkan penanganan kesalahan
            error_log("Error updating data: " . $e->getMessage());
            // Handle kesalahan sesuai kebutuhan
        }
    }
    
}
