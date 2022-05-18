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
}
