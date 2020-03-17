FROM php:7.3-fpm

# Install PHP extensions
RUN apt-get update && apt-get install -y \
      libpq-dev git unzip \
      libpng-dev libjpeg-dev libfreetype6-dev \
    && git clone -b 4.1.1 https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis \
    && rm -r /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-png-dir=/usr/include --with-jpeg-dir=/usr/include \
    && docker-php-ext-install \
      pdo_pgsql \
      pgsql \
      opcache \
      gd

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
