<?php

namespace App\Controllers;

use App\Core\Controller;

class Users extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\user();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('users/index', $data);
     }

     public function input()
     {
          $this->dashboard('users/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/users');
     }

     public function edit($id)
    {
        $data['row'] = $this->model->edit($id);

        if ($data['row']) {
            $this->dashboard('users/edit', $data);
        } else {
            // Handle jika data tidak ditemukan
            // Misalnya, tampilkan pesan kesalahan atau redirect ke halaman lain
            echo "Data user tidak ditemukan.";
        }
    }

     public function update()
     {
         // Pastikan bahwa $id telah diberikan (misalnya dari URL atau formulir)
         if (!empty($id)) {
             $this->model->update($id);
             header('location:' . URL . '/users');
         } else {
             // Handle jika $id tidak tersedia
             // Misalnya, tampilkan pesan kesalahan atau redirect ke halaman lain
         }
     }
     
}
