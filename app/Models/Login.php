<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Services;

class Login extends Model
{
    public $session;
    public $request;
    protected $builder;

    public function __construct()
    {
        parent::__construct();
        $this->request = Services::request();
        $this->session = Services::session();

        $this->builder = $this->db->table('users');
    }

    public function getUser($id)
    {
        return $this->builder->where('id', $id)->get()->getRow();
    }

    public function getUserByNIK($user)
    {
        return $this->builder->where('nik', $user)->get()->getRow();
    }

    public function checkUniqueNIK($nik)
    {
        $user = $this->getUserByNIK($nik);

        if (!empty($user)) {
            return false;
        }

        return true;
    }

    public function loginPost($user)
    {
        if (!empty($user)) {
            $userData = [
                'session_id' => $user->id,
                'session_password' => md5($user->password ?? '')
            ];

            // Store user-specific data in the session.
            $this->session->set($userData);
        }
    }

    public function login()
    {
        $user = $this->getUserByNIK(inputPost('nik'));

        if (!empty($user)) {
            if (!password_verify(inputPost('password'), $user->password)) {
                return false;
            }

            if (inputPost('cabang') != $user->cabang) {
                return false;
            }

            $this->loginPost($user);

            return 'success';
        }

        return false;
    }

    public function register()
    {
        $data = [
            'nik' => inputPost('nik'),
            'password' => password_hash(inputPost('password'), PASSWORD_DEFAULT),
            'cabang' => inputPost('cabang'),
        ];

        if ($this->builder->insert($data)) {
            $id = $this->db->insertID();

            $user = $this->getUser($id);

            if (!empty($user)) {
                $this->loginPost($user);
            }

            return true;
        }

        return false;
    }
}
