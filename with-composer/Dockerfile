# Use the latest HHVM from Docker Hub
FROM hhvm/hhvm-proxygen:latest

# PHP should be pre-installed in the container, so add php-cli if it get's dropped.
RUN apt-get update -y && apt-get install -y curl

# Composer is no longer supported: https://hhvm.com/blog/2019/02/11/hhvm-4.0.0.html
# But needed it to install dependencies
RUN mkdir /opt/composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/opt/composer

# Install the app
RUN rm -rf /var/www
ADD www/ /var/www

# Install dependencies and change the name of the autoload file
# https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN cd /var/www && php /opt/composer/composer.phar install --no-dev

# If you add php-cli above, consider uninstalling it since you probably don't need it anymore
# RUN apt-get purge -y php-cli && apt-get autoremove -y

# Reconfigure HHVM
ADD hhvm.prod.ini /etc/hhvm/site.ini

# Google App Engine expects the runtime to serve HTTP traffic from port 8080.
EXPOSE 8080