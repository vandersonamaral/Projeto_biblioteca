<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableLivro extends Migration
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
            'titulo'=>[
                'type'=>'VARCHAR',
                'constraint'=>'50',

            ],
            'ano_publicacao'=>[
                'type'=>'int',
                'constraint'=>11,
            ],
            'autor_id'=>[
                'type'=>'int',
                'constraint'=>11,
                'unsigned'=>true
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('autor_id','autor','id','CASCADE','CASCADE');
        $this->forge->createTable('livro');

    }
    

    public function down()
    {
        $this->forge->dropTable('livro');
    }
}

