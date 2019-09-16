# Use the latest HHVM from Docker Hub
FROM hhvm/hhvm-proxygen:latest

# Install the app
RUN rm -rf /var/www
ADD www/ /var/www

# Reconfigure HHVM
ADD hhvm.prod.ini /etc/hhvm/site.ini

# Google App Engine expects the runtime to serve HTTP traffic from port 8080.
EXPOSE 8080