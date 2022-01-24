<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Project extends Migration
{
    public function up()
    {
        $column = [
            'id' => [
                'type' => 'INT',
                'constraint' => 3,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'projectName' => [
                'type' => 'VARCHAR',
                'null' => false,
                'constraint' => 255,
            ],
            'client' => [
                'type' => 'VARCHAR',
                'null' => false,
                'constraint' => 255,
            ],
            'projectLeaderName' => [
                'type' => 'VARCHAR',
                'null' => false,
                'constraint' => 255,
            ],
            'projectLeaderImage' => [
                'type' => 'VARCHAR',
                'null' => false,
                'constraint' => 255,
            ],
            'projectLeaderEmail' => [
                'type' => 'VARCHAR',
                'null' => false,
                'constraint' => 255,
            ],
            'startDate' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'endDate' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'progress' => [
                'type' => 'INT',
                'null' => false,
            ],
        ];

        $this->forge->addField($column);
        $this->forge->addKey('id', true);
        $this->forge->createTable('projects', true);
    }

    public function down()
    {
        $this->forge->dropTable('projects');
    }
}
