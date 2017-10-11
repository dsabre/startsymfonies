#!/usr/bin/env bash

# installing symfony
composer install

# variable definition
baseIp="127.0.0.1"
basePort="8000"
databasePath=$(cat app/config/parameters.yml |grep database_path | awk -F':' '{print $2}' |sed "s/'//g" |sed "s/%kernel.project_dir%\///g" |sed 's/^ //g' |sed 's/ $//g')
phpExecutable=$(cat app/config/parameters.yml |grep php_executable | awk -F':' '{print $2}' |sed "s/'//g" |sed 's/^ //g' |sed 's/ $//g')
currentDir=$(pwd)
lineAutoStart="@reboot sleep 12 && $phpExecutable $currentDir/bin/console server:start $baseIp:$basePort"
lineAutoStartSymfonies="@reboot sleep 15 && $phpExecutable $currentDir/bin/console app:symfonies:start-all"
lineAutoStartExist=$(crontab -l |grep "$lineAutoStart" |wc -l)
lineAutoStartSymfoniesExist=$(crontab -l |grep "$lineAutoStartSymfonies" |wc -l)
serverRunning=$($(echo $phpExecutable) bin/console server:status -q;echo $?)

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
if [ "$lineAutoStartExist" -eq "0" ]; then
    echo
    read -p "Do you want to run startsymfonies2 on pc boot [y/N]? " -n 1 -r
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        (crontab -l; echo; echo "# STARTSYMFONIES 2 - AUTOSTART"; echo "$lineAutoStart") |crontab -
    fi
fi

# check if user want to autostart symfonies with an ip and a port on pc boot
if [ "$lineAutoStartSymfoniesExist" -eq "0" ]; then
    echo
    read -p "Do you want to run all symfonies with an ip and a port on pc boot [y/N]? " -n 1 -r
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        (crontab -l; echo; echo "# STARTSYMFONIES 2 - AUTOSTART SYMFONIES"; echo "$lineAutoStartSymfonies") |crontab -
    fi
fi

# only for mac users is needed to generate the loopback for addresses other than 127.0.0.1 (e.g. 127.0.0.2)
if [ "$(uname)" == "Darwin" ]; then
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
fi

# run startsymfonies2 now if not running
if [ "$serverRunning" -eq "1" ]; then
    $(echo $phpExecutable) bin/console server:start $baseIp:$basePort
fi

echo
echo 'Startsymfonies2 successfully installed :)'
echo

exit 0