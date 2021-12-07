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

function sruput(){
$green = "\e[1;32m";
$blue = "\e[1;34m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
$purple = "\e[1;35m";
$gray = "\e[1;30m";

echo$white." Sruput name      : ".$green."    MINELTC\n";
echo$white." Wallet           : ".$blue."    Faucet".$cyan."Pay".$ye."\n";
echo$white." Sruput ver       : ".$green."    1.0 Beta\n";
echo$white." Created by       : ".$green."    IzhalAkbar\n";
echo$white." Supported by     : ".$green."    Telegram \n";
echo$white." Beta Version     : ".$green."    1.0\n";

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
sruput();
strip();
echo$white." Your Email       $red:     $white $email\n" ;
echo$white." Your Ballance    $red:     $white $ball LTC\n";
strip();


echo "\n\n";
//Collect Reward
while(true){
$url = "https://mineltc.cf/inc/data.php";
$data = 5000000;
$collect = post($url,$ua,$data);

$claimsukses = "Collected Successfully!";
$claimfailed = "You can Collect minimum 0.00000050";
$claimerror = "Data not transferred!";
$tmr = $timer;
$data = $claim;

//Collect info
if ($claim >=10010) {
  echo "$claimsukses   | + $ball \n";
} elseif ($claim==10010) {
  echo "$claimsukses   | + $ball \n";
} elseif ($tmr <=1) {
  echo "$claimsukses   | + $ball \n";
} elseif ($claim=='Failed') {
  echo "    $claimfailed  \n";
} else {
  echo "    $claimerror \n";
}


echo "\n";
//Timer
for ($i=$tmr;$i>-1;$i--)
{
  echo "\r                                   \r";
  echo "\033[0;32m  • Tunggu Boss   "."\033[0;37m[ "."\033[0;32m".$i."\033[0;37m ]";
if($i==60 or $i==56 or $i==50 or $i==46 or $i==40 or $i==36 or $i==30 or $i==26 or $i==20 or $i==5){echo " .";};
if($i==58 or $i==55 or $i==49 or $i==44 or $i==39 or $i==33 or $i==28 or $i==23 or $i==10 or $i==1){echo " ..";};
if($i==40 or $i==32 or $i==27 or $i==20 or $i==15 or $i==13 or $i==11 or $i==8 or $i==5 or $i==0){echo " ...\r";}
   sleep(1);
}

}









