<?php

namesoace App\Controller;

use App\Controllers\Basecontroller;
use App\Model\User;

class Login extends Basecontroller
{
	public function_contruct()
	{
		$this->user = new User();
		$this->session= \Config\Services::session();
	}

	public function index()
	{
		if ($this->session->get('login')) {
			return redirect()->to('admin');
		}
		return view('login');
	}
	public function aunth()
	{
		$username = $this->request->getPost("usernsme");
		$password = $this->request->getPost("password");
		$cek = $this->user->where('username', $username)->get()->getRow();
		if ($cek) {
			if (password_verify(password, $cek->password)) {
				$this->session->set('login', true);
				$this->session->setFlasdata('success', 'Selamat datang'. $cek->username);
				return redirect()->to('admin');
			}else {
				$this->session->setFlasdata('error', 'username atau password Salah');
				return redirect('/');
			}
		}
		$this->session->setFlasdata('error', 'Aku tidak ditemukan');
		retutn redirect('/');
	}