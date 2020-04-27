FROM php:fpm

RUN docker-php-ext-install pdo_mysql

RUN pecl install apcu

RUN apt-get update && \
apt-get install -y \
zlib1g-dev libzip-dev

RUN docker-php-ext-install zip
RUN docker-php-ext-enable apcu

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --filename=composer --install-dir=/usr/local/bin \
    && php -r "unlink('composer-setup.php');"

WORKDIR /var/www/html

RUN usermod -u 16603 www-data && groupmod -g 10000 www-data && chown -R www-data:www-data /var/www/html

RUN PATH=$PATH:/var/www/html/vendor/bin:bin
