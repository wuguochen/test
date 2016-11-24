<?php


function encrypt($code){
    $key = date('YmdH');
    return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $code, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
}
     
function decrypt($code){
    $key = date('YmdH');
    return mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($code), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND));
}

//echo decrypt(urldecode('B3FpFQ7aUyv0BZ0l5T24edEZtfp76pN3V6%2BYgvInHkU%3D'));

new abc();
