FROM php:8.0-apache

COPY src /var/www/html

COPY ./apache-conf/ports.conf /etc/apache2/ports.conf
COPY ./apache-conf/apache.conf /etc/apache2/sites-enabled/000-default.conf

EXPOSE 80