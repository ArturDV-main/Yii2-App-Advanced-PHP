FROM yiisoftware/yii2-php:8.1-apache

# Change document root for Apache
RUN sed -i -e 's|/app/web|/app/backend/web|g' /etc/apache2/sites-available/000-default.conf

RUN --rm backend perl -pi -e 's/\r/\n/g' yii

RUN --rm backend perl -pi -e 's/\r/\n/g' yii_test