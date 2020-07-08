<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function getUser($username){
        $query= $this->db->query("SELECT * FROM users WHERE username= '$username'");
        return $query->result();
    }

    public function getData($id){
        $query= $this->db->query('SELECT * FROM users WHERE `id`='.$id);
        return $query->row();
    }

    public function updateData($id){
        $data= array (
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'pass' => $this->input->post('password')
        );
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    public function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

}
