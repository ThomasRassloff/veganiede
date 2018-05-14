FROM nginx:1.10

ADD ./vhost.conf /etc/nginx/conf.d/default.conf
WORKDIR /var/www

FROM php:7-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev mysql-client \
    && pecl install mcrypt-1.0.1 && docker-php-ext-enable mcrypt && docker-php-ext-install pdo_mysql

WORKDIR /var/www
