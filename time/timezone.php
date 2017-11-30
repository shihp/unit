<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/6/26
 * Time: 下午2:10
 */


//$time = time();
//$default_timezone = ini_get('timezone');
//echo $default_timezone.PHP_EOL;

//date_default_timezone_set('America/Los_Angeles');
$time = time();
echo $time.PHP_EOL;
//$default_date =  date('Y-m-d H:i:s',$time);
//var_dump($default_date);

date_default_timezone_set('America/New_York');
$time = time();
echo $time.PHP_EOL;
//$time = strtotime($default_date);
//echo date('Y-m-d H:i:s',$time).PHP_EOL;
//echo $time.PHP_EOL;

//
//date_default_timezone_set('America/New_York');
//$date = '2017-06-26 05:01:01';
//
//var_dump(strtotime($date));


$date = date('Y-m-d',1511280000);
var_dump($date);
