<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCountryTable extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'country_name' => [
                'type' => 'varchar',
                'constraint' => 220,
            ],
            'country_short_name' => [
                'type' => 'char',
                'constraint' => 5
            ],

            //https://stackoverflow.com/questions/1196415/what-datatype-to-use-when-storing-latitude-and-longitude-data-in-sql-databases

            'country_lat' => [
                'type' => 'decimal',
                'constraint' => '8,6'
            ],
            'country_long' =>  [
                'type' => 'decimal',
                'constraint' => '9,6'
            ],
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('countries');
    }

    public function down()
    {
        $this->forge->dropTable('countries');
    }
}
