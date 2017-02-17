#!/bin/bash

docker stop ansible_app01 >/dev/null 2>&1
docker rm ansible_app01 >/dev/null 2>&1
docker run --name ansible_app01 -p 8090:80 -td ubuntu:14.04 bash

sleep 3

docker exec ansible_app01 apt-get update

docker exec ansible_app01 apt-get install -y python

sleep 3

echo "ansible-playbook docker-container-app.yml -i docker-hosts"

ansible-playbook docker-container-app.yml -i docker-hosts

open http://localhost:8090
