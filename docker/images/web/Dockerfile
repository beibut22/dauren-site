# Production ready web dockerfile
FROM registry.gitlab.com/sassoftinc/cping/common:latest

# Replace configuration files
COPY ./docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY ./docker/nginx/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

COPY . /app
WORKDIR /app

RUN chown www-data /app/web/assets

# Start supervisord
ENTRYPOINT ["/usr/bin/supervisord"]
CMD ["-c", "/etc/supervisor/conf.d/supervisord.conf"]
