<?php namespace App\Controllers;

class Buku extends BaseController
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

        return view('buku/index',[
            'bukus'=>$bukus,
        ]);
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $bukuModel = new \App\Models\BukuModel();
        $buku = $bukuModel->find($id);

        return view('buku/view',[
            'buku' => $buku,
        ]);
    }

    public function create()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data,'buku');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $bukuModel = new \App\Models\BukuModel();
                $buku = new \App\Entities\Buku();

                $buku->fill($data);
                $buku->gambar = $this->request->getFile('gambar');
                $buku->created_by = $this->session->get('id');
                $buku->created_date = date("Y-m-d H:i:s");

                $bukuModel->save($buku);

                $id = $bukuModel->insertID();
                
                $segments = ['buku','view',$id];
                return redirect()->to(site_url($segments));
            }
        }
        return view('buku/create');
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $bukuModel = new \App\Models\BukuModel();
        $buku = $bukuModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'bukupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $b = new \App\Entities\Buku();
                $b->id = $id;
                $b->fill($data);

                if($this->request->getFile('gambar')->isValid())
                {
                    $b->gambar = $this->request->getFile('gambar');
                }
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $bukuModel->save($b);

                $segments = ['Buku','view',$id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('buku/update',[
            'buku' => $buku,
            ]);
    }
    
    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelBuku = new \App\Models\BukuModel();
        $delete = $modelBuku->delete($id);

        return redirect()->to(site_url('buku/index'));
    }
}