<?php
class Admin_model extends MY_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function login($email, $password)
    {
        $this->db->where(array('email' => $email,'password' => md5($password)));
        $query = $this->db->get('admin');
        return $query->row_array();
    }
}