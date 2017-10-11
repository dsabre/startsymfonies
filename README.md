# startsymfonies2
One Symfony to rule them all, One Symfony to find them, One Symfony to bring them all and in the darkness bind them.

## Installation
1) Clone or download this repository and put where you want under your home directory.
2) Use terminal to enter in the startsymfonies2 directory.
3) Launch the `./install.sh` to install the project, (if you don't have composer, get it here: https://getcomposer.org/).

## Description
This symfony is used to manage all other symfonies found in the directories indicated in installation phase.

It create a table in the homepage of the site that indicate all symfonies found and their status, it provide a link to fast access the running symfony.

## Useful commands
To run startsymfonies2 use:<br>`php bin/console server:start 127.0.0.1:8000`

To auto-run the startsymfonies2, 12 seconds after the boot of pc:<br>
`@reboot sleep 12 && /path/of/php /home/username/your_beautiful_project_directory/startsymfonies2/bin/console server:start 127.0.0.1:8000`

To auto-run all symfonies with an ip and a port, 15 seconds after the boot of pc:<br>
`@reboot sleep 15 && /path/of/php /home/username/your_beautiful_project_directory/startsymfonies2/bin/console app:symfonies:start-all`

#### Flux
1) When a symfony is found it will be inserted in a sqlite database created in the project directory at path `var/data/data.sqlite`.
2) You can access to homepage of the startsymfonies2 and see a table with all symfony found.
3) Through the list table you can start a symfony at a particular ip and port, this operation start a symfony and save the informations on the db.
4) All symfonies with an ip and a port defined can be started by the main bar link **"Start all symfonies"** 