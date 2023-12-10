FROM docker.io/aprilsea/php8.1-fpm

WORKDIR /app

RUN apt-get install -y php8.1-gd php$PHP_VERSION-mysql

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

CMD ["/etc/init.d/php8.1-fpm start", "service nginx start" ]