#!/bin/sh

if [ ! -x ./mkclean.sh ]; then
    echo "mkclean.sh must be called from the current directory as ./mkclean.sh"
    exit 1
fi

rm -rf compile math patches manual packages
