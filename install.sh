#!/usr/bin/env bash

# check if is valid os
if [ "$(uname)" == "Darwin" ]; then
    ./install_mac.sh
else
    ./install_linux.sh
fi

exit 0