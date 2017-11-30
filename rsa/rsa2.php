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
$publicKeyFilePath = '/data/51.com/rsa/rsa_public_key.pem';
/**
 * 密钥文件的路径
 */
$privateKeyFilePath = '/data/51.com/rsa/rsa_private_key.pem';

extension_loaded('openssl') or die('php需要openssl扩展支持');


file_exists($publicKeyFilePath) or die('密钥或者公钥的文件路径不正确');

/**
 * 生成Resource类型的公钥，如果公钥文件内容被破坏，openssl_pkey_get_public函数返回false
 */
$publicKey = openssl_pkey_get_public(file_get_contents($publicKeyFilePath));
$publicKey or die('公钥不可用');

$privateKey = openssl_pkey_get_private(file_get_contents($privateKeyFilePath));
$privateKey or die('私钥不可用');
/**
 * 原数据
 */
$originalData = '我的帐号是:123,密码是:456';
/**
 * 加密以后的数据，用于在网路上传输
 */
$encryptData = '';

echo '原数据为:', $originalData, PHP_EOL;




///////////////////////////////用公钥加密////////////////////////

/**
 * 加密以后的数据
 */

//ENjFzEHbpbz6QWGxb3QWEj/b5535/RFBtw0WJaz1+7ExgyaeK8pkbSzWvFuuf8+rGrEasVE17+vlhGQU8nbvuveDi5+3pe9HuzwqviynoYS0vgusaWUbgjQme8kAgzGvaxF3x7pnp1u1neJtM8C/SJvc43VnO6IPdyl6ad30OOI=
if (openssl_public_encrypt($originalData, $encryptData, $publicKey)) {

    echo '加密成功，加密后数据(base64_encode后)为:', base64_encode($encryptData), PHP_EOL;

} else {
    die('加密失败');
}


///////////////////////////////用私钥解密////////////////////////
/**
 * 解密以后的数据
 */
$decryptData = '';
if (openssl_private_decrypt($encryptData, $decryptData, $privateKey)) {

    echo '解密成功，解密后数据为:', $decryptData, PHP_EOL;

} else {
    die('解密失败');
}

