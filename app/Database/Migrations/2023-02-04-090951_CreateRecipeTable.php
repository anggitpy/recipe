<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRecipeTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,                
            ],
            'recipe_name' => [
                'type' => 'VARCHAR',
                'constraint' => 200,                
            ],
            'recipe_description' => [
                'type' => 'TEXT',                
            ],
            // 'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            // 'udpated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('recipes');
    }

    public function down()
    {
        $this->forge->dropTable('recipes');
    }
}
