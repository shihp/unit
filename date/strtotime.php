<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/3/15
 * Time: 下午12:28
 */

//$res = date('Y-m-d',strtotime('-1 day'));
//var_dump($res);

//$date = date('Y-m-d');
//var_dump($date);
//
//$info = date( 'Y-m-d',strtotime('+1 day',strtotime($date)));
//var_dump($info);

date_default_timezone_set('Asia/shanghai');

$time = "Fri Sep 08 2017 00:00:00 GMT+0800";

$info =strtotime($time);
$info =date('Y-m-d H:i:s',$info);
// (中国标准时间)
var_dump($info);
