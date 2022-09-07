FROM php:8.0-apache
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN apt-get update
RUN apt-get upgrade -y