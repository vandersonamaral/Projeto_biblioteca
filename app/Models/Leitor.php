<?php

namespace App\Models;

use CodeIgniter\Model;

class Leitor extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'leitor';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'nome', 'email', 'livro_id'];

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

    // Métodos personalizados

    public function verDados() {
        return $this->findAll();
    }

    public function consultaID($id) {
        return $this->find($id);
    }

    public function inserirDados($nome, $email, $livro_id) {
        $this->insert([
            'nome' => $nome,
            'email' => $email,
            'livro_id' => $livro_id
        ]);
    }

    public function consultaCondicao($nome) {
        return $this->where('nome', $nome)->findAll();
    }

    public function ordenaLeitor($campo, $tipoOrdenacao) {
        return $this->orderBy($campo, $tipoOrdenacao)->findAll();
    }

    public function atualizaDados($id, $nome, $email, $livro_id) {
        return $this->update($id, [
            'nome' => $nome,
            'email' => $email,
            'livro_id' => $livro_id
        ]);
    }
}
