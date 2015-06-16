<?php
class Items_model extends MY_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function update_click($where = NULL)
    {
        $this->db->where($where);
        $this->db->set('click','click+1',FALSE);
        $this->db->update('items');
    }
}