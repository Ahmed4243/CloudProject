# Use PHP with Apache
FROM php:8.1-apache

# Copy backend files into the image
COPY . /var/www/html/

# Enable Apache rewrite module for URL rewriting
RUN a2enmod rewrite

# Install MySQL extension for PHP
RUN docker-php-ext-install mysqli

# Set the working directory to the Apache web root
WORKDIR /var/www/html/

# Expose the default HTTP port for Apache
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
