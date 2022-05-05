FROM wordpress

# Set environment variables used by the Wordpress image
# DB_USER and DB_PASSWORD are included as an example. However,
# these should be removed and set during docker run.
ENV WORDPRESS_DB_HOST=database-2.cqt9uwum4p5s.us-east-1.rds.amazonaws.com \
    WORDPRESS_DB_USER=admin \
    WORDPRESS_DB_PASSWORD=Qbvy23Qwazaq! \
    WORDPRESS_DB_NAME=wordpress \
    WORDPRESS_TABLE_PREFIX=wp_

COPY plugins/ /var/www/html/wp-content/plugins
COPY themes/ /var/www/html/wp-content/themes
COPY uploads/ /var/www/html/wp-content/uploads
