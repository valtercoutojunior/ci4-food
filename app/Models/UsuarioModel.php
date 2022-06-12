<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{

    protected $table            = 'usuarios';
    protected $returnType       = 'App\Entities\Usuario';
    protected $allowedFields    = [
        'nome',
        'email',
        'telefone',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'atualizado_em';
    protected $deletedField  = 'deletado_em';
    //Eventos de callback
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected $validationRules    = [
        'nome'                  => 'required|min_length[4]|max_length[120]',
        'email'                 => 'required|valid_email|is_unique[usuarios.email]',
        'cpf'                   => 'required|exact_length[14]|is_unique[usuarios.cpf]',
        'password'              => 'required|min_length[6]',
        'password_confirmation' => 'required_with[password]|matches[password]',
    ];

    protected $validationMessages = [
        'nome' => [
            'required'      => 'O campo nome é obrigatório.',
            'min_length'    => 'O nome deve ter pelo menos 4 caractéres.',
            'max_length'    => 'O nome deve ter no máximo 120 caractéres.',
        ],
        'email' => [
            'required'      => 'O campo e-mail é obrigatório.',
            'valid_email'   => 'O e-mail informado é inválido.',
            'is_unique'     => 'Ops! Esse e-mail já existe.',
        ],
        'cpf' => [
            'required'      => 'O campo cpf é obrigatório.',
            'exact_length'  => 'O cpf dever exatamente 14 caractéres.',
            'is_unique'     => 'Ops! Esse cpf já existe.',
        ],
        'password' => [
            'required'      => 'O campo senha obrigatório.',
            'min_length'    => 'A senha deve ter pelo menos 6 caractéres',
        ],
        'password_confirmation' => [
            'required_with' => 'O campo confirmar senha obrigatório.',
            'matches'       => 'As senha não são iguais.',
        ],
    ];

    protected function hashPassword($data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
            unset($data['data']['password']);
            unset($data['data']['password_confirmation']);
        }
        return $data;
    }

    public function procurar($term)
    {
        if ($term === null) {
            return [];
        }

        return $this->select('id, nome')
            ->like('nome', $term)
            ->get()
            ->getResult();
    }

    /** Desabilita a verifiação dos campos de senha caso o usuário não informe-os */
    public function desabilitaValidacaoSenha()
    {
        unset($this->validationRules['password']);
        unset($this->validationRules['password_confirmation']);
    }
}
