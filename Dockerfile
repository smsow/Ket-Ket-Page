# Use the official PHP image with Apache
FROM php:8.0-apache

# Install system dependencies
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev libicu-dev libzip-dev unzip git

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install intl zip

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy the application code from the backend directory
COPY backend/ .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port 80
EXPOSE 80
