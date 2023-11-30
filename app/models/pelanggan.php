<?php

namespace App\Models;

use App\Core\Model;

class pelanggan extends Model
{
    public function show()
    {
        $query = "SELECT * FROM tb_pelanggan";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        try {
            $pel_id = $_POST['pel_id'];
            $pel_id_gol = $_POST['pel_id_gol'];
            $pel_no = $_POST['pel_no'];
            $pel_nama = $_POST['pel_nama'];
            $pel_alamat = $_POST['pel_alamat'];
            $pel_hp = $_POST['pel_hp'];
            $pel_ktp = $_POST['pel_ktp'];
            $pel_seri = $_POST['pel_seri'];
            $pel_meteran = $_POST['pel_meteran'];
            $pel_aktif = $_POST['pel_aktif'];
            $pel_id_user = $_POST['pel_id_user'];

            $sql = "INSERT INTO tb_pelanggan (pel_id, pel_id_gol, pel_no, pel_nama, pel_alamat, pel_hp, pel_ktp, pel_seri, pel_meteran, pel_aktif, created_at, updated_at) VALUES (:pel_id, :pel_id_gol, :pel_no, :pel_nama, :pel_alamat, :pel_hp, :pel_ktp, :pel_seri, :pel_meteran, :pel_aktif, NOW(), NOW())";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id", $pel_id);
            $stmt->bindParam(":pel_id_gol", $pel_id_gol);
            $stmt->bindParam(":pel_no", $pel_no);
            $stmt->bindParam(":pel_nama", $pel_nama);
            $stmt->bindParam(":pel_alamat", $pel_alamat);
            $stmt->bindParam(":pel_hp", $pel_hp);
            $stmt->bindParam(":pel_ktp", $pel_ktp);
            $stmt->bindParam(":pel_seri", $pel_seri);
            $stmt->bindParam(":pel_meteran", $pel_meteran);
            $stmt->bindParam(":pel_aktif", $pel_aktif);
            $stmt->bindParam(":pel_id_user", $pel_id_user);
            $stmt->execute();
        } catch (\PDOException $e) {
            // Tambahkan penanganan kesalahan
            error_log("Error saving data: " . $e->getMessage());
            // Handle kesalahan sesuai kebutuhan
            echo "Terjadi kesalahan saat menyimpan data. Silakan coba lagi atau hubungi administrator.";
        }
    }

    public function edit($id)
    {
        try {
            // Periksa apakah form disubmit
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $pel_id = $_POST['pel_id'];
                $pel_id_gol = $_POST['pel_id_gol'];
                $pel_no = $_POST['pel_no'];
                $pel_nama = $_POST['pel_nama'];
                $pel_alamat = $_POST['pel_alamat'];
                $pel_hp = $_POST['pel_hp'];
                $pel_ktp = $_POST['pel_ktp'];
                $pel_seri = $_POST['pel_seri'];
                $pel_meteran = $_POST['pel_meteran'];
                $pel_aktif = $_POST['pel_aktif'];
                $pel_id_user = $_POST['pel_id_user'];
                // Pastikan data formulir dikirimkan sebelum menjalankan query update
                if (!empty($pel_id) && !empty($pel_nama)) {
                    $sql = "UPDATE tb_pelanggan SET pel_id_gol=:pel_id_gol, pel_no=:pel_no, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_hp=:pel_hp, pel_ktp=:pel_ktp, pel_seri=:pel_seri, pel_meteran=:pel_meteran, pel_aktif=:pel_aktif, pel_id_user=:pel_id_user, updated_at=NOW() WHERE pel_id=:pel_id";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindParam(":pel_id", $pel_id);
                    $stmt->bindParam(":pel_id_gol", $pel_id_gol);
                    $stmt->bindParam(":pel_no", $pel_no);
                    $stmt->bindParam(":pel_nama", $pel_nama);
                    $stmt->bindParam(":pel_alamat", $pel_alamat);
                    $stmt->bindParam(":pel_hp", $pel_hp);
               $stmt->bindParam(":pel_ktp", $pel_ktp);
               $stmt->bindParam(":pel_seri", $pel_seri);
               $stmt->bindParam(":pel_meteran", $pel_meteran);
               $stmt->bindParam(":pel_aktif", $pel_aktif);
               $stmt->bindParam(":pel_id_user", $pel_id_user);
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
            $sql = "DELETE FROM tb_pelanggan WHERE pel_id=:pel_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id", $id);
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
          $pel_id = $_POST['pel_id'];
          $pel_id_gol = $_POST['pel_id_gol'];
          $pel_no = $_POST['pel_no'];
          $pel_nama = $_POST['pel_nama'];
          $pel_alamat = $_POST['pel_alamat'];
          $pel_hp = $_POST['pel_hp'];
          $pel_ktp = $_POST['pel_ktp'];
          $pel_seri = $_POST['pel_seri'];
          $pel_meteran = $_POST['pel_meteran'];
          $pel_aktif = $_POST['pel_aktif'];
          $pel_id_user = $_POST['pel_id_user'];
          $sql = "UPDATE tb_pelanggan SET pel_id_gol=:pel_id_gol, pel_no=:pel_no, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_hp=:pel_hp, pel_ktp=:pel_ktp, pel_seri=:pel_seri, pel_meteran=:pel_meteran, pel_aktif=:pel_aktif, pel_id_user=:pel_id_user, updated_at=NOW() WHERE pel_id=:pel_id";
          $stmt = $this->db->prepare($sql);
          $stmt->bindParam(":pel_id", $pel_id);
          $stmt->bindParam(":pel_id_gol", $pel_id_gol);
          $stmt->bindParam(":pel_no", $pel_no);
          $stmt->bindParam(":pel_nama", $pel_nama);
          $stmt->bindParam(":pel_alamat", $pel_alamat);
          $stmt->bindParam(":pel_hp", $pel_hp);
          $stmt->bindParam(":pel_ktp", $pel_ktp);
          $stmt->bindParam(":pel_seri", $pel_seri);
          $stmt->bindParam(":pel_meteran", $pel_meteran);
          $stmt->bindParam(":pel_aktif", $pel_aktif);
          $stmt->bindParam(":pel_id_user", $pel_id_user);
            $stmt->execute();
        } catch (\PDOException $e) {
            // Tambahkan penanganan kesalahan
            error_log("Error updating data: " . $e->getMessage());
            // Handle kesalahan sesuai kebutuhan
        }
    }
    
}

