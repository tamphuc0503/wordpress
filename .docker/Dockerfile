# FROM php:8.1-apache
FROM docker.io/aprilsea/php:8.1-apache

WORKDIR /var/www/html

COPY . . 

USER root
RUN chown -R www-data:www-data /var/www/html/
RUN chmod g+w -R /var/www/html/

RUN composer install --no-interaction

# Permissions
RUN find /var/www/html/ -exec chmod 555 {} \;
RUN mkdir /var/www/html/wp-content/uploads && chmod 777 -R /var/www/html/wp-content/uploads
RUN mkdir /var/www/html/wp-content/themes/cache && chmod 777 -R /var/www/html/wp-content/themes/cache

# Change DOCUMENT_ROOT
ENV APACHE_DOCUMENT_ROOT /var/www/html/

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
COPY php.ini /usr/local/etc/php/php.ini
COPY apache.conf /etc/apache2/sites-available/000-default.conf
