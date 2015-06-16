<?php
ignore_user_abort();
set_time_limit(0);
$f=@fopen('cron.lock','w') or die();
@flock($f,LOCK_EX|LOCK_NB) or die();
$fp = fopen('cron.txt',"a");
while(1) {
    if(!file_exists('reset'))
    {
        $fp = @fopen('reset',"a");
        @fclose($fp);
        die;
    }
    $str = file_get_contents("http://".$_SERVER['SERVER_NAME']."/fetch/jp/jp/874");
    @fwrite($fp,$str);
    sleep(1800);
    $str = file_get_contents("http://".$_SERVER['SERVER_NAME']."/fetch/jp/jky/874");
    @fwrite($fp,$str);
    sleep(1800);
}
@fclose($fp);
?>