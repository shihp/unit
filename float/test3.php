<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/11/2
 * Time: 上午10:26
 */


$v['account'] = 300;
$v['borrow_apr'] = 10;
$v['time_limit'] = 7;

//var_dump(sprintf('%.2f',0.42));exit;

//var_dump(sprintf("%.2f", floatval($v['account'] * $v['borrow_apr'] * $v['time_limit'] / 100 / 365) ));exit;

//var_dump($v['account'] * $v['borrow_apr'] * $v['time_limit'] / 100 / 365);exit;

var_dump(sprintf("%.2f", $v['account'] * $v['borrow_apr'] * $v['time_limit'] / 100 / 365));exit;

$add =sprintf("%.2f", $v['account'] * $v['borrow_apr'] * $v['time_limit'] / 100 / 365);
var_dump($add);exit;

$v['account'] = 100;
$v['borrow_apr'] = 10;
$v['time_limit'] = 7;

$abc = $v['account'] * $v['borrow_apr'] * $v['time_limit'] / 100 / 365;


$d = sprintf("%.5f", $v['account'] * $v['borrow_apr'] * $v['time_limit'] / 100 / 365);
var_dump($d);
$last_data = substr($d,-1,1);

var_dump($last_data);


exit;



if($last_data != 0){
    $d = floatval(sprintf("%.2f", $v['account'] * $v['borrow_apr'] * $v['time_limit'] / 100 / 365)) + 0.01;
}
var_dump($last_data);


