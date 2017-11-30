<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/10/14
 * Time: 下午6:07
 */
$data = '[{"id":"J-101","prod_status":"1","batch_status":"1","success":true}]';

//var_dump(json_decode($data));
$info = json_decode($data,true)[0];
var_dump($info);
