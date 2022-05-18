<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{

    protected $table            = 'usuarios';

    protected $returnType       = 'object';
    protected $allowedFields    = [
        // 'nome',
        // 'email',
        // 'cpf',
        // '',
        // '',
        // '',
        // '',
        // '',
        // '',
        // '',
        // '',
        // '',

    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'atualizado_em';
    protected $deletedField  = 'deletado_em';
}
