<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestTrait;
use CodeIgniter\RESTful\ResourceController;

class Poli extends ResourceController
{
    use RequestTrait;

    public function __construct()
    {
        $this->Poli = model('App\Models\M_Poli');
        $this->Dokter = model('App\Models\M_Dokter');
        $this->validation = \Config\Services::validation();
    }

    public function index(){
        echo "Error 404 Not Found <br>";
        echo "URL INI TIDAK MENAMPILKAN HALAMAN WEB <br>";
        echo "Silahkan gunakan URL yang benar";
    }

    public function add_poli(){
        $signature = $this->request->getHeader('signature');
        $signature = $signature->getValue();
        $key = env('KEY');
        
        if($signature != $key){
            $data = [
                'status' => 'error',
                'message' => 'Signature tidak valid'
            ];
            return $this->respond($data, 401);
        }else{

            $data = (array)$this->request->getVar();
            $kode_dokter = $this->request->getVar('kode_dokter');
            $cek_dokter = $this->Dokter->where('kode_dokter', $kode_dokter)->where('deleted_at', null)->first();

            if($cek_dokter == null){
                $respond = [
                    'status' => 'error',
                    'message' => 'Kode Dokter tidak ditemukan'
                ];
                return $this->respond($respond, 404);
            }else{
                if(!$this->validation->run($data, 'add_poli_rules')){
                    $data = [
                        'status' => 'error',
                        'message' => $this->validation->getErrors()
                    ];
                    return $this->respond($data, 400);
                }else{
                    $this->Poli->insert($data);
                    $respond = [
                        'status' => 'success',
                        'message' => 'Data berhasil ditambahkan'
                    ];
                    return $this->respond($respond);
                }
            }
        }
    }

    public function get_poli(){
        $signature = $this->request->getHeader('signature');
        $signature = $signature->getValue();
        $key = env('KEY');
        
        if($signature != $key){
            $data = [
                'status' => 'error',
                'message' => 'Signature tidak valid'
            ];
            return $this->respond($data, 401);
        }else{
            $respond = [
                // ambil semua data kecuali deleted_at
                'status' => 'success',
                'message' => 'Data Ditemukan',
                'data' => $this->Poli->where('deleted_at', null)->findAll()
            ];  
            return $this->respond($respond);
        }
    }
    
    public function search_poli(){
        $signature = $this->request->getHeader('signature');
        $signature = $signature->getValue();
        $key = env('KEY');
        
        if($signature != $key){
            $data = [
                'status' => 'error',
                'message' => 'Signature tidak valid'
            ];
            return $this->respond($data, 401);
        }else{
            $param = $this->request->getVar('kode_poli');
            $respond = [
                'status'    => 'success',
                'message'   => 'Data Ditemukan',
                'data'      => $this->Poli->where('kode_poli', $param)->where('deleted_at', null)->first()
            ];
            if($respond['data'] == null){
                $respond = [
                    'status'  => 'error',
                    'message' => 'Data tidak ditemukan',
                    'data'    => 'Null'
                ];
                return $this->respond($respond, 404);
            }else{   
                return $this->respond($respond);
            }
        }
    }

    public function update_poli(){
        $signature = $this->request->getHeader('signature');
        $signature = $signature->getValue();
        $key = env('KEY');
        
        if($signature != $key){
            $data = [
                'status' => 'error',
                'message' => 'Signature tidak valid'
            ];
            return $this->respond($data, 401);
        }else{
            $uid = $this->request->getVar('uid');
            $kode_poli = $this->request->getVar('kode_poli');
            $data = (array)$this->request->getVar();
            if(!$this->validation->run($data, 'add_poli_rules')){
                $data = [
                    'status' => 'error',
                    'message' => $this->validation->getErrors()
                ];
                return $this->respond($data, 400);
            }else{
                $this->Poli->update($uid, $data);
                $respond = [
                    'status' => 'success',
                    'message' => 'Data berhasil diupdate'
                ];
                return $this->respond($respond);
            }
        }
    }

    public function delete_poli(){
        $signature = $this->request->getHeader('signature');
        $signature = $signature->getValue();
        $key = env('KEY');
        
        if($signature != $key){
            $data = [
                'status' => 'error',
                'message' => 'Signature tidak valid'
            ];
            return $this->respond($data, 401);
        }else{
            $uid = $this->request->getVar('uid');
            $data = [
                'deleted_at' => date('Y-m-d H:i:s')
            ];
            $this->Poli->update($uid, $data);

            $respond = [
                'status' => 'success',
                'message' => 'Data berhasil dihapus'
            ];
            return $this->respond($respond);
        }
    }
}