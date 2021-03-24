# fb-autoreaction
Facebook Auto Reaction BOT 2017

# usage

You just need to edit an authentication data.
<pre>
require_once('lib/fb.php'); // including bot class

//////////////////////////////////////////////[edit authentication here]///////////////////////////////////////////
$user		= 'lucifer.inside'; // facebook username / email
$pass 		= 'toketkenyel'; // facebook passwod
$r_male		= '3'; // reaction if user male , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$r_female	= '2'; // reaction if user female , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$max_status	= '20'; // maximum reacted status
$token 		= 'EaEaEa696969';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
</pre>

# cli usage

<pre>
root@tomi:~# php autoreaction.php

Status ID 941113712688709 => female => reacted
Status ID 10208206011644986 => female => reacted
Status ID 742983735851775 => female => reacted
Status ID 1425696447472324 => female => reacted
Status ID 10206758484274676 => female => reacted
Status ID 10206758478314527 => female => reacted
Status ID 1242968405788238 => male => reacted
Status ID 248837638884394 => male => reacted
Status ID 1417369344949323 => male => reacted
Status ID 1207019699376205 => female => reacted
Status ID 1316406528423269 => female => reacted
</pre>
