<?php

namespace App\Controllers;
use GuzzleHttp\Client;
use PHPUnit\TextUI\XmlConfiguration\Group;

use function PHPSTORM_META\map;

class Pasien extends BaseController
{
    public function __construct()
    {
        helper('hari');
        $options = [
            'http_errors' => false,
            'headers' => [
                'Content-Type' => 'application/json',
                'signature' => '192400051',
                'Accept' => 'application/json',
            ],
    
        ];
        $this->curl = \Config\Services::curlrequest($options);
    }
    public function index()
    {
        return view('welcome_message');
    }

    public function list_pasien(){
        $respond = $this->curl->request('post', 'http://localhost:2000/pasien/get_pasien');
        $status_code = $respond->getStatusCode();
        $body = $respond->getBody();
        $respon = json_decode($body, true);

        $norm = array_map(function($data){
            return $data['no_rm'];
        }, $respon['data']);
        $norm = max($norm);
   
        $data = [
            'data' => $respon['data'],
            'norm' => $norm = $norm + 1
        ];
        return view('page/pasien', $data);
    }

    public function simpan_pasien(){
        $data = [
            'no_bpjs' => $this->request->getPost('nomor_bpjs'),
            'no_rm' => $this->request->getPost('no_rm'),
            'nama_pasien' => $this->request->getPost('nama_pasien'),
            'nik' => $this->request->getPost('nik'),
            'jaminan_kesehatan' => $this->request->getPost('jaminan_kesehatan'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'gol_darah' => $this->request->getPost('gol_darah'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'status_menikah' => $this->request->getPost('status_menikah'),
            'agama' => $this->request->getPost('agama'),
            'pendidikan_terakhir' => $this->request->getPost('pendidikan_terakhir'),
            'nama_ibu' => $this->request->getPost('nama_ibu'),
            'nama_ayah' => $this->request->getPost('nama_ayah'),
            'tanggal_daftar' => date('Y-m-d'),
        ];
        $respond = $this->curl->request('post', 'http://localhost:2000/pasien/add_pasien', [
            'json' => $data
        ]);
        $status_code = $respond->getStatusCode();
        $body = $respond->getBody();
        $data = json_decode($body, true);
        return redirect()->to(base_url('pasien/list_pasien'));
    }

    public function lihat_pasien(){
        $respond = $this->curl->request('post', 'http://localhost:2000/pasien/search_uid', [
            'json' => [
                'uid' => $this->request->getPost('uid')
            ]
        ]);
        $status_code = $respond->getStatusCode();
        $body = $respond->getBody();
        $data = json_decode($body, true);
        return json_encode($data['data']);
    }
    public function update_pasien(){
        $data = [
            'uid' => $this->request->getPost('uid'),
            'no_bpjs' => $this->request->getPost('nomor_bpjs'),
            'no_rm' => $this->request->getPost('no_rm'),
            'nama_pasien' => $this->request->getPost('nama_pasien'),
            'nik' => $this->request->getPost('nik'),
            'jaminan_kesehatan' => $this->request->getPost('jaminan_kesehatan'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'gol_darah' => $this->request->getPost('gol_darah'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'status_menikah' => $this->request->getPost('status_menikah'),
            'agama' => $this->request->getPost('agama'),
            'pendidikan_terakhir' => $this->request->getPost('pendidikan_terakhir'),
            'nama_ibu' => $this->request->getPost('nama_ibu'),
            'nama_ayah' => $this->request->getPost('nama_ayah'),
            'tanggal_daftar' => date('Y-m-d'),
        ];

        $respond = $this->curl->request('post', 'http://localhost:2000/pasien/update_pasien', [
            'json' => $data
        ]);
        $status_code = $respond->getStatusCode();
        $body = $respond->getBody();
        if($status_code == 200){
            $data = json_decode($body, true);
            return json_encode($data);
        }else{
            $data = json_decode($body, true);
            $respon = [
                'status' => $status_code,
                'message' => $data['message']
            ];
            return json_encode($respon);
        }
    }

    public function hapus_pasien(){
        $respond = $this->curl->request('post', 'http://localhost:2000/pasien/delete_pasien', [
            'json' => [
                'uid' => $this->request->getPost('uid'),
                // 'deleted_at' => date('Y-m-d')
            ]
        ]);
        $status_code = $respond->getStatusCode();
        $body = $respond->getBody();
        $data = json_decode($body, true);
        return json_encode($data);
    }
}
