<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TodoMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'todo_id' => [
                'type'           => 'INT',
                'constraint'     => 100,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'activity' => [
                'type'       => 'VARCHAR',
                'constraint' => '700',
                'null'       => false,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => false,
            ],
            // 'owner' => [
            //     'type'       => 'INT',
            //     'constraint' => 100,
            //     'null'       => false,
            // ],
        ]);
        $this->forge->addKey('todo_id', true);
        $this->forge->createTable('todo');
        // $this->forge->addForeignKey('owner', 'users', 'uid');
    }

    public function down()
    {
        $this->forge->dropTable('todo');
    }
}
