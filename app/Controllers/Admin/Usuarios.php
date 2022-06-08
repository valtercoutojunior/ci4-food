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

    public function atualizar($id = null)
    {
        if ($this->request->getMethod() === 'post') {
            $usuario = $this->buscaUsuarioOu404($id);
            $post = $this->request->getPost();

            //Remove a obrigação da senha na atualização
            if (empty($post['password'])) {
                $this->usuarioModel->desabilitaValidacaoSenha();
                unset($post['password']);
                unset($post['password_confirmation']);
            }

            $usuario->fill($post);


            //Vefica se houve alteração no campos
            if (!$usuario->hasChanged()) {
                return redirect()->back()->with('informacao', "Não há dados para atualizar");
            }

            if ($this->usuarioModel->protect(false)->save($usuario)) {
                return redirect()->to(site_url("admin/usuarios/show/$usuario->id"))
                    ->with('sucesso', "Dados do usuário $usuario->nome, atualizados com sucesso!");
            } else {
                return redirect()
                    ->back()
                    ->with('errors_model', $this->usuarioModel->errors())
                    ->with('atencao', "Verifique os erros e tente novamente");
            }
        } else {
            return redirect()->back();
        }
    }

    /*** Busca os dados do usuário pelo id do mesmo */
    private function buscaUsuarioOu404(int $id = null)
    {
        if (!$id || !$usuario = $this->usuarioModel->where('id', $id)->first()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não foi possível encontrar o usuário $id");
        }
        return $usuario;
    }
}
