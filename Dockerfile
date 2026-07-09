FROM php:8.4-apache

WORKDIR /var/www/html

# Install system packages + Node.js
RUN apt-get update && \
    apt-get install -y \
        git \
        unzip \
        curl \
        ca-certificates \
        gnupg && \
    curl -fsSL https://deb.nodesource.com/setup_22.x | bash - && \
    apt-get install -y nodejs && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache rewrite
RUN a2enmod rewrite

# Point Apache to Laravel's public directory
ENV APACHE_DOCUMENT_ROOT=/var/www/html/api/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

CMD ["apache2-foreground"]