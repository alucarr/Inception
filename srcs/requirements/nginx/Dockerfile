FROM debian:bullseye

RUN apt-get update &&\
    apt-get install -y \
    nginx openssl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN mkdir /etc/nginx/ssl

COPY default /etc/nginx/sites-enabled/.

COPY nginx_start.sh /var/www

RUN chmod +x /var/www/nginx_start.sh

ENTRYPOINT ["/var/www/nginx_start.sh"]

CMD ["nginx", "-g", "daemon off;"]