<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MataKuliah extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_mk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_mk' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'semester' => [
                'type' => 'INT',
                'constraint' => '1',
            ],
            'status' => [
                'type' => 'boolean',
                'default' => 0,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_mk', true);
        $this->forge->createTable('mata_kuliah');
    }

    public function down()
    {
        //
        $this->forge->dropTable('mata_kuliah');
    }
}
