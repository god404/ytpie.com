<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once( APPPATH.'third_party/smarty/Smarty.class.php' );
date_default_timezone_set("Asia/Shanghai");
class CI_Smarty extends Smarty {

    function __construct()
    {
        parent::__construct();

        $this->caching = false;
        $this->setTemplateDir(APPPATH . 'views/templates'); //设定所有模板文件都需要放置的目录地址。
        //$this->setConfigDir(APPPATH . 'views/configs'); //设定用于存放模板特殊配置文件的目录，
        //$this->setCacheDir(APPPATH . 'views/cache'); //在启动缓存特性的情况下，这个属性所指定的目录中放置Smarty缓存的所有模板
        //$this->setPluginsDir(APPPATH . 'views/plugins'); //插件目录
        $this->setCompileDir(APPPATH . 'views/templates_c'); //设定Smarty编译过的所有模板文件的存放目录地址
    }
}
// END Smarty Class