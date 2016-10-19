#!/bin/sh

mkdir -p /var/www/html/project/tmp/cache/purifier
chown -R "$APACHE_RUN_USER:$APACHE_RUN_GROUP" /var/www/html/project/tmp/

mkdir -p /var/www/html/vendor/qcubed/framework/assets/cache/images
chown -R "$APACHE_RUN_USER:$APACHE_RUN_GROUP" /var/www/html/vendor/qcubed/framework/assets/cache/

mkdir -p /var/www/html/vendor/qcubed/framework/assets/upload
chown -R "$APACHE_RUN_USER:$APACHE_RUN_GROUP" /var/www/html/vendor/qcubed/framework/assets/upload/

apache2-foreground