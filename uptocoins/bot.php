<?php
//------------UptoCoins------------//
error_reporting(0);
$green = "\e[1;32m";
$blue = "\e[1;34m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
$purple = "\e[1;35m";
$gray = "\e[1;30m";
include('cfg.php');
system('clear');
sleep(2);

function strip(){
$green = "\e[1;32m";
$blue = "\e[1;34m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
$purple = "\e[1;35m";
$gray = "\e[1;30m";

echo$red."≠".$gray."=".$green."==".$green."==".$blue."==".$white."==".$yellow."==".$cyan."==".$purple."==".$gray."==".$red."==".$green."==".$blue."==".$white."==".$yellow."==".$cyan."==".$purple."==".$gray."==".$red."==".$green."==".$blue."==".$white."==".$yellow."==".$cyan."==".$purple."==".$gray."==".$green."==".$red."≠";
}

function get($url,$ua){
    //header sc
$cf = curl_init();
$array = array(
    CURLOPT_URL => $url, 
    CURLOPT_RETURNTRANSFER=> true,
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_HTTPHEADER => $ua,
    CURLOPT_COOKIEJAR => "cookie.txt",
    CURLOPT_COOKIEFILE => "cookie.txt",
    CURLOPT_ENCODING => "gzip"
    );
$ar = curl_setopt_array($cf, $array);
$get = curl_exec($cf);
return $get;}
function post($url,$ua,$data){
    //header sc
$cf = curl_init();
$array = array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER=> true,
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_HTTPHEADER => $ua,
    CURLOPT_COOKIEJAR => "cookie.txt",
    CURLOPT_COOKIEFILE => "cookie.txt",
    CURLOPT_ENCODING => "gzip",
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data
    );
$ar = curl_setopt_array($cf, $array);
$get = curl_exec($cf);
return $get;}


function pt($awal,$akhir){
   global $get;
   $a = explode ($awal, $get);
   $a = explode($akhir,$a[1])[0];
   return $a;
}


while(true){
$url = $url_claim_fp;
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie_fp];
$get = get($url, $ua);
$tmrfp = pt('Time until next payout: ',' sec');


$url = $url_claim_ec;
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie_ec];
$get = get($url,$ua);
$tmrec = pt("countdown('","',");


echo$yellow."\r Wait to pay".$blue." Faucet".$cyan."Pay : ".$green.$tmrfp.$yellow." || ".$white."Express".$red."Crypto : ".$green.$tmrec."  \r";
sleep(1);

if($tmrfp < 1){

$url = $url_claim_fp;
get($url,$ua);
$get = get($url,$ua);


echo$green."Success sent payment to your ".$blue."Faucet".$cyan."Pay".$green." account    \n";

}else if($tmrec < 1){

$url = $url_claim_fp;
get($url,$ua);
$get = get($url,$ua);

echo$green."Success sent payment to your ".$white."Express".$red."Crypto".$green." account    \n";

}

}
