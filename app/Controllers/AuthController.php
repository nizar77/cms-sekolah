<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/admin/dashboard');
        }
        return view('auth/login');
    }

    public function login()
    {
        return view('auth/login');
    }
    public function attemptLogin()
    {
        $rule = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ];
        if (! $this->validate($rule)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();
        $email     = $this->request->getPost('email');
        $password  = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        // Verifikasi keberadaan user & kecocokan hash password
        if (! $user || ! password_verify($password, $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Email atau password salah.');
        }

        // Regenerasi ID session untuk mencegah Session Fixation Attack
        session()->regenerate();

        // Simpan data penting ke dalam session
        session()->set([
            'user_id'    => $user['id'],
            'user_name'  => $user['name'],
            'user_email' => $user['email'],
            'user_role'  => $user['role'],
            'isLoggedIn' => true,
        ]);

        return redirect()->to('/admin/dashboard')->with('success', 'Selamat datang, ' . $user['name']);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Anda telah berhasil keluar.');
    }
}
