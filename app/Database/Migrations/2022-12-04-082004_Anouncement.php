<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Anouncement extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_announcement' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'isi' => [
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
        $this->forge->addKey('id_announcement', true);
        $this->forge->createTable('announcement');
    }

    public function down()
    {
        //
        $this->forge->dropTable('announcement');
    }
}
