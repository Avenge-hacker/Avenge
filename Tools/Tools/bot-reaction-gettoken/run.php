<?php
echo '
_____________________________________________
|  _____ ____                               |
|  |  ___| __ )                             |
|  | |_  |  _ \          ^_^ Zs112          |
|  |  _| | |_) |      Script Kiddies        |
|  |_|   |____/                             |
|   ____                 _   _              |
|  |  _ \ ___  __ _  ___| |_(_) ___  _ __   |
|  | |_) / _ \/ _  |/ __| __| |/ _ \|  _ \  |
|  |  _ <  __/ (_| | (__| |_| | (_) | | | | |
|  |_| \_\___|\__,_|\___|\__|_|\___/|_| |_| |
|___________________________________________|
Thanks to : 
https://github.com/tomiashari/fb-autoreaction
https://github.com/dfmcvn/getFBtoken

';
require_once('lib/fb.php');

include 'lib/config.php';
$token = file_get_contents("token.txt");
$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);