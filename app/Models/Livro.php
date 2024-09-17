<?php

namespace App\Models;

use CodeIgniter\Model;

class Livro extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'livro';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'titulo', 'ano_publicacao', 'autor_id'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    
    public function verDados()
    {
        return $this->findAll();
    }

    
    public function consultaID($id)
    {
        return $this->find($id);
    }

    
    public function inserirDados($titulo, $ano_publicacao, $autor_id)
    {
        $this->insert([
            'titulo' => $titulo,
            'ano_publicacao' => $ano_publicacao,
            'autor_id' => $autor_id
        ]);
    }

    
    public function consultaCondicao($titulo)
    {
        return $this->where('titulo', $titulo)->findAll();
    }

   
    public function ordenaLivro($campo, $tipoOrdenacao)
    {
        return $this->orderBy($campo, $tipoOrdenacao)->findAll();
    }

    
    public function atualizaDados($id, $titulo, $ano_publicacao, $autor_id)
    {
        return $this->update($id, [
            'titulo' => $titulo,
            'ano_publicacao' => $ano_publicacao,
            'autor_id' => $autor_id
        ]);
    }
}
