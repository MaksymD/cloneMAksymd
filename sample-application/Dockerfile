FROM ubuntu:18.04

ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update >/dev/null && \
        apt-get install --assume-yes apt-utils --no-install-recommends -y \
          php composer git vim \
          libapache2-mod-php7.2 \
            php7.2-cli \
            php7.2-curl \
            php7.2-json \
            php7.2-mbstring \
            php7.2-mysql \
            php7.2-xdebug \
            php7.2-xml \
            php7.2-zip \
            php7.2-intl \
        >/dev/null

COPY ./sample-application/ /var/www/html

WORKDIR /var/www/html

#RUN apt-get update
#RUN apt-get -y update && \
#    apt-get -y upgrade && \
#    apt-get -y install curl && \
#    curl -V && \
RUN curl -sL 'https://deb.nodesource.com/node_10.x/dists/bionic/Release' | bash
RUN apt-get update
RUN apt-get -y install nodejs
RUN node -v
RUN apt-get -y install npm
RUN npm -v
RUN npm install -g newman

#ENV COMPOSER_ALLOW_SUPERUSER=1

RUN composer require kununu/controller-validation-bundle:dev-master
RUN composer install
#RUN composer install --ignore-platform-reqs
RUN composer require --dev jakub-onderka/php-parallel-lint

# Nope, that is not the best way, but for simplicity ¯\_(ツ)_/¯
CMD ["php", "bin/console", "server:run", "*:8000" ]
#ENV DEBIAN_FRONTEND teletype

