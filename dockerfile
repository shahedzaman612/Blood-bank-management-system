FROM php:8.2-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy project files to Apache root
COPY . /var/www/html/

# Set permissions (optional, for development)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80