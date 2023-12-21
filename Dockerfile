FROM php:apache

RUN docker-php-ext-install mysqli

COPY composer.json .

RUN composer install