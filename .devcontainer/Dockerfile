FROM php:7.4-apache
RUN apt-get update --quiet && apt-get install -y --quiet unzip && rm -rf /var/lib/apt/lists/* \
 && a2enmod rewrite && a2enmod headers \
 && docker-php-ext-install mysqli opcache \
 && curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# install php gd extension
RUN apt-get update --quiet && \
    apt-get install -y --quiet  apt-utils libfreetype6-dev libjpeg62-turbo-dev libpng-dev && \
    docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ && \
    docker-php-ext-install gd 

# Update xdebug remote
RUN echo "[XDebug]\nxdebug.remote_enable = 1\nxdebug.remote_autostart = 1\nxdebug.remote_host=0.0.0.0" > /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Add vscode user
RUN useradd -ms /bin/bash vscode \
		&& usermod -aG www-data vscode

RUN apt-get update  -y
RUN apt-get install -y nano git net-tools telnet

# Add xDebug
RUN pecl install xdebug-3.1.0 \
	  && docker-php-ext-enable xdebug

#add vscode user
# RUN useradd -ms /bin/bash vscode \
# 		&& usermod -aG www-data vscode

WORKDIR /var/www/html

USER root
RUN chown -R www-data:www-data /var/www/html/
RUN chmod g+w -R /var/www/html/

# Permissions
# RUN find /var/www/html/ -exec chmod 555 {} \;
# RUN mkdir /var/www/html/wp-content/uploads && chmod 777 -R /var/www/html/wp-content/uploads
# RUN mkdir /var/www/html/wp-content/themes/cache && chmod 777 -R /var/www/html/wp-content/themes/cache

# Change DOCUMENT_ROOT
ENV APACHE_DOCUMENT_ROOT /var/www/html/
RUN ls -al /etc/apache2/sites-available/

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
COPY php.ini /usr/local/etc/php/php.ini
COPY apache.conf /etc/apache2/sites-available/000-default.conf
