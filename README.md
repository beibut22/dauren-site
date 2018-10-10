# 1biz

This repo contains source code of 1biz.kz website and backend systems

Installation
------------

Locally:

1. Check `docker-compose.yml` file, edit environment section.
2. Run `composer install`.
3. Do `docker-compose up -d`.
4. After go to `http://localhost:5003`, database is on `3311` port.

Docker deployment:

1. Create docker/shell_env_vars.sh file with this content:
```
#!/usr/bin/env bash

export TARGET_HOST=''
export SENDGRID_API_KEY=''
export DB_PASSWORD=''
export AWS_SECRET_ACCESS_KEY=''
export AWS_ACCESS_KEY_ID=''
```
2. Run `./docker/build.sh`
3. Run `source ./docker/shell_env_vars.sh && ./docker/deploy.sh`

Tests
-----

To run tests:
`./vendor/bin/codecept run unit`