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
    }
    public function index()
    {
        $this->serviceResponse = new ServiceResponse
        (
            $this->task->all(),
            'Tarefas encontradas com sucesso.'
        );
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
