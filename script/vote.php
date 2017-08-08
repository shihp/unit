<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/8/8
 * Time: 下午4:21
 */

function curl_post($url, $param, array $ext_curl_opt = null, $method = 'post', $json_options = 0)
{
    $method = strtolower($method);
    $ch = null;
    try {
        if ($method == 'post')
            $curl_opt = [CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_POSTFIELDS => http_build_query($param), CURLOPT_URL => $url];
        else if ($method == 'postbody')
            $curl_opt = [CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_POSTFIELDS => $param, CURLOPT_URL => $url, CURLOPT_HTTPHEADER => ["content-type: application/x-www-form-urlencoded;charset=UTF-8"]];

        else if ($method == 'json')
            $curl_opt = [CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_POSTFIELDS => json_encode($param, $json_options), CURLOPT_URL => $url, CURLOPT_HTTPHEADER => ['Content-Type: application/json']];
        else if ($method == 'get')
            $curl_opt = [CURLOPT_RETURNTRANSFER => 1, CURLOPT_URL => $url . '?' . http_build_query($param)];
        else
            throw new Exception('Method not support.');

        if ($ext_curl_opt != null && !empty($ext_curl_opt)) {
            $curl_opt = $curl_opt + $ext_curl_opt;
        }

        $ch = curl_init();
        curl_setopt_array($ch, $curl_opt);

        $data = curl_exec($ch);
        if ($data === FALSE) {
            throw new Exception('Curl return false and curl_errno: ' . curl_errno($ch));
        }

        curl_close($ch);
        return $data;

    } catch (Exception $e) {
        if ($ch != null) curl_close($ch);
        return FALSE;
    }
}

$url = 'http://w.cn/api/v1/photovote/vote';
$num = 800;
for($i=0;$i<800;$i++){
    $num--;
    for ($j=0;$j<3;$j++){
        $data = ['joiner_id'=>8052654, 'open_id'=>'oZ7IH1cf7jC8W-2TR3zHEAhHf'.$num];

        $info = curl_post($url,  $data);
        var_dump($info);
    }
}



