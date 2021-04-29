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
echo " "
echo -e "$grn                updating the Avenge please wait$rset"
sleep 2.0

cd $HOME /data/data/come.termux/files/home
rm -rf Avenge
cd $HOME /data/data/come.termux/files/usr/bin
rm -rf Avenge
cd $HOME /data/data/come.termux/files/home
git clone https://github.com/Avenge-hacker/Avenge.git
clear
echo " "
echo -e "$grn               Avenge has been updated check it now...$rset"
sleep 3.0
echo " "
cd $HOME
cd Avenge
chmod +x setup.sh
./setup.sh
clear
sleep 1.0
