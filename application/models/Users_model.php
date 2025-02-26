<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function get_all_users()
    {
       return $this->db->get('users')->result_array();
    }
}