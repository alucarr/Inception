#!/bin/sh

# WordPress kurulum dizini
WP_PATH="/var/www/html"

# WP-CLI'yi kontrol edin ve kurun
if [ ! -f /usr/local/bin/wp ]; then
    echo "WP-CLI bulunamadı, kurulum yapılıyor..."
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar
    mv wp-cli.phar /usr/local/bin/wp
else
    echo "WP-CLI zaten kurulu."
fi

# WordPress dosyalarının var olup olmadığını kontrol edin
if [ -f $WP_PATH/wp-config.php ]; then
    echo "WordPress zaten kurulu."
else
    echo "WordPress kurulumu başlatılıyor..."

    # WordPress'i manuel olarak indirin ve kurun
    wget http://wordpress.org/latest.tar.gz
    tar xfz latest.tar.gz
    mv wordpress/* $WP_PATH
    rm -rf latest.tar.gz
    rm -rf wordpress

    # Dosya izinlerini ayarlayın
    chown -R www-data:www-data $WP_PATH
    chmod -R 755 $WP_PATH

    # wp-config.php dosyasını oluşturun
    cd $WP_PATH
    wp config create --dbname=${DB_NAME} --dbuser=${DB_USER} --dbpass=${DB_PASSWORD} --dbhost=${DB_HOST} --allow-root
    
    # WordPress'i kurun
    wp core install --url=$DOMAIN_NAME/ --title=$WP_TITLE --admin_user=$WP_ADMIN_USR --admin_password=$WP_ADMIN_PWD --admin_email=$WP_ADMIN_EMAIL --skip-email --allow-root

    # Kullanıcı oluşturun
    wp user create $WP_USR $WP_EMAIL --role=author --user_pass=$WP_PWD --allow-root
    
    echo "WordPress kurulumu tamamlandı."
fi

# PHP-FPM'i başlatın
exec php-fpm8.2 -F
