FROM nginx

RUN rm /etc/nginx/nginx.conf /etc/nginx/conf.d/default.conf

COPY iaquobe /etc/nginx/sites-available/iaquobe
COPY nginx.conf /etc/nginx/nginx.conf

COPY html /usr/share/nginx/html
