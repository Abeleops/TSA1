<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    // Welcome page: today's tasks only
    public function index(): string
    {
        $model = new TaskModel();

        return view('pages/home', [
            'tasks' => $model->getToday(),
            'today' => date('l, F j, Y'),
        ]);
    }

    // Static About page
    public function about(): string
    {
        return view('pages/about');
    }
}
