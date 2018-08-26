#!/usr/bin/env sh
set -e

docker login -u $REGISTRY_LOGIN -p $REGISTRY_PASSWORD registry.gitlab.com

docker pull registry.gitlab.com/sassoftinc/1biz:latest || true
docker build --cache-from registry.gitlab.com/sassoftinc/1biz:latest -t registry.gitlab.com/sassoftinc/1biz:latest -f docker/images/web/Dockerfile .
docker push registry.gitlab.com/sassoftinc/1biz:latest