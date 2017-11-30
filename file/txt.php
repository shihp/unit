<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/8/31
 * Time: 下午3:58
 */
$fp = fopen('file.txt', 'w');
$j      = 0;
$info   = '';
for ($i = 10000000; $i <= 10100000; $i++) {
    //if($j == 1000){
    //    fwrite($fp, $info);
    //    $info   = '';
    //    $j      = 0;
    //}else{
    //    $info .= $i.',';
    //}
    //$j++;
    $info.=$i.',';

}
fwrite($fp, $info);
fclose($fp);

?>