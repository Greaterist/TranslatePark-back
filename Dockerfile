FROM archlinux

# Arguments defined in docker-compose.yml

# Install system dependencies
RUN --mount=type=cache,sharing=locked,target=/var/cache/pacman \
    pacman -Syu --noconfirm --needed base base-devel git php composer curl

    
# Install PHP extensions
#RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd





# Get latest Composer
#COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -m steve -p s3cre7Passw0rd
#CMD ["bash", "-c", "mkdir /laravel"]
#RUN chown -R steve:steve /laravel


USER steve



RUN composer install
RUN php artisan serve
#CMD ["bash", "-c", "ls"]
#CMD ["bash", "-c", "composer install && php artisan serve"]
#CMD ["bash", "-c", "composer update && php artisan serve"]
#CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]