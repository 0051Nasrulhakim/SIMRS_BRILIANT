<?php

namespace App\Controllers;
use GuzzleHttp\Client;
use PHPUnit\TextUI\XmlConfiguration\Group;

use function PHPSTORM_META\map;

class Poli extends BaseController
{
    public function __construct()
    {
        helper(['hari','value']);
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
    
    public function list_poli(){
        $respond = $this->curl->request('post', 'http://localhost:2000/poli/get_poli');
        $status_code = $respond->getStatusCode();
        $body = $respond->getBody();
        $respon = json_decode($body, true);
        // dd($respon);
        return view('page/poli', $respon);
    }
    public function get_kodeDokter(){
        $respond = $this->curl->request('post', 'http://localhost:2000/dokter/get_kodeDokter');
        $status_code = $respond->getStatusCode();
        $body = $respond->getBody();
        // $respon = json_decode($body, true);
        
        return $body;
    }

    public function add_poli(){
        $respond = $this->curl->request('post', 'http://localhost:2000/poli/add_poli',[
            'json' => [
                'kode_poli' => $this->request->getPost('kode_poli'),
                'nama_poli' => $this->request->getPost('nama_poli'),
                'kode_dokter' => $this->request->getPost('kode_dokter'),
                'hari' => $this->request->getPost('hari'),
                'jam_mulai' => $this->request->getPost('jam_mulai'),
                'jam_selesai' => $this->request->getPost('jam_selesai'),
            ]
        ]);
        $body = $respond->getBody();
        return $body;
    }

    public function edit_poli(){

    }

    public function delete_poli(){

    }
}