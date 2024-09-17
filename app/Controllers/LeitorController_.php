<?php 
namespace App\Controllers;
use App\Models\Leitor;
use CodeIgniter\Controller;

class LeitorController_ extends Controller{
    public function index()
    {
        $leitor = new Leitor();
        return $this->response->setJSON($leitor->verDados());
    }

    public function show($id)
    {
        $leitor = new Leitor();
        return $this->response->setJSON($leitor->consultaID($id));
    }

    public function search($nome)
    {
        $leitor = new Leitor();
        return $this->response->setJSON($leitor->consultaCondicao($nome));
    }

    public function store()
    {
        $leitor = new Leitor();
        $leitor->inserirDados("Carlos Silva", "carlos@gmail.com", 2);
        return $this->response->setJSON($leitor->consultaCondicao("Carlos Silva"));
    }

    public function order($orderBy, $direction)
    {
        $leitor = new Leitor();
        return $this->response->setJSON($leitor->ordenaLeitor($orderBy, $direction));
    }
}