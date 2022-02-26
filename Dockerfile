FROM php:8.1.2-alpine


COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
EXPOSE 8000

CMD [ "php", "artisan", "serve", "--host", "0.0.0.0" ]
