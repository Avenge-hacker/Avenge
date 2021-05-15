#!/bin/bash

#colour section
red='\033[1;31m'
rset='\033[0m'
grn='\033[1;32m'
ylo='\033[1;33m'
#script coding starts
clear
echo " "
echo " "
echo '
                  _  _  ___  ___   __  ____  ___ 
                 ( )( )(  ,\(   \ (  )(_  _)(  _)
                  )()(  ) _/ ) ) )/__\  )(   ) _)
                  \__/ (_)  (___/(_)(_)(__) (___) v 1.0
'|lolcat
echo " "
echo " "
sleep 6.0
clear
echo -e "$grn                pogrom downloading please wait$rset"
sleep 2.0
clear
echo -e "$red                         █ 15% $rset"
sleep 2.0
clear
echo -e "$red                         ██ 30% $rset"
sleep 2.0
clear
echo -e "$red                         ███ 45% $rset"
sleep 2.0
clear
echo -e "$red                         ████ 60% $rset"
sleep 2.0
clear
echo -e "$red                         █████ 75% $rset"
sleep 2.0
clear
echo -e "$red                         ███████ 99% $rset"
sleep 2.0
clear
echo -e "$red                         ████████ 100% $rset"
sleep 2.0
clear
echo " "
echo " "
echo -e "$grn                Downloading Complete ....$rset"
sleep 2.0
clear
echo " "
echo -e "$grn               Avenge has been install check it now...$rset"
sleep 3.0
echo " "
cd $HOME
cd Avenge
chmod +x Avenge
mv Avenge /data/data/com.termux/files/usr/bin
cd /data/data/com.termux/files/home/Avenge/
chmod +x Avenge.sh
pkg install figlet -y
clear
echo -e "\e[43;1m Type (Avenge) and Direct Open \e[0m"
echo -e "\e[43;1m   Press Enter \e[0m"
read a1
./Avenge.sh
clear
sleep 1.0
