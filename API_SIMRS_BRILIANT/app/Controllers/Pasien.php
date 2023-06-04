<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestTrait;
use CodeIgniter\RESTful\ResourceController;

class Pasien extends ResourceController
{
    use RequestTrait;

    public function __construct()
    {
        $this->Pasien = model('App\Models\M_Pasien');
        $this->validation = \Config\Services::validation();
    }
    
    public function index(){
        echo "Error 404 Not Found <br>";
        echo "URL INI TIDAK MENAMPILKAN HALAMAN WEB <br>";
        echo "Silahkan gunakan URL yang benar";
    }
    
    public function get_pasien()
    {
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
            $data = [
                // ambil semua data kecuali deleted_at diurutkan dari yang terbaru
                'data' => $this->Pasien->where('deleted_at', null)->orderBy('uid', 'DESC')->findAll()
            ];  
            return $this->respond($data);
        }
    }

    public function add_pasien(){
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

            if(!$this->validation->run($data, 'add_pasien_rules')){
                $data = [
                    'status' => 'error',
                    'message' => $this->validation->getErrors()
                ];
                return $this->respond($data, 400);
            }else{
                $this->Pasien->insert($data);
                $data = [
                    'status' => 'success',
                    'message' => 'Data berhasil ditambahkan'
                ];
                return $this->respond($data);
            }
        }
    }
    public function search_uid(){
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
            $input = $this->request->getVar("uid");
            $data = [
                'data' => $this->Pasien->where('uid', $input)->where('deleted_at', null)->first()
            ];

            if($data['data'] == null){
                $data = [
                    'message' => 'Data tidak ditemukan',
                    'data' => 'Null'
                ];
                return $this->respond($data, 404);
            }else{   
                return $this->respond($data);
            }
            
        }
    }

    public function search_norm(){
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
            $input = $this->request->getVar("no_rm");
            $data = [
                'data' => $this->Pasien->where('no_rm', $input)->where('deleted_at', null)->first()
            ];

            if($data['data'] == null){
                $data = [
                    'message' => 'Data tidak ditemukan',
                    'data' => 'Null'
                ];
                return $this->respond($data, 404);
            }else{   
                return $this->respond($data);
            }
            
        }
    }
    
    public function search_nobpjs(){
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
            $input = $this->request->getVar("no_bpjs");
            $data = [
                'message' => 'success',
                'data' => $this->Pasien->where('no_bpjs', $input)->where('deleted_at', null)->first()
            ];

            if($data['data'] == null){
                $data = [
                    'message' => 'Data tidak ditemukan',
                    'data' => 'Null'
                ];
                return $this->respond($data, 404);
            }else{   
                return $this->respond($data);
            }

        }
    }

    public function update_pasien(){
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
            if(!$this->validation->run($data, 'add_pasien_rules')){
                $data = [
                    'status' => 'error',
                    'message' => $this->validation->getErrors()
                ];
                return $this->respond($data, 400);
            }else{
                $this->Pasien->update($data['uid'], $data);
                $data = [
                    'status' => 'success',
                    'message' => 'Data berhasil diupdate'
                ];
                return $this->respond($data);
            }
        }
    }
    
    public function delete_pasien(){
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
            $uid = $this->request->getVar("uid");
            $data = [
                'deleted_at' => date('Y-m-d H:i:s')
            ];
            $this->Pasien->update($uid, $data);

            $data = [
                'status' => 'success',
                'message' => 'Data berhasil dihapus'
            ];

            return $this->respond($data);
        }
    }
}
