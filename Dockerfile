FROM spaceonfire/nginx-php-fpm
COPY app/ /var/www/html/
EXPOSE 80
EXPOSE 443
