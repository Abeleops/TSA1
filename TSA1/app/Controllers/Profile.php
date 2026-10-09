<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index(): string
    {
        $model = new UserModel();

        $data = [
            'title' => 'User Profile',
            'user'  => $model->getDemoUser()
        ];

        return view('profile/index', $data);
    }
}