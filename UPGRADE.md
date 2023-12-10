# Devcontainer
## Build base container:
- Go to [.devcontainer](./.devcontainer)
- Run command ```docker build -f Dockerfile -t aprilsea/wordpress .``` to build your wordpress image.
- Note: you can change your PHP VERSION to make sure we have enough library.
## Using aprilsea/wordpress

# Install locally
- create .env
- create public/wp-config.php
- Fill env variables (mariadb, mongodb, etc)
- composer update --no-interaction --optimize-autoloader --ignore-platform-reqs

# Check wp-config.php
- In start.sh, we will generate env and wp-config.php from wp-config.local.php.
- Go to wp-config.php to check WP_SITEURL and WP_HOME

# wp-cli
- Installation: ```curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar```
- Reference link: https://wp-cli.org/
- php wp-cli.phar --allow-root core update --version=6.3

# Run mulitple remi-php in CentOS7

## Installation 
- https://computingforgeeks.com/how-to-install-php-centos-rhel-linux/?expand_article=1
- https://www.digitalocean.com/community/tutorials/how-to-run-multiple-php-versions-on-one-server-using-apache-and-php-fpm-on-centos-8
- install scl ```sudo yum install centos-release-scl -y```
- sudo yum -y install https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
- sudo yum -y install https://rpms.remirepo.net/enterprise/remi-release-7.rpm
- sudo yum -y install yum-utils
- sudo yum-config-manager --disable 'remi-php*'
- sudo yum-config-manager --enable remi-safe
- sudo yum install php81-php-{cli,fpm,mysqlnd,zip,dev,devel,gd,mbstring,curl,xml,pear,bcmath,json,opcache,bz2,mongo,mcrypt,mongodb,memcached,phpize}
- All installation will be put in: 
    - /etc/opt/remi
    - /opt/remi
## Install from pecl
- /opt/remi/php81/root/usr/bin/pecl -d php_suffix=8.1 install mongodb

# Issues:
## Unable to read env
- WP cannot read $_ENV or getenv because FPM will clear env by default
- Need to /etc/php/