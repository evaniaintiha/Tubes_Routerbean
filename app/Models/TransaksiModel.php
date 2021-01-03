<?php namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'kode_buku','tanggal_pinjam','tanggal_kembali','status',
        'denda'
    ];
    protected $returnType = 'App\Entities\Transaksi';
    protected $useTimestamps = false;
}