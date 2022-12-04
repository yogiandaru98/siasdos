<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MataKuliah extends Seeder
{
    public function run()
    {
        //
        $data = [
           [
            'nama_mk' => 'Pemrograman Web',
            'semester' => 3,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'nama_mk' => 'Pemrograman Dasar',
            'semester' => 1,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'nama_mk' => 'Matematika Dasar',
            'semester' => 1,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'nama_mk' => 'Logika',
            'semester' => 1,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'nama_mk' => 'Basis Data',
            'semester' => 3,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ]
        ];
        $this->db->table('mata_kuliah')->insertBatch($data);
    }
}
