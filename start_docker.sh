#!/bin/bash

script_dir="$( cd -- "$(dirname "$0")"; pwd -P)"
echo starting website 

docker run -d -it \
	-p 80:80 \
	-v "$script_dir:/app" \
	--name website \
	webdevops/php-nginx
