FROM archlinux

# Arguments defined in docker-compose.yml

# Install system dependencies
RUN --mount=type=cache,sharing=locked,target=/var/cache/pacman \
    pacman -Syu --noconfirm --needed base base-devel git php composer

    
# Install PHP extensions
#RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd





# Get latest Composer
#COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -d /home/user user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user


# Set working directory
WORKDIR /var/www

USER user

#RUN composer install
#CMD ["bash", "-c", "ls"]
CMD ["bash", "-c", "composer install && php artisan serve"]
#CMD ["bash", "-c", "composer update && php artisan serve"]
#CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
