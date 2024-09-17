<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Livro;

class LivroController extends Controller{
    public function index()
    {
        $livro = new Livro();
        return $this->response->setJSON($livro->verDados());
    }

    public function show($id)
    {
        $livro = new Livro();
        return $this->response->setJSON($livro->consultaID($id));
    }

    public function search($titulo)
    {
        $livro = new Livro();
        return $this->response->setJSON($livro->consultaCondicao($titulo));
    }

    public function store()
    {
        $livro = new Livro();
        $livro->inserirDados('O Pequeno Príncipe', 1943, 1);
        return $this->response->setJSON($livro->consultaCondicao('O Pequeno Príncipe'));
    }

    public function order($orderBy, $direction)
    {
        $livro = new Livro();
        return $this->response->setJSON($livro->ordenaLivro($orderBy, $direction));
    }
}