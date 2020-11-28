#!/usr/bin/env bash

set -e;

if [ -z "$1" ]
  then
    echo 'Missing argument for source image file name' >&2;
    exit 1;
fi

file="$1"
dest_dir='public_html/images';
file_name="$(basename "${file%.*}")";
dest_file_name="${dest_dir}/${file_name}";
cp "$file" "${dest_dir}/${file_name}.png";
convert "$file" -define webp:lossless=true "${dest_file_name}.webp";
