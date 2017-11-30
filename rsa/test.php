<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/11/13
 * Time: 上午11:24
 */

/**
 * 公钥文件的路径
 */
$publicKeyFilePath = '/data/51.com/java_rsa/public_key.pem';

extension_loaded('openssl') or die('php需要openssl扩展支持');

file_exists($publicKeyFilePath) or die('公钥的文件路径不正确');

/**
 * 生成Resource类型的公钥，如果公钥文件内容被破坏，openssl_pkey_get_public函数返回false
 */

$publicKey = openssl_pkey_get_public(file_get_contents($publicKeyFilePath));
$publicKey or die('公钥不可用');


$encryptData = 'UkLZe0CkYabNILprsOh+k+YEvS5v1oJXqdzzyQ54UPsWWpz84TiPXHQbdyW7yPxQlsq7VgLNkoD+mhyywutwdZFc9LBbpfenudZ9UGAeRacjxaz0dsiup/UnoDhPgJf/1BHcGbnvrd4oN1Xmppk4obejFTuCeQJ4PiI1ZSiCWtU=';

echo 'java 的加密数据为:', $encryptData, PHP_EOL;

///////////////////////////////公钥解密////////////////////////
/**
 * 解密以后的数据
 */
$decryptData = '';
if (openssl_public_decrypt($encryptData, $decryptData, $publicKey)) {

    echo '解密成功，解密后数据为:', $decryptData, PHP_EOL;

} else {
    echo ('解密失败'.PHP_EOL);
}

/**
 * 加密以后的数据
 */
$originalData = '我的帐号是:123,密码是:456';
if (openssl_public_encrypt($originalData, $encryptData, $publicKey)) {

    echo '加密成功，加密后数据(base64_encode后)为:', base64_encode($encryptData), PHP_EOL;

} else {
    die('加密失败');
}



