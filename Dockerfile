# Dockefile for development environment
# For making production ready container please use docker/Dockerfile
FROM php:7.1-fpm-alpine

# Install packages
RUN apk add \
    supervisor \
    nginx \
    mysql-client \
    --repository=http://dl-cdn.alpinelinux.org/alpine/edge/community \
    --no-cache \
    --update \
    $PHPIZE_DEPS

# Install PHP extensions
RUN docker-php-ext-install bcmath pdo_mysql opcache

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# Create folders
RUN mkdir -p \
    /run/supervisord /var/log/supervisord \
    /run/nginx \
    /var/log/1biz\
    /app/web/assets
RUN chown www-data /var/log/1biz
RUN chown www-data /app/web/assets

# Replace configuration files
COPY ./docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY ./docker/nginx/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

WORKDIR /app

# Start supervisord
ENTRYPOINT ["/usr/bin/supervisord"]
CMD ["-c", "/etc/supervisor/conf.d/supervisord.conf"]

# we don't copy source code inside container for dev envrionment, just adding volume via docker-compose