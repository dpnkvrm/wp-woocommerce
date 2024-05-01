FROM wordpress:6.5.2-php8.1-apache

WORKDIR /var/www/html
COPY wp-data/ /var/www/html

RUN chown www-data: ./* -R
RUN chmod g+w ./* -R
