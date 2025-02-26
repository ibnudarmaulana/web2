<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function get_all_users($id = NULL)
    {
        if($id == NULL){
            return $this->db->get('users')->result_array();
        }else{
            return $this->db->get_where('users',['id' => $id])->result_array();
        }
    }

    public function insert_users($data)
    {
        $this->db->insert('users',$data);
        return $this->db->affected_rows();
    }

    public function update_users($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return $this->db->affected_rows();
    }

    public function delete_users($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
        return $this->db->affected_rows();
    }
    
}