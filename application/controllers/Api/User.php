<?php

use chriskacerguis\RestServer\RestController;

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends RestController{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model', 'users');
    }

    public function index_get() {
        // echo json_encode(["status" => true, "message" => "Get Method"]);
        $users = $this->users->get_all_users();
        $this->response([
            "status" => "true",
            "data" => $users
        ], 200);
    }

    public function index_post() {
        echo json_encode(["status" => true, "message" => "Post Method"]);
    }

    public function index_put() {
        echo json_encode(["status" => true, "message" => "Put Method"]);
    }

    public function index_patch() {
        echo json_encode(["status" => true, "message" => "Patch Method"]);
    }

    public function index_delete() {
        echo json_encode(["status" => true, "message" => "Delete Method"]);
    }
}
