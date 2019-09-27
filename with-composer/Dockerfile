# Use the latest HHVM from Docker Hub
FROM hhvm/hhvm-proxygen:latest

# PHP should be pre-installed in the container, so add php-cli if it get's dropped.
RUN apt-get update -y && apt-get install -y curl

# Create a new user named cottontail since we don't need to run with elevated permissions
# You can change the name to whatever you want just make sure to change the name in the hhvm.prod.ini file as well
RUN useradd -ms /bin/bash cottontail
USER cottontail
WORKDIR /home/cottontail
RUN mkdir /home/cottontail/composer

# Composer is no longer supported: https://hhvm.com/blog/2019/02/11/hhvm-4.0.0.html
# But needed it to install dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/home/cottontail/composer

# Install the app
RUN mkdir /home/cottontail/www
ADD www/ /home/cottontail/www

# Install dependencies and change the name of the autoload file
# https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
# We created the user above to avoid any issues with being the super user
RUN cd /home/cottontail/www && php /home/cottontail/composer/composer.phar install --no-dev

# If you add php-cli above, consider uninstalling it since you probably don't need it anymore
# RUN apt-get purge -y php-cli && apt-get autoremove -y

# Reconfigure HHVM
ADD hhvm.prod.ini /etc/hhvm/site.ini

# Google App Engine expects the runtime to serve HTTP traffic from port 8080.
EXPOSE 8080