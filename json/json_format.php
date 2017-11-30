<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/9/14
 * Time: 下午5:09
 */

$code = ['lianlian','yibao'];

$json = json_encode($code,JSON_UNESCAPED_UNICODE);

var_dump($json);exit;

var_dump( json_decode($json,true));

