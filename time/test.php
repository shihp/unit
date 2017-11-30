<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/10/17
 * Time: 上午11:13
 */



date_default_timezone_set('Asia/Shanghai');
$ttl = 2966307;
$time_end = $ttl + time();
$date = date('Y-m-d H:i:s',$time_end);
echo $date.PHP_EOL;



//$date = date('Y-m-d H:i:s',1511971200);
//var_dump($date);