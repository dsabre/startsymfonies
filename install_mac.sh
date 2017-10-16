#!/usr/bin/env bash

if [ "$(uname)" != "Darwin" ]; then
    echo
    echo "Invalid OS, try to use install_linux.sh instead."
    echo
    exit 1
fi

# installing symfony
composer install

# variable definition
baseIp="127.0.0.1"
basePort="8000"
databasePath=$(cat app/config/parameters.yml |grep database_path | awk -F':' '{print $2}' |sed "s/'//g" |sed "s/%kernel.project_dir%\///g" |sed 's/^ //g' |sed 's/ $//g')
phpExecutable=$(cat app/config/parameters.yml |grep php_executable | awk -F':' '{print $2}' |sed "s/'//g" |sed 's/^ //g' |sed 's/ $//g')
currentDir=$(pwd)
serverRunning=$($(echo $phpExecutable) bin/console server:status -q;echo $?)
pathLaunchDaemons="/System/Library/LaunchDaemons"
fileAutoStart="startsymfonies2.boot.plist"
fileAutoStartSymfonies="startsymfonies2.start_symfonies.plist"
fileAutoStartExist=$(ls -l $(echo $pathLaunchDaemons) |grep $(echo $fileAutoStart) |wc -l)
fileAutoStartSymfoniesExist=$(ls -l $(echo $pathLaunchDaemons) |grep $(echo $fileAutoStartSymfonies) |wc -l)
lineAutoStart="sleep 12 && $phpExecutable $currentDir/bin/console server:start $baseIp:$basePort"
lineAutoStartSymfonies="sleep 15 && $phpExecutable $currentDir/bin/console app:symfonies:start-all"

# create database if not exist
if [ ! -e "$databasePath" ]; then
    $(echo $phpExecutable) bin/console doctrine:schema:create
fi

# perform base commands for correct working
$(echo $phpExecutable) bin/console cache:clear
$(echo $phpExecutable) bin/console assets:install --symlink

# check if user want to perform a scan now
echo
read -p "Do you want to perform a scan for symfonies now [y/N]? " -n 1 -r
if [[ $REPLY =~ ^[Yy]$ ]]; then
    echo
    echo 'SCANNING DIRECTORIES...'
    $(echo $phpExecutable) bin/console app:symfonies:scan
    echo 'SCAN COMPLETED'
fi

# check if user want to autostart startsymfonies2 on pc boot
if [ "$fileAutoStartExist" -eq "0" ]; then
    echo
    read -p "Do you want to run startsymfonies2 on pc boot [y/N]? " -n 1 -r
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        echo '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs$
<plist version="1.0">
<dict>
        <key>Label</key>
        <string>startsymfonies2.boot</string>
        <key>ProgramArguments</key>
        <array>
                <string>'$lineAutoStart'</string>
        </array>
        <key>RunAtLoad</key>
        <true/>
</dict>
</plist>' > "$pathLaunchDaemons/$fileAutoStart"
    fi
fi

# check if user want to autostart symfonies with an ip and a port on pc boot
if [ "$fileAutoStartSymfoniesExist" -eq "0" ]; then
    echo
    read -p "Do you want to run all symfonies with an ip and a port on pc boot [y/N]? " -n 1 -r
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        echo '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs$
<plist version="1.0">
<dict>
        <key>Label</key>
        <string>startsymfonies2.start_symfonies</string>
        <key>ProgramArguments</key>
        <array>
                <string>'$lineAutoStartSymfonies'</string>
        </array>
        <key>RunAtLoad</key>
        <true/>
</dict>
</plist>' > "$pathLaunchDaemons/$fileAutoStartSymfonies"
    fi
fi

# only for mac users is needed to generate the loopback for addresses other than 127.0.0.1 (e.g. 127.0.0.2)
echo
read -p "Do you want get loopback addresses other than 127.0.0.1 to work on OS X [y/N]? " -n 1 -r
if [[ $REPLY =~ ^[Yy]$ ]]; then
    echo
    read -p "How many addresses to loopback [30]? " -r

    if [ -z $REPLY ]; then
        REPLY=30
    fi

    for i in $(seq 2 $REPLY); do
        sudo ifconfig lo0 alias 127.0.0.$i up
    done
fi

# run startsymfonies2 now if not running
if [ "$serverRunning" -eq "1" ]; then
    $(echo $phpExecutable) bin/console server:start $baseIp:$basePort
fi

echo
echo 'Startsymfonies2 successfully installed :)'
echo

exit 0