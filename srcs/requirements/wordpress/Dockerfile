FROM debian:bullseye

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y lsb-release ca-certificates curl gnupg && \
    curl -fsSL https://packages.sury.org/php/apt.gpg | apt-key add - && \
    echo "deb https://packages.sury.org/php/ $(lsb_release -cs) main" | tee /etc/apt/sources.list.d/php.list && \
    apt-get update && \
    apt-get install -y php8.2-fpm php8.2-mysqli wget tar && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN mkdir -p /run/php && \
    chown -R www-data:www-data /run/php

COPY www.conf /etc/php/8.2/fpm/pool.d/www.conf
COPY setup_wordpress.sh /setup_wordpress.sh

RUN chmod +x /setup_wordpress.sh

CMD ["/setup_wordpress.sh"]
