<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
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
	public function all($page = 1)
	{
        $total = $this->items_model->count_results();

        $per_page = 20;
        $this->load->library('pagination');
        $config['base_url'] = '/all/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $config['first_link'] = '1';
        $config['last_link'] = ceil($config['total_rows']/$config['per_page']);

        $this->pagination->initialize($config);
        $pages = $this->pagination->create_links();

        $item_list = $this->items_model->get(NULL,'id DESC',$per_page,($page-1)*$per_page);
        foreach($item_list as $key=>$val){
            $items[$key] = $val;
            $items[$key]['cost_price'] = number_format($val['cost_price']);
            $items[$key]['price'] = number_format($val['price'],1);
            $items[$key]['coupon_rate'] = number_format($val['coupon_rate']/1000,1);
            $items[$key]['shop_name'] = $val['shop_type'] == 'B' ? '去天猫':'去淘宝';
        }
        $this->assign('pages',$pages);
        $this->assign('h2','今日新品');
        $this->assign('cat_url','index');
        $this->assign('items',$items);
        $this->display('welcome.tpl');
	}
}
