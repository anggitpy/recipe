<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCountryIdToRecipeTable extends Migration
{
    public function up()
    {
        $fields = [
            'country_id' => [
                'type' => 'INT',
                'constraint' => 12,
                'unsigned' => true,
                'after' => 'recipe_description'
            ],            
            'deleted_at DATETIME NULL',
            'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ];
        $this->forge->addColumn('recipes', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('recipes', ['country_id', 'created_at', 'updated_at']);
    }
}
