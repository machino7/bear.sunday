FROM php:7.3-fpm

# よく使うツール、ライブラリのインストール
RUN apt update \
    && apt -y install \
       git \
       zip \
       unzip \
       vim \
       libpq-dev \
       libicu-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql intl mysqli \

# パッケージ掃除
    && apt clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# composerをインストール
WORKDIR /usr/bin
RUN curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

WORKDIR /media
