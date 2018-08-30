#!/usr/bin/env sh
set -e

printf "\\n\\n**** Step1. Docker login ****\\n\\n"
ssh root@$TARGET_HOST "docker login -u $REGISTRY_LOGIN -p $REGISTRY_PASSWORD registry.gitlab.com"

printf "\\n\\n**** Web. Deployment ****\\n\\n"
ssh root@$TARGET_HOST "docker pull registry.gitlab.com/sassoftinc/1biz:latest"
ssh root@$TARGET_HOST "docker stop 1biz || true"
ssh root@$TARGET_HOST "docker rm 1biz || true"
ssh root@$TARGET_HOST "docker rmi registry.gitlab.com/sassoftinc/1biz:current || true"
ssh root@$TARGET_HOST "docker tag registry.gitlab.com/sassoftinc/1biz:latest registry.gitlab.com/sassoftinc/1biz:current"
ssh root@$TARGET_HOST "docker run --name 1biz --restart always -d -p 3006:80 \
-e VIRTUAL_HOST=1biz.kz \
-e LETSENCRYPT_HOST=1biz.kz \
-e LETSENCRYPT_EMAIL=sassoftinc@gmail.com \
-e ENVIRONMENT=production \
-e DB_HOST=138.68.75.78 \
-e DB_NAME=sassoft \
-e DB_USER=sassoft_wp \
-e DB_PASSWORD=$DB_PASSWORD \
-e STATSD_HOST=monitoring.sassoft.ru \
-e STATSD_PORT=8125 \
-e STATSD_NAMESPACE=1biz \
registry.gitlab.com/sassoftinc/1biz:latest"

printf "\\n\n**** Success ****\n\\n"
