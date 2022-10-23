FROM php:8.0-apache

COPY src /var/www/html

COPY ./apache-conf/ports.conf /etc/apache2/ports.conf                                
COPY ./apache-conf/000-default.conf /etc/apache2/sites-available/000-default.conf    

CMD docker-php-entrypoint apache2-foreground

EXPOSE $PORT