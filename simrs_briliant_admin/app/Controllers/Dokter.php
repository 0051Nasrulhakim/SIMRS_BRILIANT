<?php

namespace App\Controllers;
use GuzzleHttp\Client;
use PHPUnit\TextUI\XmlConfiguration\Group;

use function PHPSTORM_META\map;
use CodeIgniter\Files\File;

class Dokter extends BaseController
{
    public function __construct()
    {
        helper(['hari','filesystem','form','session']);
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
    public function list_dokter(){
        $respond = $this->curl->request('post', 'http://localhost:2000/dokter/get_dokter');
        $status_code = $respond->getStatusCode();
        $body = $respond->getBody();
        $respon = json_decode($body, true);
        $data = [
            'data' => $respon['data'],
        ];
        return view('page/dokter', $data);
        // dd($body);?
    }
    public function update_dokter(){

    }
    public function simpan_dokter(){
        $kode_dokter = $this->request->getPost('kode_dokter');
        $foto = $this->request->getFile('nama_foto');
        $nama_foto = $kode_dokter.'-'.$foto->getRandomName();
        $foto->move('./assets/img/dokter', $nama_foto);
    
        $data =[
            'kode_dokter' => $kode_dokter,
            'nama_dokter' => $this->request->getPost('nama_dokter'),
            'spesialis' => $this->request->getPost('spesialis'),
            'no_izin_praktek' => $this->request->getPost('no_izin_praktek'),
            'nama_foto' => $nama_foto
        ];

        $respond = $this->curl->request('post', 'http://localhost:2000/dokter/add_dokter', [
            'form_params' => $data
        ]);
        $status_code = $respond->getStatusCode();
        $body = $respond->getBody();
        $respon = json_decode($body, true);
        // session
        session()->setFlashdata('s_add_dokter', 'Data Dokter Berhasil Ditambahkan');
        return redirect()->to(base_url('dokter/list_dokter'));
    }

    public function hapus_dokter(){
        $respond = $this->curl->request('POST', 'http://localhost:2000/dokter/delete_dokter', [
            'json' => [
                'id' => $this->request->getPost('id'),
            ]
        ]);
        $status_code = $respond->getStatusCode();
        $body = $respond->getBody();
        $data = json_decode($body, true);
        return json_encode($data);
    }
}