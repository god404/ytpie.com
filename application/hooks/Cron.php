<?php
function cron()
{
    $f = @fopen('cron/cron.lock','w');
    if(@flock($f,LOCK_EX|LOCK_NB)){
        @flock($f,LOCK_UN);
        $fp = @fsockopen($_SERVER['SERVER_NAME'], 80, $errno, $errstr, 0.0001);
        if (!$fp) {
            //echo "$errstr ($errno)<br />\n";
        } else {
            $out = "GET /cron/cron.php / HTTP/1.1\r\n";
            $out .= "Host: ".$_SERVER['SERVER_NAME']."\r\n";
            $out .= "Connection: Close\r\n\r\n";
            fwrite($fp, $out);
            fclose($fp);
        }
    }
    fclose($f);
}