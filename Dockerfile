FROM ubuntu:bionic
LABEL maintainer="Divyansh Srivastav <d.srivastav@celestialsys.com>"
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && \
    apt-get install apache2 php7.2 php7.2-mbstring php7.2-zip zip unzip curl wget git -y

RUN curl -sS https://getcomposer.org/installer |php
RUN mv composer.phar /usr/local/bin/composer

RUN mkdir -p /var/www/html/oauth 
COPY . /var/www/html/oauth 

WORKDIR /var/www/html/oauth/
RUN composer require league/oauth2-server

WORKDIR /var/www/html/oauth/app
RUN openssl genrsa -out private.key 2048
RUN openssl rsa -in private.key -pubout > public.key  

RUN chmod 600 private.key
RUN chown -R www-data:www-data /var/www/html/oauth/

EXPOSE 80	

CMD ["apachectl","-D","FOREGROUND"]
