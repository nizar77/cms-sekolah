<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'              => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'school_name'     => ['type' => 'VARCHAR', 'constraint' => 150],
            'npsn'            => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'jenjang'         => ['type' => 'ENUM', 'constraint' => ['SMP', 'SMK'], 'default' => 'SMK'],
            'address'         => ['type' => 'TEXT', 'null' => true],
            'phone'           => ['type' => 'VARCHAR', 'constraint' => 30, 'null' => true],
            'email'           => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'logo'            => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'headmaster_name' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'headmaster_msg'  => ['type' => 'TEXT', 'null' => true],
            'updated_at'      => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('settings');
    }

    public function down()
    {
        $this->forge->dropTable('settings');
    }
}
