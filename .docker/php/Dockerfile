FROM php:8.2-fpm-alpine3.18

WORKDIR /var/www/

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions \
    && install-php-extensions  \
        mysqli \
        xdebug \
    && rm -rf /tmp/*  /var/cache/apk/* \
    && adduser -D userdocker \
    && chown -R userdocker: /var/www

USER userdocker

CMD ["php-fpm","-R"]