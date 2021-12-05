<?

//mineusdt
system('clear');

function get($url){
  $u[]="Host: mineusd.cf";
  $u[]="upgrade-insecure-requests: 1";
  $u[]="user-agent: Mozilla/5.0 (Linux; Android 11; M2102J20SG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/537.36";
  $u[]="accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $u[]="referer: https://mineusd.cf/";
  $u[]="cookie: PHPSESSID=jicumrp8vg905pmvbfitn2fanr";
  $ch=curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_HTTPHEADER => $u,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_ENCODING => "gzip",
    ));
    return curl_exec($ch);
    curl_close($ch);
}
#function pt($awal,$akhir){
#    global $get;
#   $a = explode ($awal, $get);
#   $a = explode($akhir,$a[1])[0];
#   return $a; }

function claim(){
  $url="https://mineusd.cf/user/home";
  return get($url);
}
system("clear");
$usdt=claim();
///Information
preg_match('#<div class="alert alert-info">(.*?)<b>(.*?)</b>(.*?)<a href="https://mineltc.cf" target="_blank"><b>.(.*?)</b></a></div>#is',$usdt,$info);
echo "  ".$info[1].$info[2].$info[3].$info[4]."\n\n\n";
///Email & Ballance 
preg_match('#<h3>(.*?)<br></h3>(.*?)<b style="color:green;font-size:25px;">(.*?)</b>#is',$usdt,$nama);
echo "  ".$nama[1]."\n\n"."  ".$nama[3]."\n\n\n";



die();


//Collect Reward
while("true"){
$url = "https://mineusd.cf/".pt('url: "..','"');
$data = pt('id="mining_run" title="Miner Running">','</span>');
$claim = post($url,$ua,$data);
$claimsukses = pt("data= data + ' ","';");
$claimfailed = pt("data='","';");
$claimerror = pt('alert("','");');
$reward = "0.00010000";

//Collect info
if($data != $ball){
    if($data <= $ball):
    echo "  $claimsukses    |   + $ball \n";
elseif($data === $ball):
    echo "  $claimsukses    |   + $ball \n";
elseif($ball <= $data):
    echo "  $claimfailed    |   \n";
    endif;
}else{
    echo "    $claimerror \n";
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
















