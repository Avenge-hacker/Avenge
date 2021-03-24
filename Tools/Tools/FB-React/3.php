<?php
/*
      Thanks to : 
             https://github.com/tomiashari/fb-autoreaction
             https://github.com/dfmcvn/getFBtoken
             https://github.com/tro1d/bot-reaction-gettoken
*/
//////Modified by まやちゃん//////
echo "\033[1;34m   _______      ___  _______  ___________ \n";
echo "  / __/ _ )____/ _ \/ __/ _ |/ ___/_  __/ \n";
echo " / _// _  /___/ , _/ _// __ / /__  / / \n";
echo "/_/ /____/   /_/|_/___/_/ |_\___/ /_/ \n";
echo "\033[1m";
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
