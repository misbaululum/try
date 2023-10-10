<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;
use CodeIgniter\Database\ConnectionInterface;

class User extends BaseController
{
    public function index()
    {

        // Mendapatkan instance dari koneksi database (ConnectionInterface)
        $db = db_connect();

        // Membuat Query Builder
        $builder = $db->table('users'); // Ganti dengan nama tabel yang sesuai

        // Menentukan kolom yang akan dipilih
        $builder->select('nik', 'cabang');

        // Menambahkan kondisi WHERE
        $builder->where('cabang', $this->session->get('cabang'));

        // Menjalankan query dan mengambil hasil sebagai array
        $result = $builder->get()->getRowArray();

        // Menyimpan hasil dalam variabel $data['nik']
        $data['nik'] = $result;

        return view('user/index', $result);
    }
}
