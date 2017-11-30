<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/9/20
 * Time: 上午10:45
 */

date_default_timezone_set('America/New_York');
//$table_suff = 902209 % 32;
//
//echo $table_suff.PHP_EOL;
//
//
//$string = "2017-09-11 14:26:15";
////echo date('Y-m-d',strtotime($string));
//
//echo sprintf("%.2f",0).PHP_EOL;
//
//
//$time = strtotime('2017-09-21 00:00:00');
//var_dump($time);
//$time = strtotime('2017-09-30 23:59:59');
//var_dump($time);
//
//var_dump(time());


//var_dump(floatval('11.2.2'));
//
//
//if('3.2.2' > '3.2.0'){
//    var_dump(1);
//}else{
//    var_dump(2);
//}


$time = strtotime('2017-09-23 15:51:43');
$date = date('Y-m-d',$time);
//var_dump($date);exit;
//var_dump($time);exit;


$expire_data = date('Y-m-d', intval(strtotime("2017-09-23 15:51:43"))+ 2764800);
//var_dump($expire_data);exit;


$data = sprintf("%.2f", 100 * 0.1 * 60 / 365);
var_dump($data);