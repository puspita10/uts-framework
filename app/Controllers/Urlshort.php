<?php
namespace App\Controllers;
use App\Models\Model_url;
use CodeIgniter\Controllers;

class Urlshort extends BaseController
{
	public function __construct(){
		$this->model = new Model_url();
	}

	public function index(){
		$url= $this->model ->findAll();
		$data=[
			'url' => $url,
			'title' => "Url Short"
		];
		return view('urlshort/Index',$data);
	}
	public function save(){
		$data = [
			'url_code' =>$this->request->getPost('url_code'),
			'url_address' =>$this->request->getPost('url_address')
		];
		$this->model->save($data);
		return redirect()->to('urlshort');
	}
		public function edit($id){
		$url=$this->model->find($id);
		$data=[
			'title'=>'edit data',
			'url'=>$url,
			'id'=>$id
		];
		return view('urlshort/Edit',$data);
	}
	public function save_edit($id){
		$data = [
			'url_code' =>$this->request->getPost('url_code'),
			'url_address' =>$this->request->getPost('url_Address')
		];
		$this->model->update($id,$data);
		return redirect()->to('urlshort');
	}
	public function hapus($id){
		$this->model->delete($id);
		return redirect()->to('url short');
	}
}
?>

	