<?php

namespace App\Database\Seeds;

use App\Models\UsuarioModel;
use CodeIgniter\Database\Seeder;

class UsuarioFakerSeeder extends Seeder
{
    public function run()
    {
        $usuarioModel = new UsuarioModel();


        $usuarioUm = [
            'nome' => 'Bruno Eduardo Silveira',
            'email' => 'bruno-silveira@outlook.com',
            'cpf' => '656.691.598-29',
            'telefone' => '(11) 99169-4061',
        ];

        $usuarioModel->protect(false)->insert($usuarioUm);

        $usuarioDois = [
            'nome' => 'Priscila Mariana Lívia Porto',
            'email' => 'priscilamaria@outlook.com',
            'cpf' => '823.898.808-00',
            'telefone' => '(11) 99526-3353',
        ];
        $usuarioModel->protect(false)->insert($usuarioDois);

        $usuarioTres = [
            'nome' => 'Carlos Eduardo Augusto Carlos Eduardo Gomes',
            'email' => 'carloseduardo@gmail.com',
            'cpf' => '698.110.148-33',
            'telefone' => '(11) 99410-0593',
        ];
        $usuarioModel->protect(false)->insert($usuarioTres);

        $usuarioQuatro = [
            'nome' => 'Lúcia Andrea da Paz',
            'email' => 'luciaandrea@gmail.com.br',
            'cpf' => '263.107.878-02',
            'telefone' => '(11) 98975-8805',
        ];
        $usuarioModel->protect(false)->insert($usuarioQuatro);
        $usuarioCinco = [
            'nome' => 'Diego Luiz Bernardo das Neves',
            'email' => 'diegoluiz@yahoo.com.br',
            'cpf' => '329.783.248-72',
            'telefone' => '(11) 99787-5315',
        ];
        $usuarioModel->protect(false)->insert($usuarioCinco);

        echo 'Tudo certo usuários inseridos com sucesso';
    }
}
