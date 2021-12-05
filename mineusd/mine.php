<?

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
"Host: mineusd.cf",
"user-agent: Mozilla/5.0 (Linux; Android 11; M2102J20SG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/537.36",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"cookie: PHPSESSID=ps3hnutsc00ptho8feb6dnuht5"
);

function pt($awal,$akhir){
    global $get;
   $a = explode ($awal, $get);
   $a = explode($akhir,$a[1])[0];
   return $a;
}
//login
$url = "https://mineusd.cf/user/check";
get($url,$ua); // Sukses untuk untuk menampilkan halam loginnya
$get = get($url,$ua);
//Home or Dashboard 
$url = "https://mineusd.cf/user/home";
get($url,$ua); // Sukses untuk untuk menampilkan halam loginnya
$get = get($url,$ua);
$user = pt('<h3>USER: ','<br></h3>');
echo $user."\n\n";
$ball = pt('font-size:25px;">','</b><br>');
echo $ball."\n\n";
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










