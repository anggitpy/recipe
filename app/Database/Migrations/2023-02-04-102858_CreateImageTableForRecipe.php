<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateImageTableForRecipe extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'recipe_id' => [
                'type' => 'INT',
                'constraint' => 20,
                'unsigned' => TRUE,
            ],
            'image_file_name' => [
                'type' => 'varchar',
                'constraint' => 250,
            ],
            'image_file_name_ext' => [
                'type' => 'char',
                'constraint' => 5
            ],
            'image_caption' => [
                'type' => 'TEXT',
                'null' => TRUE,
            ],
            'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('recipe_images');
    }

    public function down()
    {
        $this->forge->dropTable('recipe_images');
    }
}
