#!/usr/bin/env bash

composer install

php bin/console doctrine:schema:create

php bin/console cache:clear

php bin/console assets:install --symlink

echo
echo 'SCANNING DIRECTORIES...'
php bin/console app:symfonies:scan
echo 'SCAN COMPLETED'

echo 'Startsymfonies2 successfully installed :)'
echo