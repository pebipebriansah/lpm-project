<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Login'
        ];
        return view('login', $data);
    }
    public function auth(){
        $this->userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user = $this->userModel->where('email', $email)->first();
        if($user){
            if(password_verify($password, $user['password'])){
                $data = [
                    'id_user' => $user['id_user'],
                    'nama_lengkap' => $user['nama_lengkap'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'logged_in' => TRUE
                ];
                session()->set($data);
    
                // Determine redirect URL based on role
                $redirectUrl = base_url();
                if ($user['role'] == 1) {
                    $redirectUrl = base_url('admin');
                } elseif ($user['role'] == 2) {
                    $redirectUrl = base_url('jurnalis');
                } elseif ($user['role'] == 3) {
                    $redirectUrl = base_url('editor');
                } elseif ($user['role'] == 4){
                    $redirectUrl = base_url('pimpinan');
                }
    
                // Set flashdata for success message
                session()->setFlashdata('success', 'Login berhasil!');
    
                return redirect()->to($redirectUrl);
            } else {
                session()->setFlashdata('error', 'Password Salah');
                return redirect()->to(base_url('login'));
            }
        } else {
            session()->setFlashdata('error', 'Email tidak terdaftar');
            return redirect()->to(base_url('login'));
        }
    } 
    public function register(){
        $data = [
            'title' => 'Halaman Register'
        ];
        return view('register', $data);
    }
    public function save(){
        $this->userModel = new UserModel();
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 1
        ];
        $this->userModel->insert($data);
        session()->setFlashdata('success', 'Registrasi berhasil!');
        return redirect()->to(base_url('login'));
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}