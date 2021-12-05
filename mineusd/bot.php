<?

include('cfg.php');
system('clear');

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
$url = "https://mineusd.cf/user/check";
get($url,$ua);
$get = get($url,$ua);
//Home or Dashboard 
$url = "https://mineusd.cf/user/home";
get($url,$ua);
$get = get($url,$ua);

echo "Your Email    :".$email = pt('<h3>USER: ','<br></h3>',"\n\n");
echo "Your Email    :".$ball = pt('font-size:25px;">','</b><br>',"\n\n");


//Collect Reward
while(true){
$url = "https://mineusd.cf/".pt('url: "..','"');
$data = pt('id="mining_run" title="Miner Running">','</span>');

$claim = post($url,$ua,$data);
$claimsukses = pt("data= data + ' ","';");
$claimfailed = pt("data='","';");
$claimerror = pt('alert("','");');
$cm = "0.00010000";

//Collect info
if($data != $cm){
    if($data < $cm):
    echo "  $claimsukses    |   + $data \n";
elseif($data > $cm):
    echo "  $claimfailed    |   $data \n";
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










