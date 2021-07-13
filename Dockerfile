FROM nginx

RUN apt-get -y update && apt -y install php php-cli php-fpm

COPY ./html /usr/share/nginx/html

CMD service /usr/sbin/php7.4-fpm start && service nginx start && tail -f /dev/null
