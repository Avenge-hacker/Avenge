<?php
/*
      Thanks to : 
             https://github.com/tomiashari/fb-autoreaction
             https://github.com/dfmcvn/getFBtoken
             https://github.com/tro1d/bot-reaction-gettoken
*/
//////Modified by まやちゃん//////
error_reporting(E_ALL);
header('Origin: https://facebook.com');
define('API_SECRET', '62f8ce9f74b12f84c123cc23437a4a32');

define('BASE_URL', 'https://api.facebook.com/restserver.php');

function sign_creator(&$data){
	$sig = "";
	foreach($data as $key => $value){
		$sig .= "$key=$value";
	}
	$sig .= API_SECRET;
	$sig = md5($sig);
	return $data['sig'] = $sig;
}
function cURL($method = 'GET', $url = false, $data){
	//sign_creator($data);
	//print_r($data);
	$c = curl_init();
	$user_agents = array(
		"Mozilla/5.0 (Linux; Android 5.0.2; Andromax C46B2G Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/37.0.0.0 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/60.0.0.16.76;]",
		"[FBAN/FB4A;FBAV/35.0.0.48.273;FBDM/{density=1.33125,width=800,height=1205};FBLC/en_US;FBCR/;FBPN/com.facebook.katana;FBDV/Nexus 7;FBSV/4.1.1;FBBK/0;]",
		"Mozilla/5.0 (Linux; Android 5.1.1; SM-N9208 Build/LMY47X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36",
		"Mozilla/5.0 (Linux; U; Android 5.0; en-US; ASUS_Z008 Build/LRX21V) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 UCBrowser/10.8.0.718 U3/0.8.0 Mobile Safari/534.30",
		"Mozilla/5.0 (Linux; U; Android 5.1; en-US; E5563 Build/29.1.B.0.101) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 UCBrowser/10.10.0.796 U3/0.8.0 Mobile Safari/534.30",
		"Mozilla/5.0 (Linux; U; Android 4.4.2; en-us; Celkon A406 Build/MocorDroid2.3.5) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1"
	);
	$useragent = $user_agents[array_rand($user_agents)];
	$opts = array(
		CURLOPT_URL => ($url ? $url : BASE_URL).($method == 'GET' ? '?'.http_build_query($data) : ''),
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_USERAGENT => $useragent
	);
	if($method == 'POST'){
		$opts[CURLOPT_POST] = true;
		$opts[CURLOPT_POSTFIELDS] = $data;
	}
	curl_setopt_array($c, $opts);
	$d = curl_exec($c);
	curl_close($c);
	return $d;
}
include 'lib/config.php';
$_GET['u'] = $user;
$_GET['p'] = $pass;

$data = array(
	"api_key" => "882a8490361da98702bf97a021ddc14d",
	"credentials_type" => "password",
	"email" => @$_GET['u'],
	"format" => "JSON",
	//"generate_machine_id" => "1",
	//"generate_session_cookies" => "1",
	"locale" => "en_US",
	"method" => "auth.login",
	"password" => @$_GET['p'],
	"return_ssl_resources" => "0",
	"v" => "1.0"
);
sign_creator($data);
$response = cURL('GET', false, $data);
$responseJSON = json_decode($response);
$fay = $responseJSON->access_token
    or exit("Gagal Mengambil Token. Coba Cek Login Lalu Ijin Akses");
if ($fay==true){
$file = fopen("token.txt","w");
fwrite($file,$fay);
fclose($file);
}

echo "\033[1;33m __   _____  _   _ ___   _____ ___  _  _____ _____ \n";
echo " \ \ / / _ \| | | | _ \ |_   _/ _ \| |/ / __|_   _| \n";
echo "  \ V / (_) | |_| |   /   | || (_) | ' <| _|  | | \n";
echo "   |_| \___/ \___/|_|_\   |_| \___/|_|\_\___| |_| \n";
echo "\033[0m \n\n";
echo $fay;
?>
