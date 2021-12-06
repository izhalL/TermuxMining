<?php
//------------Mineltc------------//
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

$ua = array(
"user-agent:".$useragent,
"cookie:".$cookie
);

function pt($awal,$akhir){
   global $get;
   $a = explode ($awal, $get);
   $a = explode($akhir,$a[1])[0];
   return $a;
}

//login
$url = "https://mineltc.cf/user/home";
get($url,$ua);
$get = get($url,$ua);
$email = pt('<h3>USER: ','<br>');
$timer = pt('var _second = ',';');


$url = "https://mineltc.cf/user/pay";
get($url,$ua);
$get = get($url,$ua);
$bl = explode('<span>',$get)[1];
$ball = explode('</span> ',$bl)[0];

strip();
echo "
$white Your Email      $red:     $white $email
$white Your Ballance   $red:     $white $ball LTC
";
strip();

echo "\n\n";
//Collect Reward
while(true){
$url = "https://mineltc.cf/inc/data.php";
$data = 5000000;
$collect = post($url,$ua,$data);
$tmr = $timer;

$claimsukses = "Collected Successfully!";
$claimfailed = "You can Collect minimum 0.00000050";
$claimerror = "Data not transferred!";

//Collect info

if($data > 0){
  if($tmr<=1)
  echo " $claimsukses | [+]$ball \n";
} else if($data=='Failed'){
  echo " $claimfailed \n";
  } else{
    echo " $claimerror \n";
}

echo "\n";
//Timer
for($x=$tmr;$x>-1;$x--){echo "\r \r";
echo$blue." Updating your balance in ".$red."[".$yellow.$x.$red."] ".$green."seconds ☕🚬";
echo "\r \r";
sleep(1);
  
}

}










