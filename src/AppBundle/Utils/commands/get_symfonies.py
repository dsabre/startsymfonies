#!/usr/bin/python

import os
import subprocess
import sys

# check for directory in argument
if len(sys.argv) != 3:
    print 'Invalid arguments, usage: ./get_symfonies.py [DIR_TO_SCAN] [PHP_EXECUTABLE]'
    sys.exit(1)

d = sys.argv[1]
phpExecutables = sys.argv[2]

# check for valid directory
if not os.path.isdir(d):
    print 'Invalid directory ' + d
    sys.exit(2)

FNULL = open(os.devnull, 'w')

# get all symfonies
for dirname, dirnames, filenames in os.walk(d):
    symfonyOld = dirname + '/app/console'
    symfonyNew = dirname + '/bin/console'
    isSymfony2 = os.path.isfile(symfonyOld)
    isSymfony3 = os.path.isfile(symfonyNew)
    isSymfony4 = os.path.isfile(dirname + '/.env.dist')
    found = False

    for phpExecutable in phpExecutables.split(',,'):
        if isSymfony2:
            try:
                ver = \
                subprocess.Popen([phpExecutable, symfonyOld], stdout = subprocess.PIPE, stderr = FNULL).communicate()[
                    0].split('\n')[0].split(' - ')[0].split(' 2')[1]
                print symfonyOld + '|2' + ver
                found = True
                break
            except:
                continue
        elif isSymfony4:
            try:
                ver = \
                subprocess.Popen([phpExecutable, symfonyNew], stdout = subprocess.PIPE, stderr = FNULL).communicate()[
                    0].split('\n')[0].split(' (')[0].split(' 4')[1]
                print symfonyNew + '|4' + ver
                found = True
                break
            except:
                continue
        elif isSymfony3:
            try:
                ver = \
                subprocess.Popen([phpExecutable, symfonyNew], stdout = subprocess.PIPE, stderr = FNULL).communicate()[
                    0].split('\n')[0].split(' (')[0].split(' 3')[1]
                print symfonyNew + '|3' + ver
                found = True
                break
            except:
                continue

    if not found:
        if isSymfony2:
            print symfonyOld + '|2.x.x'
        elif isSymfony4:
            print symfonyNew + '|4.x.x'
        elif isSymfony3:
            print symfonyNew + '|3.x.x'
