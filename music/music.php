<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/7/28
 * Time: 下午3:01
 */

$num = 10;
$name = '山丘';
$song_search_api= "http://s.music.qq.com/fcgi-bin/music_search_new_platform?t=0&n={$num}&aggr=1&cr=1&loginUin=0&format=json&inCharset=GB2312&outCharset=utf-8&notice=0&platform=jqminiframe.json&needNewCode=0&p=1&catZhida=0&remoteplace=sizer.newclient.next_song&w=$name";
$res = curl($song_search_api,[],[]);
$res = json_decode($res,true)['data']['song']['list'];

$music_ids = [];
foreach ($res as $_k => $_info){
    $_id_info = explode('|', $_info['f']);
    $music_ids[$_k]['id'] = $_id_info[0];
    $music_ids[$_k]['name'] = $_id_info[1];
    $music_ids[$_k]['singer'] = $_id_info[3];
    $music_ids[$_k]['Album'] = $_info[5];
    $music_ids[$_k]['value'] = $_info['f'];
    $music_ids[$_k]['url'] = "http://ws.stream.qqmusic.qq.com/{$_id_info[0]}.m4a?fromtag=46";
}
var_dump($music_ids);

function curl($url,$header,$data){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}