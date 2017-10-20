FROM php:7.0-fpm
RUN apt-get update && apt-get install -y \
		libfreetype6-dev \
    	libjpeg62-turbo-dev \
    	libmcrypt-dev \
    	libpng12-dev \
    	libxml2-dev \
    	libicu-dev \
    	libxml++2.6-dev \
    	libpq-dev \
    	libmemcached-dev \
    	zlib1g-dev \
    	libzip-dev \
    	locales \
    	locales-all \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql pdo_mysql mysqli\
    && docker-php-ext-install -j$(nproc) iconv mcrypt intl soap xml xmlrpc opcache mbstring tokenizer openssl\
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && pecl install xdebug-2.5.0 zip memcached redis \
    && docker-php-ext-enable xdebug zip memcached redis\
    && { \
			echo 'xdebug.remote_enable=1'; \
			echo 'xdebug.remote_autostart=1'; \
			echo 'xdebug.remote_host=172.17.0.1'; \
	} | tee -a /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN locale-gen en_AU.UTF-8

COPY docker-entrypoint.sh /usr/local/bin/
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["php-fpm"]