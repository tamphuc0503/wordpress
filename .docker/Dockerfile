FROM docker.io/aprilsea/chang-ai:wordpress.base

WORKDIR /app

COPY . .

RUN composer install --no-interaction

#RUN chown -R www-data:www-data /app/
#RUN chmod g+w -R /app/

# install php gd extension
RUN apt-get install -y --quiet apt-utils libfreetype6-dev libjpeg62-turbo-dev libpng-dev && \
    docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ && \
    docker-php-ext-install gd 
    
# install php zip extension
RUN apt-get install -y --quiet libzip-dev zip && \
    docker-php-ext-install zip


# ARG XDEBUG_VERSION="xdebug"
# # install xdebug. when deploying, should comment these line
# RUN yes | pecl install ${XDEBUG_VERSION} \
#     && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
#     && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/xdebug.ini \
#     && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/xdebug.ini \
#     && echo "xdebug.client_host=0.0.0.0" >> /usr/local/etc/php/conf.d/xdebug.ini \
#     && echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/xdebug.ini

    
# Permissions
RUN find /app/ -exec chmod 555 {} \;
RUN mkdir /app/wp-content/uploads && chmod 777 -R /app/wp-content/uploads
RUN mkdir /app/wp-content/themes/cache && chmod 777 -R /app/wp-content/themes/cache

# Change DOCUMENT_ROOT
ENV APACHE_DOCUMENT_ROOT /app/
RUN ls -al /etc/apache2/sites-available/

COPY .docker/php.ini /usr/local/etc/php/php.ini
COPY .docker/apache.conf /etc/apache2/sites-available/000-default.conf

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
