<?php

class Users extends CI_Model{

    function insert($data)
    {
        $this->db->insert('users', $data);
    }
}

?>