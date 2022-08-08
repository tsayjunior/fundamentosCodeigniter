<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model
{

    public function getUsers()
    {

        $this->db->selected('*');
        $this->db->from('users');
        $query = $this->db->get();

        return $query->result();
    }
}
