<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;
use CodeIgniter\Database\ConnectionInterface;

class User extends BaseController
{
    public function index()
    {
        return view('user/index');
    }
}
