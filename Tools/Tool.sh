#!/bin/bash

clear
echo "Press Enter To Continue"
read a1
while :
do
clear
echo -e "\e[1;31m"
toilet -f mono12 -F border TOOLS
echo -e "\u001b[34m"
echo " "
echo " [1]   Install basic commands" 
echo " [2]   Avenge-Payload "
echo " [3]   Botkomena "
echo " [4]   Bot-reaction-gettoken "
echo " [5]   CamPhish  "
echo " [6]   Cam-Hackers "
echo " [7]   EmailVuln   "
echo " [8]   Ffssdp   "
echo " [9]   GetFBtoken  "
echo " [10]  GoblinWordGenerator "
echo " [11]  Hacklock  "
echo " [12]  Zphisher "
echo " [13]  Instainsane  "
echo " [14]  Infect "
echo " [15]  InfoFB "
echo " [16]  IPGeoLocation "
echo " [17]  Lockphish "
echo " [18]  mbf  "
echo " [19]  ProfileGuardFb  "
echo " [20]  python-sms-sender  "
echo " [21]  Report  "
echo " [22]  FB-React "
echo " [23]  Firecrack "
echo " [24]  Vbug "
echo " [25]  Fb-autoreaction "
echo " [26]  Facebash-termux "
echo " [27]  Email-Bomber "
echo " [28]  TBomb "
echo " [29]  Shellphish "
echo " [30]  Exit "
read ch
if [ $ch -eq 1 ];then
clear
echo -e "\e[1;32m"
rm *.xxx >/dev/null 2>&1
cd $HOME
git clone https://github.com/Avenge-hacker/Basic-command.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 2 ];then
clear
cd /Avenge/Tools/Tools/Avenge-Payload/
pkg install git python -y
cd Avenge-payload
chmod +x start.py
python3 start.py
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 3 ];then
clear
cd /Avenge/Tools/Tools/Botkomena/
cd Botkomena
pkg install python2 -y
python2 botkomena.py
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 4 ];then
clear
cd /home/avenge/Desktop/work/work2/Tools/Tools/bot-reaction-gettoken/
apt install php -y
php setting.php 
php token.php
php run.php
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 5 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/CamPhish.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 6 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/Cam-Hackers.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 7 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/EmailVuln.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 8 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/ffssdp.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 9 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/getFBtoken.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 10 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/GoblinWordGenerator.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 11 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/Hacklock.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 12 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/Basic-command.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 13 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/Instainsane.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 14 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/Infect.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 15 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/InfoFB.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 16 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/IPGeoLocation.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 17 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/Lockphish.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 18 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/mbf.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 19 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/ProfileGuardFb.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 20 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/python-sms-sender.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 21 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/Report.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 22 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/FB-React.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 23 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/Firecrack.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 24 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/Vbug.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 25 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/fb-autoreaction.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 26 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/facebash-termux.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 27 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/Email-Bomber.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 28 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/TBomb.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 29 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/shellphish.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 30 ];then
clear
cd $HOME
git clone https://github.com/Avenge-hacker/zphisher.git
cd Tool-Avenge
./Tool-Avenge.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 31 ];then
clear
cd $HOME
rm *.xxx >/dev/null 2>&1
exit 0
echo -e "\e[1;32m TBomb Will Restart Now..."
echo -e "\e[1;32m All The Required Packages Will Be Installed..."
echo -e "\e[1;34m Press Enter To Proceed To Restart..."
read a6
./Command.sh
exit
echo -e "\e[1;31m"
toilet -f mono12 -F border Avenge
echo " "
exit 0
else
echo -e "\e[4;32m Invalid Input !!! \e[0m"
echo "Press Enter To Go Home"
read a3
clear
fi
done
