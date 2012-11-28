#!/bin/sh
dest="../manual"

rm -rf "$dest"
mkdir "$dest"
for i in *.html; do
	php -f $i >"$dest/$i" "$@"
done
cp -r resources "$dest"