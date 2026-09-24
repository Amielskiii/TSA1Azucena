<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => 'All Tasks',
            'tasks' => $taskModel->getAllTasks()
        ];

        return view('tasks', $data);
    }
}