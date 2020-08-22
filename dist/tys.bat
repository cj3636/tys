curl https://files.multimc.org/downloads/mmc-stable-win32.zip --output mm.zip
tar -xf mm.zip
move MultiMC C:/
mshta vbscript:Execute("msgbox ""MultiMC and TYS ATM5+ will now be installed. Remember to increase allocated memory!"":close")
C:/MultiMC/MultiMC.exe -I https://theyellowsub.us/dist/TYS_ATM5.zip

