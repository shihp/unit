<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/9/28
 * Time: 上午10:09
 */

$a = "8";
$a = sprintf('%.1f', $a);
$b = explode('.', $a);

//var_dump($b);

$c = (string)$b[0].'.'.substr($b[1], 0, 1);

var_dump($c);