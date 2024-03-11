FROM php:7.4-apache
RUN apt-get update
RUN apt-get install -y libzip-dev libpng-dev  libicu-dev  libxml2-dev
RUN docker-php-ext-install mysqli zip gd intl xmlrpc soap exif
RUN docker-php-ext-enable mysqli zip gd intl xmlrpc soap exif
WORKDIR /var/www/html/moodle
COPY . .
Run chmod -R 777 /var/www/html/moodle
Run mkdir /var/www/moodledata
Run chown -R www-data /var/www/moodledata
Run chmod -R 777 /var/www/moodledata




