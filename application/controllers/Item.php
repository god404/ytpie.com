<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends MY_Controller {
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
	public function index($id)
	{
        $item = $this->items_model->get_first(array('id' => $id));
        $cat = $this->cats_model->get_first(array('cat_id' => $item['cat_id']));
        $item['cost_price'] = number_format($item['cost_price']);
        $item['price'] = number_format($item['price'],1);
        $item['coupon_rate'] = number_format($item['coupon_rate']/1000,1);
        $item['shop_name'] = $item['shop_type'] == 'B' ? '去天猫购买':'去淘宝购买';
        $item['shipping'] = $item['free_shipping'] == 1 ? '[包邮]':'';
        $this->assign('cat_url',$cat['cat_url']);
        $this->assign('cat_name',$cat['cat_name']);
        $this->assign('item',$item);
        $this->display( 'item.tpl');
	}
    public function click($id)
    {
        $this->items_model->update_click(array('id' => $id));
    }
}
