<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/9/6
 * Time: 下午5:37
 */
$file = file_get_contents('./uids.txt');
$arr = explode(',', $file);
$file = json_encode($arr);
var_dump($arr);