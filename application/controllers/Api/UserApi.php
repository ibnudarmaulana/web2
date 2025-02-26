<?php

use chriskacerguis\RestServer\RestController;

defined('BASEPATH') OR exit('No direct script access allowed');

class UserApi extends RestController{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model', 'users');
    }

    public function index_get() {
        $id = $this->get('id');
        $users = $this->users->get_all_users($id);
        $this->response([
            "status" => "true",
            "message" => "Data berhasil diambil",
            "data" => $users
        ], self::HTTP_OK);
    }

    public function index_post() {
        $data = [
            "username" => $this->post("username"),
            "password" => $this->post("password"),
            "nama" => $this->post("nama"),
        ];

        $saved = $this->users->insert_users($data);
        if($saved > 0){
            $this->response([
                "status" => "true",
                "message" => "Data berhasil ditambahkan",
            ], self::HTTP_CREATED);
        }else{
            $this->response([
                "status" => "true",
                "message" => "Data gagal ditambahkan",
            ], self::HTTP_BAD_REQUEST);
        }
    }

    public function index_put() {
        $id = $this->put("id");
        $data = [
            "username" => $this->put("username"),
            "password" => $this->put("password"),
            "nama" => $this->put("nama"),
        ];

        $updated = $this->users->update_users($id, $data);
        if($updated > 0){
            $this->response([
                "status" => "true",
                "message" => "Data berhasil diupdate",
            ], self::HTTP_OK);
        }else{
            $this->response([
                "status" => "false",
                "message" => "Data gagal diupdate",
            ], self::HTTP_BAD_REQUEST);
        }
    }

    public function index_delete() {
        $id = $this->delete("id");

        if ($id === null) {
            $this->response([
                "status" => "false",
                "message" => "ID tidak ditemukan",
            ], self::HTTP_BAD_REQUEST);
            return;
        }

        $deleted = $this->users->delete_users($id);
        if ($deleted > 0) {
            $this->response([
                "status" => "true",
                "message" => "Data berhasil dihapus",
            ], self::HTTP_OK);
        } else {
            $this->response([
                "status" => "false",
                "message" => "ID tidak ditemukan",
            ], self::HTTP_BAD_REQUEST);
        }
    }
}
