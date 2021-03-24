<?php
/*
      Thanks to : 
             https://github.com/tomiashari/fb-autoreaction
             https://github.com/dfmcvn/getFBtoken
             https://github.com/tro1d/bot-reaction-gettoken
*/
//////Modified by まやちゃん//////
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
echo "\033[1;35m  ___ ___ _____   _    ___   ___ ___ _  _ \n";
echo " / __| __|_   _| | |  / _ \ / __|_ _| \| | \n";
echo " \__ \ _|  | |   | |_| (_) | (_ || || .` | \n";
echo " |___/___| |_|   |____\___/ \___|___|_|\_| \n";
echo "\033[1mAre you sure you want to do this?\n";
echo "Type 'yes' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'yes'){
     echo "EXIT!\n"; 
    exit;
} 
echo "\n";
echo "\033[1m======BOT REACTION FACEBOOK======\n";
print "|       TYPE OF REACTION        |\n";
print "| 1 for like      3 for wow     |\n";
print "| 2 for love      4 for haha    |\n";
print "| 7 for sad       8 for angry   |\n";
print "--------------★★★★★★-------------\n";
print "\n";
print "\n";
echo "\033[0m \n"; 
echo "Username/Email : ";
$user1 = trim(fgets(STDIN));
echo "Password : ";
$pass1 = trim(fgets(STDIN));
echo "Reaction if user male : ";
$r_male1 = trim(fgets(STDIN));
echo "Reaction if user female : ";
$r_female1 = trim(fgets(STDIN));
echo "Maximum reacted status (ex:100) : ";
$max_status1 = trim(fgets(STDIN));
$execute = code($user1, $pass1, $r_male1,$r_female1,$max_status1);
print $execute;
?>
