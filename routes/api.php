<?php

use App\Http\Controllers\TarefaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('tarefas/lista', [TarefaController::class, 'index']);

Route::get('tarefa/{id}/find',[TarefaController::class, 'findById']);

Route::post('/tarefa', [TarefaController::class, 'store']);
