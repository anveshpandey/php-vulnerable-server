<?php
define("CSRF_Token_Secret", 'shfkss1234214fsfjlksjfjl234432sflkjlasfl'); //Key to encrypte the token

function createToken() { //For generating Token
    $seed = random_bytes(8);
    $t= time();
    $hash = hash_hmac('sha256', session_id(). $seed . $t, CSRF_Token_Secret,true);
    return urlSafeEncode($hash . '|' . $seed . '|' . $t);
}

function validateToken($token) { // Validating token coming from client side
 $part=explode('|', urlSafeDecode($token));
 if(count($part)===3){
    $hash= hash_hmac('sha256', session_id() . $part[1] . $part[2], CSRF_Token_Secret,true);
    if(hash_equals($hash, $part[0])) {
        return true;
    }
 }
 else {
 return false;
 }
 }

function urlSafeEncode($m){
    return rtrim(strtr(base64_encode($m),  '+/', '-_' ),'=');
}

function urlSafeDecode($token){
    return base64_decode(strtr($token,'-_','+/'));
}
?>