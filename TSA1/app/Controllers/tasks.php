<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        $data = [
            'title' => 'Task List',
            'tasks' => $model->findAll()
        ];

        return view('tasks/index', $data);
    }
}
