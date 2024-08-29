#!/bin/sh

if [ -f ./var/www/html/wp-config.php ]; then
    echo "WordPress already downloaded"
else
    ######## MANDATORY ########
    wget http://wordpress.org/latest.tar.gz
    tar xfz latest.tar.gz
    mv wordpress/* /var/www/html
    rm -rf latest.tar.gz
    rm -rf wordpress

    chown -R www-data:www-data /var/www/html
    chmod -R 755 /var/www/html

    # Veritabanı ayarlarını .env dosyasından al ve wp-config-sample.php dosyasını düzenle
    sed -i "s/username_here/${DB_USER}/g" /var/www/html/wp-config-sample.php
    sed -i "s/password_here/${DB_PASSWORD}/g" /var/www/html/wp-config-sample.php
    sed -i "s/localhost/${DB_HOST}/g" /var/www/html/wp-config-sample.php
    sed -i "s/database_name_here/${DB_NAME}/g" /var/www/html/wp-config-sample.php
    cp /var/www/html/wp-config-sample.php /var/www/html/wp-config.php

    #wp core install --url="$DOMAIN_NAME" --title="$WP_TITLE" --admin_user="$WP_ADMIN_USR" --admin_password="$WP_ADMIN_PWD" --admin_email="$WP_ADMIN_EMAIL" --skip-email
fi

exec php-fpm8.2 -F
