FROM php:8.2.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www