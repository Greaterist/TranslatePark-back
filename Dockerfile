FROM php:latest

RUN apt-get update \
&& apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip unzip

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
&& docker-php-ext-install gd pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#RUN composer install
#CMD ["bash", "-c", "ls"]
#CMD ["bash", "-c", "composer install && php artisan serve"]
#CMD ["bash", "-c", "composer update && php artisan serve"]
#CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
