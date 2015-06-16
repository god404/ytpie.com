<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->uri->segment(1) == 'admin'){
            $this->is_login();
            if(!in_array($this->uri->segment(2), array('login')))$this->assign('admin_name',$_SESSION['admin_name']);
            if($this->uri->segment(2)){
                $this->assign('c',$this->uri->segment(2));
                if($this->uri->segment(3)){
                    $this->assign('f',$this->uri->segment(3));
                }else{
                    $this->assign('f','index');
                }
            }else{
                $this->assign('c','welcome');
                $this->assign('f','index');
            }
        }else{
            $navs = $this->get_nav();
            $this->assign('navs',$navs);
        }
    }
    protected function assign($tpl_var, $value = null, $nocache = false) {
        $this->smarty->assign($tpl_var,$value,$nocache);
    }
    protected function display($template = null, $cache_id = null, $compile_id = null, $parent = null) {
        if($template == null){
            if($this->uri->segment(1) == 'admin'){
                $template = 'admin/welcome.tpl';
            }elseif($this->uri->segment(2)){
                $template = $this->uri->segment(1).'/'.$this->uri->segment(2).'.tpl';
            }else{
                $template = $this->uri->segment(1).'/index.tpl';
            }
        }
        $this->smarty->display($template, $cache_id, $compile_id, $parent);
    }
    protected function get_nav()
    {
        $query = $this->db->get('cats');
        return $query->result_array();
    }
    protected function is_login(){
        if((!isset($_SESSION['admin']) || !$_SESSION['admin']) && !in_array($this->uri->segment(2), array('login'))){
            redirect('/admin/login/', 'location', 301);
        }
    }
}
