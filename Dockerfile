# Use the official PHP image with Apache
FROM php:7.4-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    curl \
    vim \
    default-mysql-client \
    net-tools \
    iputils-ping

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql
# Copie o arquivo de configuração do Apache
COPY apache-config/000-default.conf /etc/apache2/sites-available/000-default.conf

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy existing application directory contents
COPY . /var/www/html

# Set file permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Enable Apache Rewrite Module
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]
