<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Dokter extends Model
{
    protected $table      = 'tb_dokter';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','kode_dokter','nama_dokter','no_izin_praktek','spesialis','deleted_at'];
    // soft delete
}