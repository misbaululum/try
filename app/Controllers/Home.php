<?php

namespace App\Controllers;

use App\Models\Login;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use Psr\Log\LoggerInterface;

class Home extends BaseController
{
    protected $modelLogin;
    public $cabang;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->cabang = [
            'Primadaya_Binjai',
            'Primadaya_Cileungsi',
            'Primadaya_Lampung',
            'Primadaya_Sukambumi',
            'Primadaya_Tangerang'
        ];

        $this->modelLogin = new Login();
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];

        return view('home', $data);
    }

    public function login()
    {
        if (checkAuthentication()) {
            return redirect()->to(base_url());
        }

        $data = [
            'title' => 'Login',
            'cabang' => $this->cabang,
        ];

        return view('login', $data);
    }

    public function loginPost()
    {
        $validation = Services::validation();

        $validation->setRule('nik', 'NIK', 'required|max_length[255]');

        if (!$this->validate(getValidationRules($validation))) {
            $this->session->setFlashdata('errors', $validation->getErrors());
            return redirect()->back()->withInput();
        } else {
            $loginResult = $this->modelLogin->login();

            if ($loginResult === 'success') {
                return redirect()->back();
            } else {
                $this->session->setFlashdata('error', 'Terjadi kesalahan');
                return redirect()->to(base_url('login'))->withInput();
            }
        }
    }

    public function register()
    {
        if (checkAuthentication()) {
            return redirect()->to(base_url());
        }

        $data = [
            'title' => 'Register',
            'cabang' => $this->cabang,
        ];

        return view('register', $data);
    }

    public function registerPost()
    {
        $validation = Services::validation();

        $validation->setRule('nik', 'NIK', 'required|max_length[255]');
        $validation->setRule('password', 'Password', 'required|max_length[255]');
        $validation->setRule('password_confirm', 'Konfirmasi Password', 'required|max_length[255]|matches[password]');

        if (!$this->validate(getValidationRules($validation))) {
            $this->session->setFlashdata('errors', $validation->getErrors());
            return redirect()->back()->withInput();
        } else {
            if (!$this->modelLogin->checkUniqueNIK(inputPost('nik'))) {
                $this->session->setFlashdata('error', 'NIK Sudah digunakan.');
                return redirect()->to(base_url('register'))->withInput();
            }

            if ($this->modelLogin->register()) {
                return redirect()->back();
            } else {
                $this->session->setFlashdata('error', 'Terjadi Kesalahan.');
<<<<<<< HEAD
                return redirect()->to(base_url('egister'))->withInput();
=======
                return redirect()->to(base_url('register'))->withInput();
>>>>>>> 6e527b6 (logout change)
            }
        }
    }

    public function form() {

        if(!checkAuthentication()){
            return redirect()->to(base_url());
        }

        $data = [
            "title" => "Formulir"
        ];
        
        return view("form", $data);
    }

<<<<<<< HEAD
=======
    public function logout()
    {
        // Anda dapat menambahkan logika logout di sini, seperti menghapus sesi atau menghancurkan cookie
        // Contoh: Menghapus sesi
        if(!checkAuthentication()){
            return redirect()->to(base_url());
        }
        session()->destroy();

        // Setelah logout, Anda bisa mengarahkan pengguna ke halaman login atau halaman lain yang sesuai
        return redirect()->to('login'); // Gantilah '/login' dengan URL halaman login yang sesuai
    }
>>>>>>> 6e527b6 (logout change)
    
}
