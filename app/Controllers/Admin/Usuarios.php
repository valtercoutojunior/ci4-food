<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Usuarios extends BaseController
{
    /** Apresenta a view com os dados de listagem de todos os usuários. Inclusive os deletados */
    public function index()
    {
        $data = [
            'titulo' => 'Listando Usuários',
        ];

        return view('Admin/Usuarios/index', $data);
    }
}
