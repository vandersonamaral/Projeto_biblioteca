<?php

namespace App\Models;

use CodeIgniter\Model;

class Autor extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'autor';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'nome', 'nacionalidade'];

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

    public function inserirDados($nome, $nacionalidade)
    {
        $this->insert(['nome' => $nome, 'nacionalidade' => $nacionalidade]);
    }

    public function atualizaDados($id, $nome, $nacionalidade)
    {
        return $this->update($id, ['nome' => $nome, 'nacionalidade' => $nacionalidade]);
    }

    public function ordenaAutor($campo,$tipoOdenacao)
    {
        return $this->orderBy($campo, $tipoOdenacao)->findAll();
    }

    public function consultaCondicao($nome)
    {
        return $this->where('nome', $nome)->findAll();
    }
}
