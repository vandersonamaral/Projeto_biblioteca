<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableLeitor extends Migration
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
            'email'=>[
                'type'=>'VARCHAR',
                'constraint'=>'50',

            ],
            'livro_id'=>[
                'type'=>'int',
                'constraint'=>11,
                'unsigned'=>true
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('livro_id','livro','id','CASCADE','CASCADE');
        $this->forge->createTable('leitor');

    }
    

    public function down()
    {
        $this->forge->dropTable('leitor');
    }
}

