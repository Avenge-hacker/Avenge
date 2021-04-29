#!/bin/bash
clear
echo "Press Enter To Continue"
read a1
while :
do
rm *.xxx >/dev/null 2>&1
clear
echo -e "\e[33m"
toilet -f mono12 -F border update
echo -e "\e[4;34m This Program Was Created By Avenge-hacker \e[0m"
echo -e "\e[1;32m           Mail: avengehacker05@gmail.com \e[0m"
echo -e "\e[1;32m          website: https://avengehacker.cf \e[0m"
echo " "
echo -e "\e[36m              [1] To  Update \e[0m"
echo -e "\e[31m              [2] To  uninstall \e[0m"
echo -e "\e[32m              [3] To  Exit \e[0m"
read ch
if [ $ch -eq 1 ];then
clear
echo -e "\e[1;32m"
chmod +x update.sh
./update.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 2 ];then
clear
chmod +x uninstall.sh
./uninstall.sh
rm *.xxx >/dev/null 2>&1
exit 0
elif [ $ch -eq 3 ];then
clear
cd $HOME
rm *.xxx >/dev/null 2>&1
exit 0
fi
done
