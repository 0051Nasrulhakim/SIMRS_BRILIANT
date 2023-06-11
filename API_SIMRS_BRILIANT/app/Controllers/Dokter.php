<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestTrait;
use CodeIgniter\RESTful\ResourceController;

class Dokter extends ResourceController
{
    use RequestTrait;
    public function __construct()
    {
        $this->Dokter = model('App\Models\M_Dokter');
        $this->validation = \Config\Services::validation();        
    }

    public function index()
    {
        echo "Error 404 Not Found <br>";
        echo "URL INI TIDAK MENAMPILKAN HALAMAN WEB <br>";
        echo "Silahkan gunakan URL yang benar";
    }

    public function get_dokter(){
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
                'data' => $this->Dokter->where('deleted_at', null)->findAll()
            ];  
            return $this->respond($respond);
        }
    }

    public function add_dokter(){
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
            $uid = $this->request->getVar('uid');
            if(!$this->validation->run($data, 'add_dokter_rules')){
                $data = [
                    'status' => 'error',
                    'message' => $this->validation->getErrors()
                ];
                return $this->respond($data, 400);
            }else{
                $this->Dokter->insert($data);
                $respond = [
                    'status' => 'success',
                    'message' => 'Data berhasil ditambahkan'
                ];
                return $this->respond($respond);
            }
        }
    }

    public function search_dokter(){
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
            $param = $this->request->getVar('id');
            $respond = [
                'status'    => 'success',
                'message'   => 'Data Ditemukan',
                'data'      => $this->Dokter->where('id', $param)->where('deleted_at', null)->first()
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

    public function search_nomor_praktek(){
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
            $param = $this->request->getVar('no_izin_praktek');
            $respond = [
                'status'    => 'success',
                'message'   => 'Data Ditemukan',
                'data'      => $this->Dokter->where('no_izin_praktek', $param)->where('deleted_at', null)->first()
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

    public function update_dokter(){
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
            $id = $this->request->getVar('id');
            $data = (array)$this->request->getVar();
            if(!$this->validation->run($data, 'add_dokter_rules')){
                $data = [
                    'status' => 'error',
                    'message' => $this->validation->getErrors()
                ];
                return $this->respond($data, 400);
            }else{
                $this->Dokter->update($id, $data);
                $respond = [
                    'status' => 'success',
                    'message' => 'Data berhasil diupdate'
                ];
                return $this->respond($respond);
            }
        }
    }
    public function delete_dokter(){
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
            $id = $this->request->getVar("id");
            $data = [
                'deleted_at' => date('Y-m-d H:i:s')
            ];
            $this->Dokter->update($id, $data);

            $data = [
                'status' => 'success',
                'message' => 'Data berhasil dihapus'
            ];

            return $this->respond($data);
        }
    }

}