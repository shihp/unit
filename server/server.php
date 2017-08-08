<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/7/19
 * Time: 下午9:55
 */
function ClientIp()
{
    $cIP = getenv($_SERVER['REMOTE_ADDR']);
    $cIP1 = getenv($_SERVER['HTTP_X_FORWORD_FOR']);
    $cIP2 = getenv($_SERVER['HTTP_CLIENT_IP']);
    return $cIP;
}

function serverIP()
{
    return gethostbyname($_SERVER['SERVER_NAME']);
}

echo ClientIp();
echo serverIP();
