<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];


    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    // add rules
    public $add_pasien_rules = [
        'uid'   => [
            'rules' => 'if_exist',
            'errors' => [
                'if_exist' => 'UID tidak boleh diisi'
            ]
        ],
        'no_bpjs' => [
            'rules' => 'required|numeric|is_unique[pasien.no_bpjs, uid,{uid}]',
            'errors' => [
                'required' => 'No BPJS harus diisi',
                'numeric' => 'No BPJS harus berupa angka',
                'is_unique' => 'No BPJS sudah terdaftar'
            ]
        ],
        'no_rm' => [
            'rules' => 'required|numeric|is_unique[pasien.no_rm, uid,{uid}]',
            'errors' => [
                'required' => 'No RM harus diisi',
                'is_unique' => 'No RM sudah terdaftar',
            ]
        ],
        'nama_pasien' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Pasien harus diisi',
            ]
        ],
        'nik' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'NIK diisi',
                'numeric' => 'NIK harus berupa angka',
            ]
        ],
        'jaminan_kesehatan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Jaminan Kesehatan harus diisi',
            ]
        ],
        'tempat_lahir' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Tempat Lahir harus diisi',
            ]
        ],
        'tanggal_lahir' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Tanggal Lahir harus diisi',
            ]
        ],
        'alamat' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat harus diisi',
            ]
        ],
        'gol_darah' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Golongan Darah harus diisi',
            ]
        ],
        'pekerjaan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Pekerjaan harus diisi',
            ]
        ],
        'status_menikah' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Status Menikah harus diisi',
            ]
        ],
        'agama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Agama harus diisi',
            ]
        ],
        'pendidikan_terakhir' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Pendidikan Terakhir harus diisi',
            ]
        ],
        'nama_ibu' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Ibu harus diisi',
            ]
        ],
        'nama_ayah' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Ayah harus diisi',
            ]
        ],
        'tanggal_daftar' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Tanggal Daftar harus diisi',
            ]
        ]
    ];

    public $update_pasien_rules = [

        'no_bpjs' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'No BPJS harus diisi',
                'numeric' => 'No BPJS harus berupa angka',
            ]
        ],
        'no_rm' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'No RM harus diisi',
                'numeric' => 'No RM harus berupa angka',
            ]
        ],
        'nama_pasien' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Pasien harus diisi',
            ]
        ],
        'nik' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'NIK diisi',
                'numeric' => 'NIK harus berupa angka',
            ]
        ],
        'jaminan_kesehatan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Jaminan Kesehatan harus diisi',
            ]
        ],
        'tempat_lahir' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Tempat Lahir harus diisi',
            ]
        ],
        'tanggal_lahir' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Tanggal Lahir harus diisi',
            ]
        ],
        'alamat' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat harus diisi',
            ]
        ],
        'gol_darah' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Golongan Darah harus diisi',
            ]
        ],
        'pekerjaan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Pekerjaan harus diisi',
            ]
        ],
        'status_menikah' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Status Menikah harus diisi',
            ]
        ],
        'agama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Agama harus diisi',
            ]
        ],
        'pendidikan_terakhir' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Pendidikan Terakhir harus diisi',
            ]
        ],
        'nama_ibu' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Ibu harus diisi',
            ]
        ],
        'nama_ayah' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Ayah harus diisi',
            ]
        ],
        'tanggal_daftar' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Tanggal Daftar harus diisi',
            ]
        ]
    ];
    
    public $add_poli_rules = [
        'uid'   => [
            'rules' => 'if_exist',
            'errors' => [
                'if_exist' => 'UID tidak boleh diisi'
            ]
        ],
        'kode_poli' => [
            // ignore kode poli yang sama
            'rules' => 'required|is_unique[tb_poli.kode_poli,uid,{uid}]',
            'errors' => [
                'required' => 'Kode Poli harus diisi',
                'is_unique' => 'Kode Poli sudah terdaftar'
            ]
        ],
        'nama_poli' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Poli harus diisi',
            ]
        ],
        'mulai_praktek' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Mulai Praktek harus diisi',
            ]
        ],
        'selesai_praktek' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Selesai Praktek harus diisi',
            ]
        ],
        'kode_dokter' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'UID Dokter harus diisi',
            ]
        ],
        'hari' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Hari harus diisi',
            ]
        ]
        
    ];

    public $add_dokter_rules = [
        'id'   => [
            'rules' => 'if_exist',
            'errors' => [
                'if_exist' => 'UID tidak boleh diisi'
            ]
        ],
        'kode_dokter' => [
            // ignore kode poli yang sama
            'rules' => 'required|is_unique[tb_dokter.kode_dokter, id,{id}]',
            'errors' => [
                'required' => 'Kode Dokter harus diisi',
                'is_unique' => 'Kode Dokter sudah terdaftar'
            ]
        ],
        'nama_dokter' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Dokter harus diisi',
            ]
        ],
        'spesialis' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Spesialis harus diisi',
            ]
        ],
        'no_izin_praktek' => [
            'rules' => 'required|is_unique[tb_dokter.no_izin_praktek,id,{id}]',
            'errors' => [
                'required' => 'Nomor Izin Praktek harus diisi',
                'is_unique' => 'Nomor Izin Praktek sudah terdaftar'
            ]
        ],
    ];
}
