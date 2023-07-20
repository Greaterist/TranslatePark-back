FROM php:latest

RUN apt-get update \
&& apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip unzip

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
&& docker-php-ext-install gd pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

USER $user

#RUN composer install
#CMD ["bash", "-c", "ls"]
CMD ["bash", "-c", "composer install && php artisan serve"]
#CMD ["bash", "-c", "composer update && php artisan serve"]
#CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
