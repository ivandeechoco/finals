FROM php:7.2-apache

COPY . /var/www/html/

##COPY php.ini /usr/local/etc/php
##COPY php.ini /usr/local/etc/php/php.ini

RUN docker-php-ext-install pdo_mysql

EXPOSE 80

