#!/bin/bash

# install docker
if ! hash docker 2>/dev/null; then
	curl -fsSL https://get.docker.com/ | sh
fi
# install docker-compose
if ! hash docker-compose 2>/dev/null; then
	curl -L https://github.com/docker/compose/releases/download/1.8.1/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose
	chmod +x /usr/local/bin/docker-compose
fi

# startup the examples application
docker-compose up -d
