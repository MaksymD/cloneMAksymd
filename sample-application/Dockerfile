FROM ubuntu:18.04

ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update >/dev/null && \
        apt-get install apt-utils --no-install-recommends -y \
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

RUN curl -sL 'https://deb.nodesource.com/node_10.x/dists/bionic/Release'| bash
RUN apt-get -y install nodejs
RUN node -v
RUN apt-get -y install npm
RUN npm -v
RUN npm install -g newman

RUN composer install

# Nope, that is not the best way, but for simplicity ¯\_(ツ)_/¯
CMD ["php", "bin/console", "server:run", "*:8000" ]

