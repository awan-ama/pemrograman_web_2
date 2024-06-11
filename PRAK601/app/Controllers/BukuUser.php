<?php namespace App\Controllers;
use App\Models\BukuModel;

class BukuUser extends BaseController
{

    public function home(){
        return view('user');
    }
	public function index()
	{
        $buku = new BukuModel();
        $data['books'] = $buku->findAll();
		return view('user_list_buku', $data);
    }
    public function create()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
        'judul' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required'
    ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            $buku = new BukuModel();
            $buku->insert([
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "penerbit" => $this->request->getPost('penerbit'),
                "tahun_terbit" => $this->request->getPost('tahun_terbit'),
            ]);
            return redirect('user/buku');
        }
        return view('user_create_buku');
    }

    public function edit($id)
    {
        $buku = new BukuModel();
        $data['buku'] = $buku->where('id', $id)->first();

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            $buku->update($id, [
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "penerbit" => $this->request->getPost('penerbit'),
                "tahun_terbit" => $this->request->getPost('tahun_terbit')
            ]);
            return redirect('user/buku');
        }
        return view('user_edit_buku', $data);
    }

	public function delete($id){
        $buku = new BukuModel();
        $buku->delete($id);
        return redirect('user/buku');
    }
}