FROM docker.io/aprilsea/php8.1-fpm

WORKDIR /app

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# USER root
# RUN chown -R www-data:www-data /app
# RUN chmod g+w -R /app

COPY ./.devcontainer/nginx.conf /etc/nginx/sites-available/default
# COPY php.ini /usr/local/etc/php/php.ini

# add vscode user
#RUN useradd -ms /bin/bash vscode && usermod -aG www-data vscode

CMD ["/bin/bash", "-c", "service php8.1-fpm start; service nginx start"]