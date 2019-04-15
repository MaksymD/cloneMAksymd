#!/usr/bin/env bash
#docker run -d -u root --name jenkins_kununu -v `which docker`:/usr/bin/docker -v /var/run/docker.sock:/var/run/docker.sock -v `pwd`/jenkins_home:/var/jenkins_home -v `pwd`/sample-application:/tmp/sample-application -p 8080:8080 -p 50000:50000 jenkins/jenkins:lts --restart unless-stopped jenkins
docker-compose up --build "$@"
