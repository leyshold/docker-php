
FROM php:7.1.0-fpm

######
# You can install php extensions using docker-php-ext-install
######

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        openssl \
        libssl-dev \
        wget \
    && docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) pdo_mysql

# install mongodb extension
RUN pecl install mongodb \
    && echo 'extension=mongodb.so' > /usr/local/etc/php/conf.d/php-ext-mongodb.ini

# install redis extension
RUN pecl install redis \
    && echo 'extension=redis.so' > /usr/local/etc/php/conf.d/php-ext-redis.ini

# install swoole extension
RUN pecl install swoole \
    && echo 'extension=swoole.so' > /usr/local/etc/php/conf.d/php-ext-swoole.ini
