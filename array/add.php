<?php/** * Created by IntelliJ IDEA. * User: langlive * Date: 17/1/5 * Time: 下午5:17 *///$arr = '{"link_ios":"PlayFlowViewController","param_ios":{"stream_direction":0,"live_id":"10003651483674159","live_key":"Uxutah","live_url":"rtmp:\/\/video.langlive.com\/live\/10003651483674159","pfid":1000365}}';//var_dump(json_decode($arr,true));$data = ['directory'=>$date, 'dataSource'=>'php', 'batchNo'=>111];/** * 生成签名 */$sign           = '111';$data['sign']   = $sign;var_dump($data);