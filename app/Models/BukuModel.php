<?php namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'judul','stok','gambar','penerbit',
        'pengarang','kategori'
    ];
    protected $returnType = 'App\Entities\Buku';
    protected $useTimestamps = false;

    public function search($keyword){
        // $builder = $this->table('buku');
        // $builder->like('judul', $keyword);
        // return $builder;
        return $this->table('buku')->like('judul', $keyword);
    }
}