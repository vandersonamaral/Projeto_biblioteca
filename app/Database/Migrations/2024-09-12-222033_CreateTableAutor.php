<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableAutor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'nome'=>[
                'type'=>'VARCHAR',
                'constraint'=>'50',

            ],
            'nacionalidade'=>[
                'type'=>'VARCHAR',
                'constraint'=>'50'
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('autor');
    }
    

    public function down()
    {
        $this->forge->dropTable('autor');
    }
}
