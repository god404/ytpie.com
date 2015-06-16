<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

	/**
	 * Index Pag for this controller.
	 *e
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function index()
    {
        $items = $this->admin_model->get();
        $this->assign('items',$items);
        $this->display();
    }
    public function edit($id = '')
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if($this->input->post('id')){
            if ($this->form_validation->run()){
                $where = array('id' => $this->input->post('id'));
                $data = array('username' => $this->input->post('username'), 'email' => $this->input->post('email'), 'password' => md5($this->input->post('password')));
                if($this->admin_model->update($where, $data)){
                    $alert = array('level' => 'success', 'text' => $this->lang->line('opt_success'));
                }else{
                    $alert = array('level' => 'danger', 'text' => $this->lang->line('opt_fail'));
                }
            }else{
                $alert = array('level' => 'warning', 'text' => validation_errors());
            }
            $this->assign('alert',$alert);
        }
        $item = $this->admin_model->get_first(array('id' => $id));
        $this->assign('item',$item);
        $this->display();
    }
    public function delete($id = '')
    {
        if($id){
            $this->admin_model->delete(array('id' => $id));
            redirect('/admin/admin/');
        }
    }

}
