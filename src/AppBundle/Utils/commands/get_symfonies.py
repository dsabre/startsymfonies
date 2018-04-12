#!/usr/bin/python

import os, sys, subprocess

# check for directory in argument
if len(sys.argv) != 3:
	print 'Invalid arguments, usage: ./get_symfonies.py [DIR_TO_SCAN] [PHP_EXECUTABLE]'
	sys.exit(1)

d = sys.argv[1]
phpExecutable = sys.argv[2]

# check for valid directory
if not os.path.isdir(d):
	print 'Invalid directory ' + d
	sys.exit(2)

FNULL = open(os.devnull, 'w')

# get all symfonies
for dirname, dirnames, filenames in os.walk(d):
	symfony2 = dirname + '/app/console'
	symfony3 = dirname + '/bin/console'
	isSymfony2 = os.path.isfile(symfony2)
	isSymfony3 = os.path.isfile(symfony3)

	if isSymfony2:
		try:
			ver = subprocess.Popen([phpExecutable, symfony2], stdout=subprocess.PIPE, stderr=FNULL).communicate()[0].split('\n')[0].split(' - ')[0].split(' 2')[1]
			print symfony2 + '|2' + ver
		except: 
			print symfony2 + '|2.x.x'
		
	if isSymfony3:
		try:
			ver = subprocess.Popen([phpExecutable, symfony3], stdout=subprocess.PIPE, stderr=FNULL).communicate()[0].split('\n')[0].split(' (')[0].split(' 3')[1]
			print symfony3 + '|3' + ver
		except: 
			print symfony2 + '|3.x.x'
