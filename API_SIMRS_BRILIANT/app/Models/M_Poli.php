<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Poli extends Model
{
    protected $table      = 'tb_poli';
    protected $primaryKey = 'uid';
    protected $allowedFields = ['uid','kode_poli','nama_poli','mulai_praktek','selesai_praktek','kode_dokter','hari','deleted_at'];
    // soft delete
}