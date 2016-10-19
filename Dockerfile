FROM php:7.0-apache

# install gd
RUN apt-get update && apt-get install -y \
	curl \
	git \
	libcurl4-openssl-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
    && docker-php-ext-install -j$(nproc) \
		curl \
		mysqli \
		pdo \
		pdo_mysql \
		iconv \
		mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && apt-get purge -y --auto-remove \
    && rm -rf /var/lib/apt/lists/* \
    && apt-get clean

COPY . /var/www/html/

COPY docker-entrypoint.sh /usr/local/bin/

CMD ["docker-entrypoint.sh"]