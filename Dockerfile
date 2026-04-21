FROM php:8.2-apache

# 1. Installation des outils de base (PHP, Zip, et Node.js pour compiler le design)
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl \
    && docker-php-ext-install zip pdo pdo_mysql

RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# 2. Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 3. Configuration d'Apache pour pointer sur le dossier "public" de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite

# 4. Copie de tous tes fichiers vers le serveur
COPY . /var/www/html

# 5. Installation des packages et compilation du design (Vite)
RUN composer install --no-dev --optimize-autoloader
RUN npm install
RUN npm run build

# 6. Donner les bonnes permissions à Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache