<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		EllisLab Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/config.html
 */
class MY_Model extends CI_Model {

	/**
	 * Class constructor
	 *
	 * @return	void
	 */
    protected $table;

	public function __construct()
	{
        parent::__construct();
        $this->table = strtolower(substr(get_called_class(),0,-6));
	}


	// --------------------------------------------------------------------

	/**
	 * __get magic
	 *
	 * Allows models to access CI's loaded classes using the same
	 * syntax as controllers.
	 *
	 * @param	string	$key
	 */

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
