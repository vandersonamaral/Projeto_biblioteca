<?php 
namespace App\Controllers;
use App\Models\Autor;
use CodeIgniter\Controller;

class AutorController extends Controller{

    public function index()
    {
        $autor = new Autor();
        return $this->response->setJSON($autor->verDados());
    }

    public function show($id)
    {
        $autor = new Autor();
        return $this->response->setJSON($autor->consultaID($id));
    }

    public function search($nome)
    {
        $autor = new Autor();
        return $this->response->setJSON($autor->consultaCondicao($nome));
    }

    public function store()
    {
        $autor = new Autor();
        $autor->inserirDados("Birilo", "da Roca");
        return $this->response->setJSON($autor->consultaCondicao("Birilo"));
    }

    public function order($orderBy, $direction)
    {
        $autor = new Autor();
        return $this->response->setJSON($autor->ordenaAutor($orderBy, $direction));
    }

}