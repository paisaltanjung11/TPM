FROM php:8.1-cli

RUN apt-get update && apt-get install -y unzip libzip-dev libpng-dev libjpeg-dev libfreetype6-dev libonig-dev sqlite3 libsqlite3-dev git curl && \
    docker-php-ext-install pdo pdo_mysql mbstring zip gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . /var/www

RUN composer install --no-interaction

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]