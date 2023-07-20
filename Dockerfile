FROM php:8.1-cli

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev
RUN docker-php-ext-install pdo pdo_pgsql zip


CMD ["bash", "-c", "composer update && php artisan serve"]
