<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendaftar extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_pendaftar' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_mk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'status' => [
                'type' => 'TEXT',
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
        $this->forge->addKey('id_pendaftar', true);
        $this->forge->addForeignKey('id_user', 'users', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_mk', 'mata_kuliah', 'id_mk', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pendaftar');
    }

    public function down()
    {
        //
        $this->forge->dropTable('pendaftar');
    }
}
