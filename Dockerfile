FROM php:7.4-apache
RUN apt-get update --quiet && apt-get install -y --quiet unzip && rm -rf /var/lib/apt/lists/* \
 && a2enmod rewrite && a2enmod headers \
 && docker-php-ext-install mysqli opcache \
 && curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# install php gd extension
RUN apt-get update --quiet && \
apt-get install -y --quiet libfreetype6-dev libjpeg62-turbo-dev libpng-dev && \
docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ && \
docker-php-ext-install gd 

WORKDIR /wordpress

COPY . . 

COPY composer.json composer.lock /wordpress/
RUN composer install --no-interaction --no-autoloader --no-scripts

RUN apt-get update  -y
RUN apt-get install -y nano
# Permissions
RUN find /wordpress/ -exec chmod 555 {} \;
RUN mkdir /wordpress/wp-content/uploads && chmod 777 -R /wordpress/wp-content/uploads
RUN mkdir /wordpress/wp-content/themes/cache && chmod 777 -R /wordpress/wp-content/themes/cache

# Change DOCUMENT_ROOT
ENV APACHE_DOCUMENT_ROOT /wordpress/
RUN ls -al /etc/apache2/sites-available/

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
COPY php.ini /usr/local/etc/php/php.ini
COPY apache.conf /etc/apache2/sites-available/000-default.conf

RUN cat /etc/apache2/sites-available/000-default.conf
RUN cat /etc/apache2/apache2.conf
