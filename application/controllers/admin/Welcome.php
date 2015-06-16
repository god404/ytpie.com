<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
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
        $this->display();
    }
	public function login()
	{
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if ($result = $this->admin_model->login($email,$password))
        {
            $_SESSION['admin'] = TRUE;
            $_SESSION['admin_id'] = $result['id'];
            $_SESSION['admin_name'] = $result['username'];
            redirect('/admin/');
        }
        else
        {
            $this->display('admin/login.tpl');
        }

	}
    public function logout()
    {
        unset($_SESSION);
        redirect('/admin/login');
    }
}
