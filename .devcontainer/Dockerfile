ARG VARIANT=8.1
FROM mcr.microsoft.com/vscode/devcontainers/php:${VARIANT}

RUN apt-get update && apt-get install -y \
    libzip-dev \
    libxml2-dev \
    libpng-dev

# Install php extensions
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    xml \
    zip \
    bcmath \
    opcache \
    pcntl \
    sockets \
    gd

# disable xdebug
RUN rm -f /usr/local/etc/php/conf.d/xdebug.ini

# set memory limit
RUN echo 'memory_limit = 512M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini;

ARG NODE_VERSION="16"
RUN su vscode -c "umask 0002 && . /usr/local/share/nvm/nvm.sh && nvm install ${NODE_VERSION} 2>&1"
