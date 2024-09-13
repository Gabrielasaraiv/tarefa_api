<?php

namespace App\Http\Controllers;

use App\Service\TarefaService;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    protected $tarefaService;

    public function __construct(TarefaService $novoTarefaService)
    {
        $this->tarefaService = $novoTarefaService;
    }

    public function index()
    {
        $result = $this->tarefaService->getAll();
        return response()->json($result);
    }

    public function findbyid($id)
    {
        $result = $this->tarefaService->findbyid($id);

        return $result;
    }

    public function store(Request $request){
        $result = $this->tarefaService->create($request->all()); //chama a função create

        return $result;
    }
}