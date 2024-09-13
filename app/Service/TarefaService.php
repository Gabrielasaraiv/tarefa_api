<?php

namespace App\Service;

use App\Models\Tarefa;

class TarefaService 

{
    public function getAll()
    {
        //função all(): retorna todos os dados da tabela tarefa.
        $tarefa = Tarefa::all();

        return [
            'status'=> true,  // esse status se refere ao retorno da requisição, serve para verificar se foi executada com sucesso ou não.
            'message' =>'Pesquisa realizada com sucesso', // mensagem de retorno para informar ao usuário erro ou successo da requisição
            'data' => $tarefa, //dados retornados da pesquisa do banco de dados. 
        ];
    }

    public function findById($id)
    { // pesquisa por ID
        $tarefa = Tarefa::find($id); 
        if ($tarefa == null) {
            return [
                'status' => false,
                'message' => 'Usuário não encontrado'
            ];
        }
        return [
            'status' => true,
            'message' => 'Usuario encontrado',
            
        ];
    }


    public function create(array $tarefa)
    {
        $dados = Tarefa::create([
            'titulo' => $tarefa['titulo'],
            'descricao' => $tarefa['descricao'],
            'status' => 'Em aberto'
        ]);

        return [
            $dados
        ];
    }


}
