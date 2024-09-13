<?php

namespace App\Service;

use App\Models\Tarefa;

// determinar o nome da classe
class TarefaService
{

    public function create(array $tarefa)
    {
        $dados = Tarefa::create([
            'titulo' => $tarefa['titulo'],
            'descricao' => $tarefa['descricao'],
            'status'=>'Em aberto'
        ]);

        return [
            $dados
        ];
    }
}
