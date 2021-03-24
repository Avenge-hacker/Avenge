<?php
function code($user1, $pass1, $r_male1,$r_female1,$max_status1){
$buat = '<?php
$user = "'.$user1.'";
$pass = "'.$pass1.'";
$r_male = "'.$r_male1.'";
$r_female = "'.$r_female1.'";
$max_status = "'.$max_status1.'";
?>';
$file = fopen('lib/config.php','w');
fputs($file,$buat);
fclose($file);
echo "Sukses Disetting";
}
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
echo "Are you sure you want to do this?  Type 'yes' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'yes'){
     echo "EXIT!\n"; 
    exit;
} 
echo "\n"; 
echo "Username/Email\nInput : ";
$user1 = trim(fgets(STDIN));
echo "Password\nInput : ";
$pass1 = trim(fgets(STDIN));
echo "Reaction if user male , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8 (ex:2)\nInput : ";
$r_male1 = trim(fgets(STDIN));
echo "Reaction if user female , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8 (ex:2)\nInput : ";
$r_female1 = trim(fgets(STDIN));
echo "Maximum reacted status (ex:100)\nInput : ";
$max_status1 = trim(fgets(STDIN));
$execute = code($user1, $pass1, $r_male1,$r_female1,$max_status1);
print $execute;
?>