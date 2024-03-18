<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\ServiceResponse;

class TaskController extends Controller
{
    protected $serviceResponse;
    public function __construct(){
        $this->serviceResponse = new ServiceResponse();
    }
    public function index()
    {
        $this->serviceResponse->data = Task::orderBy('DateCreated', 'DESC')->get();
        $this->serviceResponse->message = 'Tarefas encontradas com sucesso.';
        $this->serviceResponse->success = true;
        return response($this->serviceResponse, 200);
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->set($request->title, $request->description);
        $task->save();
        $this->serviceResponse->data = $task;
        $this->serviceResponse->message = 'Tarefa adicionada com sucesso.';
        $this->serviceResponse->success = true;
        return response($this->serviceResponse, 200);
    }

    public function show(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
    
    }
}
