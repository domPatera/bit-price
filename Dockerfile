FROM php:8.1.12-apache
WORKDIR /var/www

ENV APACHE_DOCUMENT_ROOT=/var/www/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY . .

RUN chmod 0777 var/cache/dev
RUN chmod 0777 var/log
RUN chmod 0777 var/cache/dev/annotations.map

EXPOSE 80