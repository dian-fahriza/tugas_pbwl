<?php

namespace App\Controllers;

use App\Core\Controller;

class Golongan extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\golongan();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('golongan/index', $data);
     }

     public function input()
     {
          $this->dashboard('golongan/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/golongan');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('golongan/edit', $data);
     }

     public function update()
	{
		$this->model->update();
		header('location:' . URL . '/golongan');
	}
     /*
     {
         // Pastikan bahwa $id telah diberikan (misalnya dari URL atau formulir)
         if (!empty($id)) {
             $this->model->update($id);
             header('location:' . URL . 'update/golongan');
         } else {
             // Handle jika $id tidak tersedia
             // Misalnya, tampilkan pesan kesalahan atau redirect ke halaman lain
         }
        
{
    try {
        $golonganData = $this->$id;

        if (!$golonganData) {
            // Data tidak ditemukan, tambahkan penanganan kesalahan di sini
            // Misalnya, redirect ke halaman lain atau tampilkan pesan kesalahan
            return false;
        }

        // Lanjutkan dengan proses edit jika data ditemukan
        // ...
    } catch (\PDOException $e) {
        // Handle kesalahan
        error_log("Error editing data: " . $e->getMessage());
        // Tampilkan pesan kesalahan atau lakukan sesuai kebutuhan
    }
}

     }*/
     
     
}
