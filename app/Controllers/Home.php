<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => 'Tasks for Today',
            'tasks' => $taskModel->getTodayTasks()
        ];

        return view('home', $data);
    }
}
