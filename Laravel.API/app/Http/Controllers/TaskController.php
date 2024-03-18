<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\ServiceResponse;

class TaskController extends Controller
{
    protected $task;
    protected $serviceResponse;
    public function __construct(){
        $this->task = new Task();
        $this->serviceResponse = new ServiceResponse();
    }
    public function index()
    {
        $this->serviceResponse->data = $this->task->all();
        $this->serviceResponse->message = 'Tarefas encontradas com sucesso.';
        $this->serviceResponse->success = true;
        return $this->serviceResponse;
    }

    public function store(Request $request)
    {
        
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
