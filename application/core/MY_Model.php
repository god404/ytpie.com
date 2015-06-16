<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    protected $table;

	public function __construct()
	{
        parent::__construct();
        $this->table = strtolower(substr(get_called_class(),0,-6));
	}

    public function update($where = NULL, $data = NULL)
    {
        $this->db->where($where);
        return $this->db->update($this->table, $data);
    }
    public function insert($date)
    {
        return $this->db->insert($this->table, $date);
    }
    public function delete($where)
    {
        return $this->db->delete($this->table, $where);
    }
    public function is_set($where)
    {
        $this->db->where($where);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function get($where = NULL, $order = NULL, $limit = NULL, $offset = NULL)
    {
        if($order)$this->db->order_by($order);
        $query = $this->db->get_where($this->table,$where,$limit,$offset);
        return $query->result_array();
    }
    public function get_first($where = NULL)
    {
        $query = $this->db->get_where($this->table,$where);
        return $query->row_array();
    }
    public function count_results($where = NULL)
    {
        if($where)$this->db->where($where);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
