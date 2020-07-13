<?php namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
    {
        
        $model = new UserModel();
        $data['ci_user']  = $model->getUser()->getResult();
        $data['login']  = $model->getUser()->getResult();
        echo view('userView', $data);
    }

	public function save()
    {
        $model = new UserModel();
        $data = array(
            'user_id'          => $this->request->getPost('user_id'),
            'user_nama'        => $this->request->getPost('user_nama'),
            'user_email'       => $this->request->getPost('user_email'),
         
        );
        $model->saveUser($data);
        $session = session();
        session()->setFlashdata('msg_tambah','Tambah data Berhasil!!!');
        return redirect()->to('/home');
    }

    public function update()
    {
        $model = new UserModel();
        $id = $this->request->getPost('user_id');
        $data = array(
            
            'user_nama'        => $this->request->getPost('user_nama'),
            'user_email'       => $this->request->getPost('user_email'),
         
        );
        $model->updateUser($data, $id);
        $session = session();
        session()->setFlashdata('msg_edit','Edit data Berhasil!!!');
        return redirect()->to('/home');
    }

    public function delete()
    {
        $model = new UserModel();
        $id = $this->request->getPost('user_id');
        $model->deleteUser($id);
        $session = session();
        session()->setFlashdata('msg_hapus','Delete data Berhasil!!!');
        return redirect()->to('/home');
    }
}
