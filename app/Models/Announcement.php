<?php

namespace App\Models;

use CodeIgniter\Model;

class Announcement extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'announcement';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'judul',
        'isi',
        'created_at',
        'updated_at',
    
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}
