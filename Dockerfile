FROM php:7.4-fpm

RUN pecl install igbinary \
	&& docker-php-ext-install mysqli 