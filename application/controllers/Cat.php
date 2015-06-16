<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once( APPPATH.'libraries/MY_Controller.php' );
class Cat extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }
	public function get($cat_url,$page = 1)
	{
        $cat = $this->cats_model->get_first(array('cat_url'=>$cat_url));
        if(!$cat)show_404();
        $cat_name = $cat['cat_name'];
        $cat_id = $cat['cat_id'];

        $total = $this->items_model->count_results(array('cat_id'=>$cat_id));

        $per_page = 20;
        $this->load->library('pagination');
        $config['base_url'] = "/$cat_url/";
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $config['first_link'] = '1';
        $config['last_link'] = ceil($config['total_rows']/$config['per_page']);
        $this->pagination->initialize($config);
        $pages = $this->pagination->create_links();

        $item_list = $this->items_model->get(array('cat_id'=>$cat_id),'id DESC',$per_page,($page-1)*$per_page);
        foreach($item_list as $key=>$val){
            $items[$key] = $val;
            $items[$key]['cost_price'] = number_format($val['cost_price']);
            $items[$key]['price'] = number_format($val['price'],1);
            $items[$key]['coupon_rate'] = number_format($val['coupon_rate']/1000,1);
            $items[$key]['shop_name'] = $val['shop_type'] == 'B' ? '去天猫':'去淘宝';
        }
        $this->assign('pages',$pages);
        $this->assign('h2',$cat_name);
        $this->assign('cat_url',$cat_url);
        $this->assign('items',$items);
        $this->display( 'welcome.tpl');
	}
}
