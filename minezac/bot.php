<?php
//minezac
system('clear');
function get($url,$ua){
  $ch=curl_init();
    curl_setopt_array($ch, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_FOLLOWLOCATION => 1,
      CURLOPT_HTTPHEADER => $ua,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_SSL_VERIFYHOST => 2,
      CURLOPT_COOKIEJAR => "cookie.txt",
      CURLOPT_COOKIEFILE => "cookie.txt",
      CURLOPT_ENCODING => "gzip",
  ));
    return curl_exec($ch);
    curl_close($ch);
  
}
function post($url,$ua,$data){
  $ch=curl_init();
    curl_setopt_array($ch, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_FOLLOWLOCATION => 1,
      CURLOPT_HTTPHEADER => $ua,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_SSL_VERIFYHOST => 2,
      CURLOPT_COOKIEJAR => "cookie.txt",
      CURLOPT_COOKIEFILE => "cookie.txt",
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => $data,
      CURLOPT_ENCODING => "gzip",
  ));
    return curl_exec($ch);
    curl_close($ch);
  
}
  
  $ua = array(
    "Host: minezec.cf",
    "upgrade-insecure-requests: 1",
    "user-agent: Mozilla/5.0 (Linux; Android 11; M2102J20SG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/537.36",
    "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "referer: https://minezec.cf/",
    "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
    "cookie: PHPSESSID=egiifhj2137p8fu0mflb9cjtbc; popcashpu=1"
  );
//-----DASHBOARD-----//
  $url="https://minezec.cf/user/home?msg=%3Cdiv%20class=%27alert%20alert-success%27%3E%20Mining%20Statred%20Successfully!%3C/div%3E%3Cbr%3E";
  get($url,$ua);
  $get = get($url,$ua);
///Information
preg_match("#<div class='alert alert-success'>(.*?)</div><br>(.*?)<div class=(.*?)>#is",$get,$info);
  echo"  ".$info[1]."\n\n\n";
///Email
preg_match("#<h3>(.*?)<br>(.*?)<b class='text-SUCCESS'>(.*?)</b>(.*?)<b style='color:red;'><div id='countdown' style='display:inline-block;'></div></b>(.*?)</h3>#is",$get,$name);
  echo"   ".$name[1]."\n\n";
  
  #$gd = explode("data='You can Collect minimum ",$get)[1];
  #$gdd = explode("ZEC';",$gd)[0];
  
//-----CLAIM-----//
while("true"){
  sleep(2);
  system('clear');
$data = "0.00000051";
$url="https://minezec.cf/inc/data.php";
$get = post($url,$ua,$data);

//Collect Reward
if($data >= 10){
  $data= $data + ' USDT Collected Successfully!';
}
else if($data <=0.00000051){
$data=' Please Wait, Currently In Collect ';
}
else if($data=='Failed'){
$data=' You can Collect minimum 0.00000050 ZEC ';
}
error: function(){
        alert("Data not transferred!");
};
echo "\n\n";
//Timer
for ($i=60;$i>-1;$i--){
  echo "\r                                   \r";
  echo "\033[0;32m  • Tunggu Boss   "."\033[0;37m[ "."\033[0;32m".$i."\033[0;37m ]";
if($i==60 or $i==56 or $i==50 or $i==46 or $i==40 or $i==36 or $i==30 or $i==26 or $i==20 or $i==5){echo " .";};
if($i==58 or $i==55 or $i==49 or $i==44 or $i==39 or $i==33 or $i==28 or $i==23 or $i==10 or $i==1){echo " ..";};
if($i==40 or $i==32 or $i==27 or $i==20 or $i==15 or $i==13 or $i==11 or $i==8 or $i==5 or $i==0){echo " ...\r";}
   sleep(1);
}


}















