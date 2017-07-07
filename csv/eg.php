<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/7/5
 * Time: 上午10:27
 */

/**
 * 本示例适用于web访问
 */



exportCsv('eg.csv', "1,2\n3,4\n");


function exportCsv($filename, $data)
{
    header("Content-type:text/csv");
    header("Content-Disposition:attachment;filename=" . $filename);
    header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
    header('Expires:0');
    header('Pragma:public');
    exit($data);
}

/**
 * 配合
 * flock食用更佳
 */
