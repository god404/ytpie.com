<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fetch extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Snoopy');
    }

	public function jp($type = '',$pwd = '')
	{   if($pwd != '874')die;
        $time =  date('Y-m-d H:i:s',time());
        if($type == 'jky'){
            $url = 'http://api.juanpi.com/open/jiukuaiyou';
        }elseif($type == 'jp'){
            $url = 'http://api.juanpi.com/open/juanpi';
        }else{die;}
        include(APPPATH.'libraries/phpQuery.php');
        $this->snoopy->fetch($url);
        $jp_xml = $this->snoopy->results;
        phpQuery::newDocumentXML($jp_xml);
        $items = pq("goodslist")->find("deal");
        $i = $j = $k = 0;
        foreach($items as $val){
            $obj=pq($val);
            $item['tb_url'] = $obj->find('deal_taobao_link')->text();
            $parts = explode("id=", $item['tb_url']);
            $item['num_iid'] = $parts[1];
            if($this->test($item['num_iid'])){$j++;continue;}
            $item['source'] = $obj->find('deal_type')->text();
            $item['cat_name'] = $obj->find('deal_class')->text();
            $item['cat_id'] = $obj->find('deal_class_id')->text();
            $item['shop_type'] = strpos($item['tb_url'],"tmall")!==false?"B":"C";
            $item['title'] = $obj->find('deal_title')->text();
            $item['tb_image'] = $obj->find('deal_image')->text();
            $item['image'] = preg_replace('|http://[^/]+/|','/taobaoimg/',$item['tb_image']);
            $item['price'] = trim(str_replace("元",'',$obj->find('deal_price')->text()));
            $item['cost_price'] = trim(str_replace("元",'',$obj->find('deal_cost_price')->text()));
            $item['coupon_rate']	= round(($item['price']/$item['cost_price'])*10000, 0);
            $item['start_time'] = $obj->find('deal_start_time')->text();
            $item['end_time'] = $obj->find('deal_end_time')->text();
            $item['status'] = 1;
            $item['jp_url'] = $obj->find('deal_link')->text();
            $item['free_shipping'] = $obj->find('deal_is_mail')->text() == '包邮' ? 1:0;
            $item['comment'] = $obj->find('deal_detail')->text();
            if($this->items_model->insert($item)){$i++;}else{$k++;}
        }
        echo "$time type: $type success: $i is set: $j fail: $k \r\n";
	}

    private  function test($iid){
        if(!isset($iid)){return 1;}
        if($this->items_model->is_set(array('num_iid'=>$iid))){return 1;}
        return 0;
    }
}
