<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pasien extends Model
{
    protected $table      = 'pasien';
    protected $primaryKey = 'uid';
    protected $allowedFields = ['uid','no_bpjs','no_rm','nama_pasien','nik','jaminan_kesehatan','tempat_lahir','tanggal_lahir','alamat','gol_darah','pekerjaan','status_menikah','agama','pendidikan_terakhir','nama_ibu','nama_ayah','tanggal_daftar','deleted_at'];
    // soft delete
    
}