<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuarios extends BaseController
{

    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    /** Apresenta a view com os dados de listagem de todos os usuários. Inclusive os deletados */
    public function index()
    {
        $usuarios = $this->usuarioModel->findAll();
        $data = [
            'titulo'    => 'Listando os Usuários',
            'usuarios'  => $usuarios,
        ];
        return view('Admin/Usuarios/index', $data);
    }


    public function procurar()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $usuarios = $this->usuarioModel->procurar($this->request->getGet('term'));
        $retorno = [];

        foreach ($usuarios as $usuario) {
            $data['id'] = $usuario->id;
            $data['value'] = $usuario->nome;
            $retorno[] = $data;
        }
        return $this->response->setJSON($retorno);
    }

    public function show($id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);
        $data = [
            'titulo'    => "Detalhado o usuário: " . esc($usuario->nome),
            'usuario'  => $usuario,
        ];
        return view('Admin/Usuarios/show', $data);
    }

    public function editar($id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);
        $data = [
            'titulo'    => "Editando o Usuário: " . esc($usuario->nome),
            'usuario'  => $usuario,
        ];
        return view('Admin/Usuarios/editar', $data);
    }

    private function buscaUsuarioOu404(int $id = null)
    {
        if (!$id || !$usuario = $this->usuarioModel->where('id', $id)->first()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não foi possível encontrar o usuário $id");
        }
        return $usuario;
    }
}
