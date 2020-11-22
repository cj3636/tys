@echo off
Title "The Yellow Submarine Modpack Installer (Using MultiMC)"
if exist "%userprofile%\Download\" (
	cd %userprofile%\Downloads\
)
:installed
choice /c yn /m "Do you have MultiMC installed"
if /I "%ERRORLEVEL%" EQU "1" goto :isInstalled
if /I "%ERRORLEVEL%" EQU "2" goto :notInstalled
goto :installed

:isInstalled
set /P path1="What is the exact file path to MultiMC.exe? For Example: C:\MultiMC\ "
set path2=MultiMC.exe
if {%path1:~-1,1%}=={\} (set result=%path1%%path2%) else (set result=%path1%\%path2%)

if exist %result% (
	goto :installModpack
) else (
	echo MultiMC.exe cannot be found!
    goto :isInstalled
)
pause

:notInstalled
set /P installDir="What folder would you like to install MultiMC? For Example: C:\ will install MultiMC in C:\MultiMC\ "
curl https://files.multimc.org/downloads/mmc-stable-win32.zip --output mmc-stable-win32.zip
tar -xf mmc-stable-win32.zip
move MultiMC %installDir%
del mmc-stable-win32.zip
mshta vbscript:Execute("msgbox ""MultiMC and TYS_LATEST will now be installed. Remember to increase allocated memory!"":close")
C:/MultiMC/MultiMC.exe -I https://theyellowsub.us/dist/TYS_LATEST.zip

:installModpack
mshta vbscript:Execute("msgbox ""MultiMC and TYS_LATEST will now be installed. Remember to increase allocated memory!"":close")
%result% -I https://theyellowsub.us/dist/TYS_LATEST.zip
