<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        $session = session();

        if ($this->request->getMethod() === 'POST') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $db = \Config\Database::connect();
            $builder = $db->table('users');

            $user = $builder->where('username', $username)
                           ->where('password', $password)
                           ->get()
                           ->getRow();

            if ($user) {
                $session->set([
                    'id' => $user->id,
                    'username' => $user->username,
                    'userlevel' => $user->userlevel
                ]);

                return redirect()->to('admin/view_records/users');
            } else {
                $session->setFlashdata('error', 'Invalid Username or Password');
            }
        }

        return view('auth/login');
    }

    public function register()
    {
        $session = session();

        if ($this->request->getMethod() === 'POST') {
            $email = $this->request->getPost('email');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $confirm_password = $this->request->getPost('confirm_password');

            if ($password == $confirm_password) {
                $db = \Config\Database::connect();
                $builder = $db->table('users');

                $check = $builder->where('username', $username)
                               ->orWhere('email', $email)
                               ->get()
                               ->getRow();

                if (!$check) {
                    $data = [
                        'email' => $email,
                        'username' => $username,
                        'password' => $password,
                        'userlevel' => 'user',
                        'status' => 'active',
                        'image' => ''
                    ];

                    if ($builder->insert($data)) {
                        $session->setFlashdata('success', 'Registration Successful! Please login.');
                        return redirect()->to('auth/login');
                    } else {
                        $session->setFlashdata('error', 'Error registering user');
                    }
                } else {
                    $session->setFlashdata('error', 'Username or Email already exists');
                }
            } else {
                $session->setFlashdata('error', 'Passwords do not match');
            }
        }

        return view('auth/register');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('auth/login');
    }
}