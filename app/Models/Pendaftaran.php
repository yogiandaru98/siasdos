<?php

namespace App\Models;

use CodeIgniter\Model;

class Pendaftaran extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pendaftar';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_mk',
        'id_user',
        'status',
        'transkrip',
        'IPK',
        'kelas',
        'semester',
        'created_at',
        'updated_at',
    
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getPendaftar(){
        $query = $this->db->table('pendaftar')
        ->join('users', 'users.id_user = pendaftar.id_user')
        ->groupBy('users.NPM')
        ->get();
        return $query;
    }
    public function getDetailPendaftar($id){
        $query = $this->db->table('pendaftar')->select('pendaftar.*,users.*,mata_kuliah.id_mk, mata_kuliah.nama_mk')
        ->join('users', 'users.id_user = pendaftar.id_user')
        ->join('mata_kuliah', 'mata_kuliah.id_mk = pendaftar.id_mk')
        ->where('users.id_user',$id)
        ->get();
        return $query;
    }
}
