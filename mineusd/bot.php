<?php

system('clear');

while("true"){
$ua = array(
  "user-agent: Mozilla/5.0 (Linux; Android 11; M2102J20SG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/537.36",
  "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
  "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
  "cookie: _data_html=158-1_220-1_237-1_238-1;__.popunder=1;PHPSESSID=t5i7836671d1h0diq0oh1k77bu",
  "content-type: text/html; charset=UTF-8"
  );
//Login
//$data = "xxxxxxxx";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "https://mineusd.cf/user/check");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1); //POST
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data); //POST
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$a = explode('<b>',$res)[1];
$aa = explode('</b>',$a)[0];
echo $aa."\n\n";
sleep(1);
system('clear');


//Dashboard
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "https://mineusd.cf/user/home");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$res = curl_exec($ch);
$json = json_decode($res);
$b = explode('<h3>USER: ',$res)[1];
$bb = explode('<br></h3>',$b)[0];
echo $bb."\n";
$c = explode('25px;">',$res)[1];
$cc = explode('</b><br>',$c)[0];
echo $cc."\n\n";

//Get Claim
$d = explode('var writeTo =',$res)[1];
$dd = explode(';',$d)[0];
$data = $dd;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "https://mineusd.cf/inc/data.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1); //POST
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); //POST
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);

//$c1 = explode('url:',$res)[1];
//$c2 = explode('});',$c1)[0];

//print_r($c2);
echo "Status ".$res."\n\n";


for ($t =10800; $t >-1; $t--) {
   echo "\r \r";
   echo "\r","Please wait $t Seconds \r";
   sleep(1);
}
}
