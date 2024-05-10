# Use an official PHP runtime as a parent image
FROM php:fpm-alpine

# Install required packages for Composer
RUN apk --no-cache add \
    curl \
    git \
    openssh-client \
    openssl \
    unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy project files
ADD src /var/www/html
ADD public /var/www/html

# Change working directory
WORKDIR /var/www/html

ENV COMPOSER_ALLOW_SUPERUSER=1

# Install Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Install mysqli extension (if needed)
RUN docker-php-ext-install mysqli

CMD ["php-fpm"]