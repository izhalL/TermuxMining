<?php
//------------MineUsd------------//
date_default_timezone_set("Asia/Makasar");
include "cfg.php";
error_reporting(0);
$blue="\033[1;34m";
$yellow="\033[1;33m";
$red1="\033[1;31m";
$white="\033[1;37m";
$green="\033[1;32m";
$cyan="\033[1;36m";
$purple="\033[1;35m";
$dark="\033[1;30m";
$abu1="\033[0;90m";
$abu2="\033[1;90m";
$red2="\033[1;91m";
$end="\033[0m";
$blockdark="\033[1;30m";
$blockabu="\033[100m";
$blockmerah="\033[101m";
$blockstabilo="\033[102m";
$blockkuning="\033[103m";
$blockbiru="\033[104m";
$blockpink="\033[105m";
$blockcyan="\033[106m";
$blockputih="\033[107m";
$termux = $cyan.">_ ";
# Background
$On_Black="\033[40m";       # Black
$On_Red="\033[41m";         # Red
$On_Green="\033[42m";       # Green
$On_Yellow="\033[43m";      # Yellow
$On_Blue="\033[44m";        # Blue
$On_Purple="\033[45m";      # Purple
$On_Cyan="\033[46m";        # Cyan
$On_White="\033[47m";       # White
# High Intensty backgrounds
$On_IBlack="\033[0;100m";   # Black
$On_IRed="\033[0;101m";     # Red
$On_IGreen="\033[0;102m";   # Green
$On_IYellow="\033[0;103m";  # Yellow
$On_IBlue="\033[0;104m";    # Blue
$On_IPurple="\033[10;95m";  # Purple
$On_ICyan="\033[0;106m";    # Cyan
$On_IWhite="\033[0;107m";   # White
# Bold High Intensty
$BIBlack="\033[1;90m";      # Black
$BIRed="\033[1;91m";        # Red
$BIGreen="\033[1;92m";      # Green
$BIYellow="\033[1;93m";     # Yellow
$BIBlue="\033[1;94m";       # Blue
$BIPurple="\033[1;95m";     # Purple
$BICyan="\033[1;96m";       # Cyan
$BIWhite="\033[1;97m";      # White

$dot = "\033[104m\033[1;32m•\033[0m";
$dod = "\033[104m\033[1;32m#\033[0m";

if (file_exists("cookie.txt")){unlink("cookie.txt");}
function animasi($str) 
{ 
    $arr = str_split($str); 
    foreach ($arr as $az) { 
        echo $az; 
        usleep(300); 
    } 
}
function cek($str) 
{ 
    $arr = str_split($str); 
    foreach ($arr as $az) { 
        echo $az; 
        usleep(9000); 
    } 
}

system("clear");
animasi (str_repeat($dot,59)."\n");
//animasi ($dot.str_repeat($blockabu." ".$end,17 ).str_repeat($blockabu." ",40).$dot."\n");
animasi ($dot.str_repeat($blockabu." ".$end,17 ).$blockmerah.$BIYellow."🚫 P E R H A T I A N !".str_repeat($blockabu." ",18).$dot."\n");
animasi ($dot.$blockabu.$BIYellow." Program ilegal yang menggunakan sistem bot otomatis dan".str_repeat(" ",1).$dot."\n");
animasi ($dot.$blockabu.$BIYellow." Tindakan Ilegal. Resiko Banned Akun Bisa Saja Terjadi !".str_repeat(" ",1).$dot."\n");
animasi ($dot.$blockabu.$BIYellow." Saya $BIGreen@izhalakbar$BIYellow Selaku Author/Creator Tidak".str_repeat(" ",12).$dot."\n");
animasi ($dot.$blockabu.$BIYellow." Bertanggung Jawab Bila Terjadinya Banned Pada Akunmu !".str_repeat(" ",2).$dot."\n");
animasi (str_repeat($dot,59)."\n\n");
cek ($blockabu.$termux.$white."Tekan Enter Untuk Melanjutkan ↩️".$end.$white." ");
$yn = trim(fgets(STDIN));
system('clear');


animasi (str_repeat($dod,59)."\n");
animasi ($dod.$On_Black.$BIWhite."         SruputName         :         MINEUSD".str_repeat(" ",12).$dod."\n");
animasi ($dod.$On_Black.$BIWhite."         Wallet             :         Faucet Pay".str_repeat(" ",9).$dod."\n");
animasi ($dod.$On_Black.$BIWhite."         SruputVer          :         1.0 Beta".str_repeat(" ",11).$dod."\n");
animasi ($dod.$On_Black.$BIWhite."         CreatedBy          :         IzhalAkbar".str_repeat(" ",9).$dod."\n");
animasi (str_repeat($dod,59)."\n\n");


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

$ua = ["user-agent:".$useragent,"cookie:".$cookie];

//login

$url = "https://mineusd.cf/";
$data = $emdata;
post($url,$ua,$data);
$get = post($url,$ua,$data);

$url = "https://mineusd.cf/user/check";
get($url,$ua);
$get = get($url,$ua);
$email = pt('<h3>USER: ','<br></h3>');
$ball = pt('font-size:25px;">BALANCE: ','USDT</b><br>');

if ($email){
echo " ".$white."[UserName:".$cyan.$email.$green."|".$white."Ballance:".$cyan.$ball.$white."]\n";
echo str_repeat($blue."~",59)."\n";
}else if($email <= null){
echo $blockmerah.$white."Data tidak Ditemukan !".$end."\n";
exit;
}


while(true){
$url = "https://mineusd.cf/user/home";
$ua = ["user-agent:".$useragent,"cookie:".$cookie];
get($url,$ua);
$get = get($url,$ua);
$email = pt('<h3>USER: ','<br></h3>');
$ball = pt('font-size:25px;">BALANCE: ','USDT</b><br>');
$timer = pt('var _second = ',';');

$claimsukses = pt("data= data + ' ","';");
$claimfailed = pt("data='","';");
$claimerror = pt('alert("','");');


//Collect Reward
$url = "https://mineusd.cf/".pt('url: "..','"');
$ua = ["user-agent:".$useragent,"cookie:".$cookie];
$data = 10010;
post($url,$ua,$data);
$get = post($url,$ua,$data);

if ($ball == $data){
echo " ".$white."[UserName:".$cyan.$email.$green."|".$white."Ballance:".$cyan.$ball.$white."]\n";
echo str_repeat($blue."~",59)."\n";
}else if($ball <= $data){
echo " ".$On_Red.$white."$claimfailed".$end."\n";
}


$url = "https://mineusd.cf/user/pay";
$ua = ["user-agent:".$useragent,"cookie:".$cookie];
$data = 0.00080000;
#$data = "amount=0.00080000&fpay=";
post($url,$ua,$data);
$get = post($url,$ua,$data);
$infowd = pt("<h4 style='color:green'>","</h4>");

if ($ball == $data){
echo " ".$white."[UserName:".$cyan.$email.$green."|".$white."Ballance:".$cyan.$ball.$white."]\n";
echo " ".$blockbiru.$white."$infowd".$end."\n";
echo str_repeat($blue."~",59)."\n";
}else if($ball <= $data){
echo $blockmerah.$white."$claimfailed".$end."\n";
}


//Timer
for ($x=$timer;$x>-1;$x--){
  echo "\r                                           \r";
  echo "\r".$blockabu.$termux.$BIWhite."Please Wait, Mining Is Running ".$x." Seconds".$end."\r";
 sleep(1);
}
}



