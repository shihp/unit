<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/8/31
 * Time: 下午3:58
 */
$file_name = 'file.txt';
$fp = fopen('file.txt', 'r');
$length = filesize('file.txt');
//$length = file_exists('file.txt');
$info = file_get_contents($file_name);
$arr = explode(',', $info);
var_dump(count($arr));

$data = array_pop($arr);
var_dump($data);

fclose($fp);

?>