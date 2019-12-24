# Stage 1 - Dependencies Stage
FROM composer:1.9 AS vendor

# Composer Workdir
WORKDIR /app

# Copy Composer files used when installing Dependencies
COPY composer.json composer.json
COPY composer.lock composer.lock

# Install PHP Dependencies
RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

# Stage 2 - Project Stage
FROM php:7.3-cli

# Install Dependencies
RUN apt-get update && apt-get install -y \
    git \
    libzip-dev \
    zip \
    unzip \
    libssh-dev && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

# Install PHP extensions
RUN docker-php-ext-configure zip --with-libzip
RUN docker-php-ext-install zip bcmath sockets

# Application Workdir
WORKDIR /var/www/html/working_out

# Copy project files
COPY . /var/www/html/working_out

# Copy XDebug file
COPY ./xdebug.ini /usr/local/etc/php7.3/conf.d/

# Copy dependencies from Composer stage
COPY --from=vendor /app/vendor/ /var/www/html/working_out/vendor/

# Run CLI Script
CMD cd public && php index.php
