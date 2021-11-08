<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Buku;
use App\Models\Kategori;

class Admin extends BaseController
{
	public function__construct()
{
	$this->buku = new Buku();
	$this->kategori = new Kategori();
	$this->session = \config\Service::session();
}
if ($this->session->get('login')) {
	return redirect()->to('/');
}
return view('Admin');

}
public function logout()
{
	$this->session->destory();
	return redirect()->to('/');
}
