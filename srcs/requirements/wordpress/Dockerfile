FROM debian:bullseye

# Sistem güncellemelerini yap
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y lsb-release ca-certificates curl gnupg && \
    curl -fsSL https://packages.sury.org/php/apt.gpg | apt-key add - && \
    echo "deb https://packages.sury.org/php/ $(lsb_release -cs) main" | tee /etc/apt/sources.list.d/php.list && \
    apt-get update && \
    apt-get install -y php8.2-fpm php8.2-mysqli wget tar && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# PHP-FPM için gerekli dizinleri oluştur
RUN mkdir -p /run/php && \
    chown -R www-data:www-data /run/php

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp


# Konfigürasyon dosyalarını ve betiği kopyala
COPY www.conf /etc/php/8.2/fpm/pool.d/www.conf
COPY setup_wordpress.sh /setup_wordpress.sh

# Betiği çalıştırılabilir yap
RUN chmod +x /setup_wordpress.sh

# WordPress kurulumunu yap ve PHP-FPM'i başlat
CMD ["/setup_wordpress.sh"]
