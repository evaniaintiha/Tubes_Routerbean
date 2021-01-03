<?php namespace App\Controllers;

class Pinjam extends BaseController
{
	public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $bukuModel = new \App\Models\BukuModel();
        $bukus = $bukuModel->findAll();

        return view('bukuser/index',[
            'bukus'=>$bukus,
        ]);
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $bukuModel = new \App\Models\BukuModel();
        $buku = $bukuModel->find($id);

        return view('bukuser/view',[
            'buku' => $buku,
        ]);
    }

    public function kategori()
    {
        return view('bukuser/kategori');
    }
	//--------------------------------------------------------------------

}
