<?php

namespace App\Controllers;
use GuzzleHttp\Client;
use PHPUnit\TextUI\XmlConfiguration\Group;

use function PHPSTORM_META\map;

class Dokter extends BaseController
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
    public function list_dokter(){
        $respond = $this->curl->request('post', 'http://localhost:2000/dokter/get_dokter');
        $status_code = $respond->getStatusCode();
        $body = $respond->getBody();
        $respon = json_decode($body, true);
        $data = [
            'data' => $respon['data'],
        ];
        return view('page/dokter', $data);
        // dd($body);?\
    }
    public function update_dokter(){

    }
    public function simpan_dokter(){

    }
    public function delete_dokter(){

    }
}